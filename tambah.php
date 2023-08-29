<?php
	include('config.php');
	include('fungsi.php');

	// mendapatkan data edit
	if(isset($_GET['jenis'])) {
		$jenis	= $_GET['jenis'];
	}

	if (isset($_POST['tambah'])) {
		$jenis	= $_POST['jenis'];
		$nama 	= $_POST['nama'];

		tambahData($jenis,$nama);

		header('Location: '.$jenis.'.php');
	}

	include('header.php');
?>
<div class="container">
<section class="content">
	<h2 style="font-size:36px;">Tambah <?php echo $jenis?></h2>

	<form class="ui form" method="post" action="tambah.php">
		<div class="inline field">
			<label style="font-size:16px;">Nama <?php echo $jenis ?></label>
			<input type="text" name="nama" placeholder="<?php echo $jenis?> baru" required>
			<input type="hidden" name="jenis" value="<?php echo $jenis?>">
		</div>
		<br>
		<input class="ui teal button" type="submit" name="tambah" value="TAMBAH" style="margin:20px 0 200px 0">
	</form>
</section>
</div>


<?php include('footer.php'); ?>