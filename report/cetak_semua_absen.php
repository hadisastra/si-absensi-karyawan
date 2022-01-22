<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Semua Absensi</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Absensi PT. Sintong Abadi Kisaran </h2>
                        <h4>Jl. Duku, Kedai Ledang, Kec.Kisaran Tim., Kabupaten Asahan, Sumatera Utara, Kode Pos : 21222</h4>
                        <hr>
                        <h3>DATA SELURUH ABSEN</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                        <tbody>
                                <thead>
								<tr>
									<th>No.</th>
                                    <th> <center>NIK<center></th>
                                    <th>Nama</th>
                                    <th ><center>Jenis Kelamin
                                    </th>
                                    <th><center>Hadir</center></th>
                                    <th>Keterangan Tidak Hadir</th>
                                    <th><center>Jabatan</center>
                                    </th>
                                    <th><center>Jam Datang</center></th>
                                    <th><center>Jam Pulang</center></th>
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
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="10" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Hadi Sastra<strong></u><br>
                                        NIP.102871291416712
                                    </td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>