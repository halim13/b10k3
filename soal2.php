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
		$pecah = explode("@", $email);
		$pecah2 = explode(".", $pecah[1]);
		if(!preg_match("/^[a-zA-Z0-9@.]*$/",$email)||strlen($pecah[0])<4||$pecah2==null){
			echo "email <b>$email</b> invalid.<br>";
			echo "email hanya menerima inputan huruf kecil, besar, angka, @ atau titik dengan panjang nama akun 4 dan diakhiri domain.";
		}else{
			echo "email <b>$email</b> valid.";
		}
	}

	// panggil fungsi cekUsername
	cekUsername("........");
	echo "<br>";
	// panggil fungsi cekEmail
	cekEmail("kamu@");
	?>
</body>
</html>