<?php
//membuat query untuk hapus data
$sql="DELETE FROM jadwal WHERE tanggal ='".$_GET['tanggal']."'";
$query=mysqli_query($koneksi, $sql) or die ("SQL Hapus Error");
if($query){
    echo"<script> window.location.assign('?page=jadwal&actions=tampil');</script>";
}else{
    echo"<script> alert ('Maaf !!! Data Tidak Berhasil Dihapus') window.location.assign('?page=jadwal&actions=tampil');</scripr>";
}

