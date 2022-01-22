<?php
$nik=$_GET['nik'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM pegawai WHERE nik ='$nik'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">  
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Karyawan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
						<div class="form-group">
                               <div class="col-sm-9">
						</div>
						</div>
                         <div class="form-group">
                            <label for="nik" class="col-sm-2 control-label">NIK</label>
                            <div class="col-sm-9">
                                <input type="varchar" name="nik" value="<?=$data['nik']?>"class="form-control" id="inputEmail3" placeholder="Inputkan NIK Karyawan ">
                            </div>
							</div>
							<div class="form-group">
                            <label for="nama" class="col-sm-2 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="varchar" name="nama" value="<?=$data['nama']?>"class="form-control" id="inputEmail3" placeholder="Inputkan Nama Karyawan ">
                            </div>
							</div>
							<div class="form-group">
                            <label for="pendidikan" class="col-sm-2 control-label">Pendidikan</label>
                            <div class="col-sm-9">
                                <input type="varchar" name="pendidikan" value="<?=$data['pendidikan']?>"class="form-control" id="inputEmail3" placeholder="Inputkan Pendidikan Karyawan  ">
                            </div>
							</div>
					
                        <!--end tanggal lahir-->           
						  <div class="form-group">
                            <label for="jabatan" class="col-sm-2 control-label">Jabatan</label>
                            <div class="col-sm-9 col-xs-9">
								<select name="jabatan" value="<?=$data['jabatan']?>"class="form-control">
									<option value="Direktur">Direktur</option>
                                    <option value="Manajer">Manajer</option>
                                    <option value="Staf Admin">Staff Admin</option>
                                    <option value="Pergudangan">Pergudangan</option>
								</select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="status" class="col-sm-2 control-label">Status</label>
                            <div class="col-sm-9 col-xs-9">
								<select name="status" value="<?=$data['status']?>" class="form-control">
									<option value="Aktif">Aktif</option>
									<option value="Tidak">Tidak Aktif</option>
								</select>
                            </div>
                        </div>
						<!--Form Untuk memilih Agama-->
					
						<div class="form-group">
                            <label for="agama" class="col-sm-2 control-label">Agama</label>
                            <div class="col-sm-9 col-xs-9">
								<select name="agama" value="<?=$data['agama']?>"class="form-control">
									<option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Budha">Katolik</option>
                                    <option value="Budha">Budha</option>
							
								</select>
								</div>
								</div>
								
					<!--Form Untuk memilih Jenis Kelamin-->			
								
								<div class="form-group">
                            <label for="jenis_kelamin" value="<?=$data['jenis_kelamin']?>"class="col-sm-2 control-label">Jenis Kelamin</label>
                            <div class="col-sm-9 col-xs-9">
								<select name="jenis_kelamin" class="form-control">
									<option value="Laki-Laki">Laki-Laki</option>
									<option value="Perempuan">Perempuan</option>
							
								</select>
								</div>
								</div>
								
								 <div class="form-group">
                            <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="varchar" name="alamat" value="<?=$data['alamat']?>"class="form-control" id="inputEmail3" placeholder="Inputkan Alamat Karyawan " required>
                            </div>
                        </div>
						
						 <div class="form-group">
                            <label for="no_telepon" class="col-sm-2 control-label">No Telepon</label>
                            <div class="col-sm-9">
                                <input type="varchar" name="no_telepon" value="<?=$data['no_telepon']?>"class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Telepon" required>
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Karyawan</button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="panel-footer">
                    <a href="?page=pegawai&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Karyawan
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $nik=$_POST['nik'];
    $nama=$_POST['nama'];
	$pendidikan=$_POST['pendidikan'];
    $jabatan=$_POST['jabatan'];
	$status=$_POST['status'];
	$agama=$_POST['agama'];
	$jenis_kelamin=$_POST['jenis_kelamin'];
	$alamat=$_POST['alamat'];
	$no_telepon=$_POST['no_telepon'];
   
    //buat sql
    $sql="UPDATE pegawai SET nik='$nik',nama='$nama',pendidikan='$pendidikan',jabatan='$jabatan',status='$status',
	agama='$agama',jenis_kelamin='$jenis_kelamin',alamat='$alamat',no_telepon='$no_telepon' WHERE nik ='$nik'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=pegawai&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



