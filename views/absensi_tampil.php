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
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Absensi Karyawan</h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th><th>NIK</th><th>Nama</th><th>Jenis Kelamin</td><th>Hadir</td><th>Keterangan<br>Tidak Hadir</td>
								<th>Jabatan</th><th>Jam Masuk</th><th>Jam Keluar</th><th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM absensi_karyawan";
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
									<td><?= $data['jenis_kelamin'] ?></td>
									<td><?= $data['hadir'] ?></td>
									<td><?= $data['tidak_hadir'] ?></td>
									<td><?= $data['jabatan'] ?></td>
                                    <td><?= $data['jam_datang'] ?></td>
									<td><?= $data['jam_pulang'] ?></td>
									<td>
								 
                                        <a href="?page=absensi&actions=delete&nik=<?= $data['nik'] ?>" class="btn btn-danger btn-xs">
                                            <span class="fa fa-remove"></span>
										<a href="?page=absensi&actions=edit&nik=<?= $data['nik'] ?>" class="btn btn-warning btn-xs">
                                            <span class="fa fa-edit"></span>
                                        </a>
                                    </td>
                                </tr>
                                  
                             
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="7">
                                    <a href="?page=absensi&actions=tambah" class="btn btn-info btn-sm">
                                        Add New Absensi

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

