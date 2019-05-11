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
			// inisialsasi perulangan
			$loop=0;
			// inisialisasi jumlah perulangan
			$loopLength=count($arr);
			// perulangan cek karakter yang sama
			while ($loop==$loopLength-1) {
				// jika data baru tidak sama dengan data yang ada di array $arr
				if ($string!=$arr[$loop]) {
					// jika benar
					// masukkan string ke array
					$arr[$index]=$string;
					// tambah perulangan
					$loop+=1;
				}else{
					// jika salah
					// perulangan kembali ke awal
					$loop=0;
				}
			}
			// index ditambah 1
			$index+=1;
			echo "<br>";
			// tampilkan $string
			echo $string;
		}
	}

	// panggil fungsi cetak
	cetak(2);
	?>
</body>
</html>