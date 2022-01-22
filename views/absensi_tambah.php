<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Isi Absensi</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk isi absensi-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                               <div class="col-sm-9">
                             
                            </div>
							</div>
						  <div class="form-group">
                            <label for="nik" class="col-sm-2 control-label">NIK</label>
                            <div class="col-sm-9">
                                <input type="varchar" name="nik" class="form-control" id="inputEmail3" placeholder="Inputkan NIK pegawai" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="nama" class="col-sm-2 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="varchar" name="nama" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Pegawai" required>
                            </div>
                        </div>
						<!--Form Untuk memilih Jenis Kelamin-->			
								
								<div class="form-group">
                            <label for="jenis_kelamin" class="col-sm-2 control-label">Jenis Kelamin</label>
                            <div class="col-sm-9 col-xs-9">
								<select name="jenis_kelamin" class="form-control">
									<option value="Laki-Laki">Laki-Laki</option>
									<option value="Perempuan">Perempuan</option>
							
								</select>
								</div>
								</div>			
								
								<div class="form-group">
                            <label for="hadir" class="col-sm-2 control-label">Hadir</label>
                            <div class="col-sm-9 col-xs-9">
								<select name="hadir" class="form-control">
									<option value="YA">YA</option>
									<option value="Tidak">Tidak</option>
							
								</select>
								</div>
								</div>
						 <div class="form-group">
                            <label for="tidak_hadir" class="col-sm-2 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="varchar" name="tidak_hadir" class="form-control" id="inputEmail3" placeholder="Inputkan Keterangan Jika Tidak Hadir dan Jangan Terlalu Panjang" >
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="jabatan" class="col-sm-2 control-label">Jabatan</label>
                            <div class="col-sm-9 col-xs-9">
								<select name="jabatan" class="form-control">
									<option value="Direktur">Direktur</option>
									<option value="Manajer">Manajer</option>
									<option value="Staf Admin">Staff Admin</option>
                                    <option value="Pergudangan">Pergudangan</option>
								</select>
								</div>
							</div>
						<div class="form-group">
                            <label for="jam_datang" class="col-sm-2 control-label">Jam Masuk</label>
                            <div class="col-sm-9">
                                <input type="varchar" name="jam_datang" class="form-control" id="inputEmail3" placeholder="Inputkan Waktu Datang Jika Hadir" >
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="jam_pulang" class="col-sm-2 control-label">Jam Keluar</label>
                            <div class="col-sm-9">
                                <input type="varchar" name="jam_pulang" class="form-control" id="inputEmail3" placeholder="Inputkan Waktu Pulang Jika Ada" >
                            </div>
                        </div>
					
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span>Absensi</button>
                            </div>
                        </div>
                    </form>


               
                </div>
                <div class="panel-footer">
                    <a href="?page=absensi&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Halaman Absen
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
	//mengambil data dari Form
	
	$nik=$_POST['nik'];
	$nama=$_POST['nama'];
	$jenis_kelamin=$_POST['jenis_kelamin'];
	$hadir= $_POST['hadir'];
	$tidak_hadir =$_POST['tidak_hadir'];
	$jabatan=$_POST['jabatan'];
	$jam_datang=$_POST['jam_datang'];
	$jam_pulang=$_POST['jam_pulang'];
	
	//buat sql
	$sql="INSERT INTO absensi_karyawan VALUES ('$nik','$nama','$jenis_kelamin','$hadir','$tidak_hadir','$jabatan','$jam_datang','$jam_pulang')";
	$query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan pegawai Error");
	if ($query){
        echo "<script>window.location.assign('?page=absensi&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    
	}
	}
?>
