<?php
	session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Emka Auto</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
</head>

<body>
	<div class="nav-bar">
		<div class="container">
			<h1 class="nav-brand">Emka Auto</h1>
			<ul class="nav-menu">
				<li><a href="index.php">Beranda</a></li>

				<?php if($_SESSION['ulevel'] == 'Admin'){ ?>
				<li>
					<a href="#">Data</a>

					<ul class="dropdown">
						<li><a href="kriteria.php">Data Kriteria</a></li>
						<li><a href="alternatif.php">Data Mobil</a></li>
					</ul>
				</li>
				<?php }?>

				<li><a href="bobot_kriteria.php">Perbandingan Kriteria</a></li>
				<?php if($_SESSION['ulevel'] == 'Admin'){ ?>
				<li>
					<a href="bobot.php?c=1">Perbandingan Alternatif</a>

					<ul class="dropdown">
						<?php if (getJumlahKriteria() > 0) : ?>
						<?php for ($i = 0; $i <= (getJumlahKriteria()-1); $i++) : ?>
						<li><a class="item" href="bobot.php?c=<?= $i+1; ?>"><?= getKriteriaNama($i); ?></a></li>
						<?php endfor; ?>
						<?php endif; ?>
					</ul>
				</li>
				<?php }?>

				<li><a href="hasil.php">Hasil</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</div>
	</div>

	<body>