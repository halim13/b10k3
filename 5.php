<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>soal 5</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php  
	// data array ke1
	$array=[
		['a','c','b','e','d'],
		['g','e','f'],
	];	
	// data array ke 2
	$array2=[
		['g','h','x','j'],
		['a','c','b','e','d'],
		['q','w','a'],
	];
	// buat fungsi sort array
	function sort_array($array){
		// hitung panjang $array
		$jumlah = count($array);
		// buat array baru
		$arr=[];
		// buat perulangan menampilkan hanya karakter tertinggi
		for ($i=0; $i < $jumlah; $i++) { 
			// urutkan berdasarkan terkecil ke terbesar
			sort($array[$i]);
			// hitung panjang jumlah array ke $i
			$jumlahArr=count($array[$i]);
			// masukkan data baru ke $arr 
			$arr[$i]=$array[$i][$jumlahArr-1];
		}
		// tampulkan array baru
		print_r($arr);
	}
	// panggil fungsi sort array
	sort_array($array2);
	?>
</body>
</html>