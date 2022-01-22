<?php
$nik=$_GET['nik'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM absensi_karyawan WHERE nik ='$nik'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Absen</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
						<div class="form-group">
                               <div class="col-sm-9">
						<div class="form-group">
                            <label for="nik" class="col-sm-3 control-label">NIK</label>
                            <div class="col-sm-9">
                                <input type="varchar" name="nik" value="<?=$data['nik']?>" class="form-control" id="inputEmail3" placeholder="Inputkan NIK pegawai" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="varchar" name="nama" value="<?=$data['nama']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Pegawai" required>
                            </div>
                        </div>
						<!--Form Untuk memilih Jenis Kelamin-->			
								
								<div class="form-group">
                            <label for="jenis_kelamin" class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-9 col-xs-9">
								<select name="jenis_kelamin" value="<?=$data['jenis_kelamin']?>" class="form-control">
									<option value="Laki-Laki">Laki-Laki</option>
									<option value="Perempuan">Perempuan</option>
							
								</select>
								</div>
								</div>			
								
								<div class="form-group">
                            <label for="hadir" class="col-sm-3 control-label">Hadir</label>
                            <div class="col-sm-9 col-xs-9">
								<select name="hadir" value="<?=$data['hadir']?>" class="form-control">
									<option value="YA">YA</option>
									<option value="Tidak">Tidak</option>
							
								</select>
								</div>
								</div>
						 <div class="form-group">
                            <label for="tidak_hadir" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="varchar" name="tidak_hadir" value="<?=$data['tidak_hadir']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Keterangan Jika Tidak Hadir dan Jangan Terlalu Panjang" >
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="jabatan" class="col-sm-3 control-label">Jabatan</label>
                            <div class="col-sm-9 col-xs-9">
								<select name="jabatan" value="<?=$data['jabatan']?>" class="form-control">
									<option value="Direktur">Direktur</option>
									<option value="Manajer">Manajer</option>
									<option value="Staf Admin">Staff Admin</option>
                                    <option value="Pergudangan">Pergudangan</option>
								</select>
								</div>
							</div>
						<div class="form-group">
                            <label for="jam_datang" class="col-sm-3 control-label">Jam Masuk</label>
                            <div class="col-sm-9">
                                <input type="varchar" name="jam_datang" value="<?=$data['jam_datang']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Waktu Datang Jika Hadir" >
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="jam_pulang" class="col-sm-3 control-label">Jam Keluar</label>
                            <div class="col-sm-9">
                                <input type="varchar" name="jam_pulang" value="<?=$data['jam_pulang']?>" class="form-control" id="inputEmail3" placeholder="Inputkan Waktu Pulang Jika Ada" >
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Absen</button>
                            </div>
                        </div>
                    </form>

				</div>
                </div>
                <div class="panel-footer">
                    <a href="?page=absensi&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Absen
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
