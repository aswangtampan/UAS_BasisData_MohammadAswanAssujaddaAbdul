<?php 
// koneksi database
include 'koneksi.php';
 

$nama = $_POST['nama'];
$nohp = $_POST['nohp'];
$alamat = $_POST['alamat'];
$umur = $_POST['umur'];
 if (!empty($nama) || !empty($nohp) || !empty($alamat)) {
// menginput data ke database
mysqli_query($koneksi,"insert into pegawai values('','$nama','$nohp','$alamat','$umur')");
 }
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>