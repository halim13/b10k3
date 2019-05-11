<?php 
include 'config.php';
// inisialisasi variabel aksi
$aksi=$_GET['aksi'];
// jika aksi=tambahProgrammer
if ($aksi=="tambahProgrammer") {
	$nama=$_POST['nama'];
	$q="INSERT into users values('','$nama')";
	mysqli_query($mysqli,$q);
// jika aksi=tambahSkill
}else if ($aksi=="tambahSkill") {
	$skill=$_POST['skill'];
	$user=$_GET['id'];
	$q="INSERT into skills values('','$skill','$user')";
	mysqli_query($mysqli,$q);
}
// arahkan ke index.php
header("Location:index.php");
?>