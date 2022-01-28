<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nohp = $_POST['nohp'];
$alamat = $_POST['alamat'];
$umur = $_POST['umur'];
 
// update data ke database
mysqli_query($koneksi,"update pegawai set nama='$nama', nohp='$nohp', alamat='$alamat', umur='$umur' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>