<?php
//membuat query untuk hapus data
$sql="DELETE FROM pegawai WHERE nik ='".$_GET['nik']."'";
$query=mysqli_query($koneksi, $sql) or die ("SQL Hapus Error");
if($query){
    echo"<script> window.location.assign('?page=pegawai&actions=tampil');</script>";
}else{
    echo"<script> alert ('Maaf !!! Data Tidak Berhasil Dihapus') window.location.assign('?page=pegawai&actions=tampil');</scripr>";
}

