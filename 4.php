<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>soal 4</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php  
	echo "<br>";
	
	// buat fungsi cetak
	function cetak(){
	// inisialisasi array
	$string = ['P','R','O','G','R','A','M','M','E','R'];
		// hitung panjang string
		$jumlah=count($string);
		// hitung panjang string untuk perulangan terbalik
		$jumlah1=$jumlah-1;
		// buat perulangan untuk menampilkan hasil 
		for ($i=0; $i < $jumlah; $i++) { 
			for ($k=0; $k < $jumlah; $k++) { 
				// jika data array ke $i sama dengan data array ke $k atau data array ke $k sama dengan panjang string terbalik
				if ($i==$k||$k==$jumlah1) {
					// jika benar
					// tampilkan karakter dari $string berdasarkan data hitung
					echo $string[$i]." ";
				}else{
					// jika salah
					// tampilkan sama dengan(=)
					echo "= ";
				}
			}
			// jumlah hitung terbalik di kurang 1
			$jumlah1--;
			echo "<br>";
		}
	}
	// panggil fungsi cetak
	cetak();
	?>
</body>
</html>