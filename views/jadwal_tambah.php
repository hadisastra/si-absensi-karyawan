<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Jadwal</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                               <div class="col-sm-9">
                             
                            </div>
							</div>
						  <div class="form-group">
                            <label for="hari" class="col-sm-2 control-label">Hari</label>
                            <div class="col-sm-9">
                                <input type="varchar" name="hari" class="form-control" id="inputEmail3" placeholder="Inputkan Hari Anda" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="tanggal" class="col-sm-2 control-label">Tanggal</label>
                            <div class="col-sm-9">
                                <input type="date" name="tanggal" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Anda" required>
                            </div>
                        </div>
						  <div class="form-group">
                            <label for="kelas" class="col-sm-2 control-label">Kelas</label>
                            <div class="col-sm-9 col-xs-9">
								<select name="kelas" class="form-control">
									<option value="Reguler">Reguler</option>
									<option value="Khusus">Khusus</option>
									
								</select>
                            </div>
                        </div>
						
						 <div class="form-group">
                            <label for="masuk" class="col-sm-2 control-label">Masuk</label>
                            <div class="col-sm-9">
                                <input type="varchar" name="masuk" class="form-control" id="inputEmail3" placeholder="Inputkan Waktu Masuk" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="keluar" class="col-sm-2 control-label">Keluar</label>
                            <div class="col-sm-9">
                                <input type="varchar" name="keluar" class="form-control" id="inputEmail3" placeholder="Inputkan Waktu Keluar" required>
                            </div>
                        </div>

                        <!--Status-->

                        <div class="form-group">
                            <label for="status" class="col-sm-2 control-label">Status</label>
                            <div class="col-sm-3 col-xs-9">
								<select name="status" class="form-control">
									<option value="Aktif">Aktif</option>
									<option value="Libur">Libur</option>
									
								</select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Jadwal</button>
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
	$tanggal=$_POST['tanggal'];
	$kelas=$_POST['kelas'];
	$masuk=$_POST['masuk'];
    $keluar=$_POST['keluar'];
	$status=$_POST['status'];
 
    //buat sql
    $sql="INSERT INTO jadwal VALUES ('$hari','$tanggal','$kelas','$masuk','$keluar','$status')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan jadwal Error");
    if ($query){
        echo "<script>window.location.assign('?page=jadwal&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
