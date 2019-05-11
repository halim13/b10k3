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
	$array=[
		['a','c','b','e','d'],
		['g','e','f'],
	];	
	
	$array2=[
		['g','h','x','j'],
		['a','c','b','e','d'],
		['q','w','a'],
	];

	function sort_array($array){
		$jumlah = count($array);
		$arr=[];
		for ($i=0; $i < $jumlah; $i++) { 
			sort($array[$i]);
			$jumlahArr=count($array[$i]);
			$arr[$i]=$array[$i][$jumlahArr-1];
		}
		print_r($arr);
	}
	sort_array($array2);
	?>
</body>
</html>