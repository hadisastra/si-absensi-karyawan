<div class="container">
    <div class="row">
        <div class ="col-xs-12">

<link href="Assets/bootstrap.min.css" rel="stylesheet" type="text/css"/>
            <div class="alert alert-info">
			<body><marquee  widht="200" height="23"  scrollamount="9">
                <strong><font size="3">Selamat Datang di Sistem Informasi Absensi Karyawan
				</font></strong></marquee>
            </div>
        </div>
   
<div class="panel-body">
                     <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                       <thead>
<p align="center"><img src="img/SA logo.png" width="300" height="250" /></img>
<div class="row">
<div>
</div>
</div>
<p class="label-title" align="center"><strong><font size="5">Absensi Karyawan PT. Sintong Abadi </font></strong></p>                      
<p class="col-sm-12 col-xs-12" align="center">
                            Selamat datang di halaman administrator Sistem Informasi Absensi Karyawan PT. Sintong Abadi <br>
                            Melalui halaman ini dapat dilakukan pengelolaan data <br>
                            Akses menu  Data pada bagian atas sistem untuk pengelolaan data absen.<br>
                            Akses menu User untuk mengelola informasi tentang user yang login.<br><br><br>


<!--colomn kedua-->
    <div class="col-sm-12 col-xs-12">
      <div class="panel panel-default">
        <div class="panel-heading post-thumb>
                </div>
            </div>
        </div>
        <!--akhir colomn kedua-->
        <div class="col-sm-3 col-xs-12">
          <!--Jika terjadi login error tampilkan pesan ini-->
          <?php if(isset($_GET['error']) ) {?>
          <div class="alert alert-danger">Maaf! Login Gagal, Coba Lagi..</div>
          <?php }?>
          <?php if (isset($_SESSION['username'])) { ?>
          <div class="alert alert-info"> <strong>Welcome Developer Razor
          </strong> </div>
          <?php
           } else { ?>
          <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">Masuk Ke Sistem</h3>
            </div>
            <div class="panel-body">
              <form class="form-horizontal" action="proses_login.php" method="post">
                <div class="form-group">
                  <div class="col-sm-12">
                    <input type="text" name="user" class="form-control input-sm"
                                   placeholder="Username" required="" autocomplete="off"/>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-12">
                    <input type="password" name="pwd" class="form-control input-sm"
                                   placeholder="Password" required="" autocomplete="off"/>
                  </div>
                </div>
                <div class="form-group">
                <div class="col-sm-12">
                  <button type="submit" name="login" value="login"
                                        class="btn btn-success btn-block"><span class="fa fa-unlock-alt"></span> Login Ke Sistem </button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>

<div class="col-sm-3 col-xs-12"><div class="panel panel-default"></div>
</div>


 