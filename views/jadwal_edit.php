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
                    <h3 class="panel-title">Form Update Jadwal</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
						<div class="form-group">
                               <div class="col-sm-9">
						</div>
						</div>
                         <div class="form-group">
                            <label for="hari" class="col-sm-3 control-label">Hari</label>
                            <div class="col-sm-9">
                                <input type="varchar" name="hari" value="<?=$data['hari']?>"class="form-control" id="inputEmail3" placeholder="Inputkan Hari ">
                            </div>
							</div>
						 <!--untuk tanggal lahir form tahun-bulan-tanggal 2016-10-10-->
                        <div class="form-group">


                            <label class="col-sm-3 control-label">Tanggal Masuk</label>
                            <!--untu tahun-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tahun" value="<?=$data['tanggal']?>" class="form-control">
                                    <?php for($i=2021;$i>2016;$i--) {?>
                                    <option value="<?=$i?>"> <?=$i?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Bulan-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="bulan" value="<?=$data['tanggal']?>" class="form-control">
                                    <?php 
                                    $bulan=  array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                                    for($j=12;$j>0;$j--) {?>
                                    <option value="<?=$j?>"> <?=$bulan[$j]?> </option>
                                    <?php }?>
                                    
                                </select>

                            </div>
                            <!--Untuk Tanggal-->
                            <div class="col-sm-2 col-xs-9">
                                <select name="tgl" value="<?=$data['tanggal']?>" class="form-control">
                                    <?php for($k=31;$k>0;$k--) {?>
                                    <option value="<?=$k?>"> <?=$k?> </option>
                                    <?php }?>
                                    
                                </select>
                            </div>
                        </div>
                        <!--end tanggal lahir-->           
						  <div class="form-group">
                            <label for="kelas"value="<?=$data['kelas']?>" class="col-sm-3 control-label">Kelas</label>
                            <div class="col-sm-9 col-xs-9">
								<select name="kelas" class="form-control">
									<option value="Reguler">Reguler</option>
									<option value="Khusus">Khusus</option>
								</select>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="masuk" class="col-sm-3 control-label">Masuk</label>
                            <div class="col-sm-9">
                                <input type="varchar" name="masuk" value="<?=$data['masuk']?>"class="form-control" id="inputEmail3" placeholder="Isi waktu masuk">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="keluar" class="col-sm-3 control-label">Keluar</label>
                            <div class="col-sm-9">
                                <input type="varchar" name="keluar" value="<?=$data['keluar']?>"class="form-control" id="inputEmail3" placeholder="Inputkan Waktu Keluar">
                             </div>
                        </div>
							
                        <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-2 col-xs-9">
								<select name="status" value="<?=$data['status']?>"class="form-control">
									<option value="Aktif">Aktif</option>
									<option value="Libur">Libur</option>
								</select>
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Jadwal</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=jadwal&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Jadwal
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $hari=$_POST['hari'];
	$tanggal=$_POST['tahun']."_".$_POST['bulan']."_".$_POST['tgl'];
    $kelas=$_POST['kelas'];
	$masuk=$_POST['masuk'];
    $keluar=$_POST['keluar'];
	$status=$_POST['status'];
   
    //buat sql
    $sql="UPDATE jadwal SET hari='$hari',tanggal='$tanggal',kelas='$kelas',masuk='$masuk',keluar='$keluar',status='$status' WHERE hari ='$hari'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=jadwal&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



