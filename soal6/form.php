<?php 
include 'config.php';

$aksi=$_GET['aksi'];
if ($aksi=="tambahProgrammer") {
	$id=$_GET['id'];
	$vote=$_GET['vote'];
	$vote+=1;
	$q="UPDATE candidates set earned_vote='$vote' where id='$id'";
	mysqli_query($mysqli,$q);
}else if ($aksi=="tambahProgrammer") {
	$nama=$_POST['nama'];
	$q="INSERT into users values('','$nama')";
	mysqli_query($mysqli,$q);
}else if ($aksi=="tambahSkills") {
	$skill=$_POST['skill'];
	$user=$_POST['id'];
	$q="INSERT into skills values('','$skill','$user')";
	mysqli_query($mysqli,$q);
}
header("Location:index.php");
?>