<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>soal 3</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php  
	// buat fungsi cetak
	function cetak($jumlah){
		// buat array baru
		$arr=[];
		// inisialisasi index 
		$index=0;
		// buat perulangan menghitung jumlah string yang akan di tampilkan 
		for ($i=0; $i < $jumlah; $i++) { 
			// limit panjang string
			$jumlahna=32;
			// karakter yang ada untuk string 
			$karakter = '0123456789abcdefghijklmnopqrstuvwxyz';
			// hitung jumlah karakter
			$panjangKarakter=strlen($karakter);
			// string kosong untuk di isi
			$string="";
			// buat perulangan acak dan mengisi karakter untuk $string
			for ($j=0; $j < $jumlahna; $j++) { 
				// acak karakter
				$acak=rand(0,$panjangKarakter-1);
				// masukkan karakter yang di acak ke dalam string
				$string .=$karakter[$acak];
			}
			// masukkan string ke array baru
			$arr[$i]=$string;

			$jumlahArr=count($arr)-1;
			$no=0;
			// perulangan mencari duplikat isi
			while ($no!=$jumlahArr) {
				for ($j=0; $j < $jumlahArr; $j++) { 
					if ($arr[$j]==$string) {
						$no=0;
						// echo "true ";
					}else{
						// echo "false ";
						$no++;
					}
				}
			}
		}
		print_r($arr);
	}
	// panggil fungsi cetak
	cetak(5);
	?>
</body>
</html>