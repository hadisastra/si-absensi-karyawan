<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Laporan</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM absensi_karyawan WHERE nik='" . $_GET ['nik'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Absensi PT. Sintong Abadi Kisaran </h2>
                        <h4>Jl. Duku, Kedai Ledang, Kec.Kisaran Tim., Kabupaten Asahan, Sumatera Utara, Kode Pos : 21222</h4>
                        <hr>
                        <h3>DATA ABSENSI</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                        <tbody>
						<tr>
                        <td>NIK</td> <td><?= $data['nik'] ?></td>
                        </tr>
                        <tr>
                        <td width="200">Nama</td> <td><?= $data['nama'] ?></td>
                        </tr>
                        <tr>
                        <td>Jenis Kelamin</td> <td><?= $data['jenis_kelamin'] ?></td>
                        </tr>
                        <tr>
                        <td>Hadir</td> <td><?= $data['hadir'] ?></td>
                        </tr>
						<tr>
                        <td>Keterangan Tidak Hadir</td> <td><?= $data['tidak_hadir'] ?></td>
                        </tr>
						<tr>
                        <td>Jabatan</td> <td><?= $data['jabatan'] ?></td>
                        </tr>
						<tr>
                        <td>Jam Datang</td> <td><?= $data['jam_datang'] ?></td>
                        </tr>
                        <tr>
                        <td>Jam Pulang</td> <td><?= $data['jam_pulang'] ?></td>
                        </tr>
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
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