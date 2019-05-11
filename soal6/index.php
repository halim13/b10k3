<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Soal 6</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid">
		<div class="row d-flex justify-content-center">
			<div class="col-mx-5 mt-2 d-flex justify-content-center">
				<form action="form.php?aksi=tambahProgrammer" method="POST" class="form-inline d-flex justify-content-center">
					<div class="form-group mx-sm-3">
						<input type="text" class="form-control" name="nama" placeholder="masukkan nama programmer" required>
					</div>
					<input type="submit"class="btn btn-primary" name="tambah" value="Tambah">
				</form>
			</div>
		</div>
		<?php 
		$q="SELECT * from users";
		$query = mysqli_query($mysqli,$q);
		while ($d=mysqli_fetch_array($query)) {
			?>
			<div class="row d-flex align-items-center justify-content-center">
				<div class="col-sm-5 bg-warning text-center mt-2">
					<form action="form.php?aksi=tambah" method="POST" accept-charset="utf-8">
						<div class="row d-flex align-items-center p-2">
							<div class="col-sm-6">
								<h6><?= $d['name'] ?></h6>
								<h6><?= $d['earned_vote'] ?></h6>
							</div>
							<div class="col-sm-6">
								<form action="form.php?aksi=tambahSkill" method="POST" class="form-inline d-flex justify-content-center">
									<div class="form-group mx-sm-3">
										<input type="text" class="form-control" name="skill" placeholder="masukkan skill programmer" required>
									</div>
									<input type="submit"class="btn btn-primary" name="tambah" value="Tambah">
								</form>
							</div>
						</div>
					</form>
				</div>
			</div>
			
			<?php
		}
		?>
	</div>


	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>