<?php 
	include('config.php');
	include('fungsi.php');

	// menjalankan perintah edit
	if(isset($_POST['edit'])) {
		$id = $_POST['id'];

		header('Location: edit.php?jenis=alternatif&id='.$id);
		exit();
	}

	// menjalankan perintah delete
	if(isset($_POST['delete'])) {
		$id = $_POST['id'];
		deleteAlternatif($id);
	}

	// menjalankan perintah tambah
	if(isset($_POST['tambah'])) {
		$nama = $_POST['nama'];
		tambahData('alternatif',$nama);
	}

	include('header.php');

?>

<div class="container">
	<h1 class="head-kriteria" style="margin-top:30px;">Data Mobil</h1>
	<div class="main-kriteria">
		<a href="tambah-alternatif.php" class="btn-tambah">Tambah</a>
		<table border="1" class="table-alternatif">
			<thead>
				<tr>
					<th class="collapsing">No</th>
					<th>Nama Mobil</th>
					<th>Tahun</th>
					<th>Jarak Tempuh</th>
					<th>Harga</th>
					<th>Kondisi Mobil</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>

				<?php
					$query = "SELECT * FROM alternatif ORDER BY id";
					$result	= mysqli_query($koneksi, $query);

					$i = 0;
					while ($row = mysqli_fetch_array($result)) {
					$i++;
				?>
				<tr>
					<td><?php echo $i ?></td>
					<td><?php echo $row['nama'] ?></td>
					<td><?php echo $row['tahun'] ?></td>
					<td><?php echo $row['jk_tempuh'] ?></td>
					<td><?php echo $row['harga'] ?></td>
					<td><?php echo $row['knd_mobil'] ?></td>
					<td class="right aligned collapsing">
						<form method="post" action="alternatif.php">
							<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
							<a href="edit-alternatif.php?id=<?= $row['id']; ?>" name="edit"
								class="ui mini teal left labeled icon button"><i class="right edit icon"></i>EDIT</a>
							<button type="submit" name="delete" class="ui mini red left labeled icon button"><i
									class="right remove icon"></i>DELETE</button>
						</form>
					</td>
				</tr>

				<?php } ?>

			</tbody>
		</table>
	</div>
</div>

<?php include('footer.php'); ?>