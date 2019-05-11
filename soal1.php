<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>soal1</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
	$name="Halim Hasanudin";
	$address="Kp.Cikarokrok Rt. 01 Rw. 09 Ds. Sukasenang Kec. Banyuresmi Kab. Garut 44191";
	$hobbies=array("membaca","nonton film");
	$is_married=false;
	$school=[
		"highSchool"=>"SMKN 2 Garut",
		"university"=>"Sekolah Tinggi Teknologi Garut",
	];

	$skills=[
		["name"=>"HTML","score"=>5],
		["name"=>"CSS","score"=>3],
		["name"=>"PHP","score"=>4]
	];


	$data=[
		"name"=>$name,
		"address"=>$address,
		"hobbies"=>$hobbies,
		"is_married"=>$is_married,
		"school"=>$school,
		"skills"=>$skills
	];

	$json = json_encode($data);

	function biodata($data){
		echo($data);
	}

	biodata($json);
	?>
</body>
</html>