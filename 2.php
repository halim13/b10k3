<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>soal 2</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<br>
	<?php 
	error_reporting(0);
	// buat fungsi cek username
	function cekUsername($username){
		// jika $sername bukan abcdefghijklmnopqrstuvwxyz. atau panjang $username bukan 8 maka
		if(!preg_match("/^[a-z.]*$/",$username)||strlen($username)!=8){
			// jika benar
			// tampilkan ini
			echo "username <b>$username</b> invalid.".strlen($username)." karakter<br>";
			echo "username hanya menerima inputan huruf kecil atau titik dengan panjang 8 karakter.";
		}else{
			// jika salah
			// tampilkan ini
			echo "username <b>$username</b> valid.";
		}
	}
	// buat fungsi cek email
	function cekEmail($email){
		// pregmatch email
		$pregEmail=preg_match("/^[a-zA-Z0-9@.]*$/",$email);
		// pecah sebelum dan setelah @
		$pecah = explode("@", $email);
		// pecah sebelum dan setelah .
		$pecah2 = explode(".", $pecah[1]);
		// panjang karakter sebelum @
		$panjangUser=strlen($pecah[0]);
		if(!$pregEmail||$panjangUser<4||$pecah2[0]==""||$pecah2[1]==""){
			echo "email <b>$email</b> invalid.<br>";
			echo "email hanya menerima inputan huruf kecil, besar, angka, at(@) atau titik(.) dengan panjang nama akun 4 dan diakhiri domain.";
		}else{
			echo "email <b>$email</b> valid.";
		}
	}
	// panggil fungsi cekUsername
	cekUsername("jonhalim");
	echo "<br>";
	echo "<br>";
	// panggil fungsi cekEmail
	cekEmail("halim@hasan.udin");
	?>
</body>
</html>