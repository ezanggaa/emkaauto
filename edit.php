<?php
	include('config.php');
	include('fungsi.php');

	// mendapatkan data edit
	if(isset($_GET['jenis']) && isset($_GET['id'])) {
		$id 	= $_GET['id'];
		$jenis	= $_GET['jenis'];

		// hapus record
		$query 	= "SELECT nama FROM $jenis WHERE id=$id";
		$result	= mysqli_query($koneksi, $query);
		
		while ($row = mysqli_fetch_array($result)) {
			$nama = $row['nama'];
		}
	}

	if (isset($_POST['update'])) {
		$id 	= $_POST['id'];
		$jenis	= $_POST['jenis'];
		$nama 	= $_POST['nama'];

		$query 	= "UPDATE $jenis SET nama='$nama' WHERE id=$id";
		$result	= mysqli_query($koneksi, $query);

		if (!$result) {
			echo "Update gagal";
			exit();
		} else {
			header('Location: '.$jenis.'.php');
			exit();
		}
	}

	include('header.php');
?>
<div class="container">
<section class="content">
	<h2 style="font-size:36px;">Edit <?php echo $jenis?></h2>

	<form class="ui form" method="post" action="edit.php">
		<div class="inline field">
			<label style="font-size:16px;">Nama <?php echo $jenis ?></label>
			<input type="text" name="nama" value="<?php echo $nama?>">
			<input type="hidden" name="id" value="<?php echo $id?>">
			<input type="hidden" name="jenis" value="<?php echo $jenis?>">
		</div>

		<input class="ui teal button" type="submit" name="update" value="EDIT" style="margin: 20px 0 200px 0">
	</form>
</section>
</div>


<?php include('footer.php'); ?>