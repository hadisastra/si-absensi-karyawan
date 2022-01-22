<?php
if(!isset($_SESSION ['idsesi'])) {
    echo "<script> window.location.assign('../index.php'); </script>";
}
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Data Karyawan</h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>NO</th><th>NIK</th><th>NAMA</th><th>PENDIDIKAN</td><th>JABATAN</td>
								<th>STATUS</th><th>JENIS KELAMIN</th><th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM pegawai";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk 
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
									<td><?= $data['nik'] ?></td>
									<td><?= $data['nama'] ?></td>
									<td><?= $data['pendidikan'] ?></td>
									<td><?= $data['jabatan'] ?></td>
									<td><?= $data['status'] ?></td>
									<td><?= $data['jenis_kelamin'] ?></td>
									
                                   
								   <td>
								  
                                         <a href="?page=pegawai&actions=edit&nik=<?= $data['nik'] ?>" class="btn btn-warning btn-xs">
                                            <span class="fa fa-edit"></span>
											</a>
											 <a href="?page=pegawai&actions=detail&nik=<?= $data['nik'] ?>" class="btn btn-info btn-xs">
                                            <span class="fa fa-eye"></span>
										</a>
                                        <a href="?page=pegawai&actions=delete&nik=<?= $data['nik'] ?>" class="btn btn-danger btn-xs">
                                            <span class="fa fa-remove"></span>
                                        </a>
                                    </td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="7">
                                    <a href="?page=pegawai&actions=tambah" class="btn btn-info btn-sm">
                                        Add Karyawan

                                    </a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

