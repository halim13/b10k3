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
	$string = ['P','R','O','G','R','A','M','M','E','R'];
	function cetak($string){
		$jumlah=count($string);
		$jumlah1=$jumlah-1;
		for ($i=0; $i < $jumlah; $i++) { 
			for ($k=0; $k < $jumlah; $k++) { 
				if ($i==$k||$k==$jumlah1) {
					echo $string[$i]." ";
				}else{
					echo "= ";
				}
			}
			$jumlah1--;
			echo "<br>";
		}
	}
	cetak($string);

	?>
</body>
</html>