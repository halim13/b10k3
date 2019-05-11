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

	function cetak($jumlah){
		$arr=[];
		$index=0;
		for ($i=0; $i < $jumlah; $i++) { 
			$jumlahna=32;
			$karakter = '0123456789abcdefghijklmnopqrstuvwxyz';
			$panjangKarakter=strlen($karakter);
			$string="";

			for ($j=0; $j < $jumlahna; $j++) { 
				$acak=rand(0,$panjangKarakter-1);
				$string .=$karakter[$acak];
			}

			$loop=0;
			$loopLength=count($arr);
			while ($loop==$loopLength-1) {
				if ($string!=$arr[$loop]) {
					$arr[$index]=$string;
					$loop+=1;
				}else{
					$loop=0;
				}
			}
			$index+=1;
			echo "<br>";
			echo $string;
		}
	}

	cetak(2);
	?>
</body>
</html>