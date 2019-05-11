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
		<div>
			<h1 class="text-center">DAFTAR PROGRAMMER</h1>
		</div>
		
		<div class="row d-flex justify-content-center">
			<div class="col-mx-5 mt-2 d-flex justify-content-center">
				<!-- inputan nama programmer -->
				<form action="form.php?aksi=tambahProgrammer" method="POST" class="form-inline d-flex justify-content-center">
					<div class="form-group mx-sm-3 my-2">
						<input type="text" class="form-control" name="nama" placeholder="masukkan nama" required>
					</div>
					<div>
						<input type="submit"class="btn btn-primary my-2" name="tambah" value="Tambah">
					</div>
				</form>
			</div>
		</div>
		<?php 
		// pilih semua data dari tabel users
		$q="SELECT * from users";
		// eksekusi
		$query = mysqli_query($mysqli,$q);
		// perulangan menampilkan data users
		while ($dataUser=mysqli_fetch_array($query)) {
			?>
			<div class="row d-flex align-items-center justify-content-center">
				<div class="col-sm-5 bg-warning text-center mt-2">
					<div class="row d-flex align-items-center p-2">
						<div class="col-sm-3">
							<h6><?= $dataUser['name'] ?></h6>
							<p>
								<?php  
								// pilih semua data dari tabel skills
								$r="SELECT * from skills where user_id='".$dataUser['id']."'";
								// eksekusi
								$query2 = mysqli_query($mysqli,$r);
								// hitung jumlah data
								$jumlah = mysqli_num_rows($query2);
								// inisialisasi urutan
								$no=1;
								// perulangan menampilkan data skills
								while ($dataSkills=mysqli_fetch_array($query2)) {
									echo $dataSkills['name'];
									if ($no<$jumlah) {
										echo ", ";
									}else{
										echo ".";
									}
									// $no tambah 1
									$no++;
								}
								?>
							</p>
						</div>
						<div class="col-sm-9">
							<!-- inputan nama skill -->
							<form action="form.php?aksi=tambahSkill&id=<?= $dataUser['id'] ?>" method="POST" class="form-inline d-flex justify-content-center">
								<div class="form-group mx-sm-3 my-2">
									<input type="text" class="form-control" name="skill" placeholder="masukkan skill" required>
								</div>
								<div>
									<input type="submit"class="btn btn-primary my-2" name="tambah" value="Tambah">
								</div>
							</form>
						</div>
					</div>
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