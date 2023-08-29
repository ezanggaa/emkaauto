<?php 
	include('config.php');
	include('fungsi.php');

	// menjalankan perintah edit
	if(isset($_POST['edit'])) {
		$id = $_POST['id'];

		header('Location: edit.php?jenis=kriteria&id='.$id);
		exit();
	}

	// menjalankan perintah delete
	if(isset($_POST['delete'])) {
		$id = $_POST['id'];
		deleteKriteria($id);
	}

	// menjalankan perintah tambah
	if(isset($_POST['tambah'])) {
		$nama = $_POST['nama'];
		tambahData('kriteria',$nama);
	}

	include('header.php');
?>

<div class="container">
	<h1 class="head-kriteria" style="margin-top:20px;">Data Kriteria</h1>
	<div class="main-kriteria">
		<a href="tambah.php?jenis=kriteria" class="btn-tambah">Tambah</a>
		<table border="1" class="table">
			<thead>
				<tr>
					<th class="collapsing">No</th>
					<th>Nama Kriteria</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$query = "SELECT id,nama FROM kriteria ORDER BY id";
					$result	= mysqli_query($koneksi, $query);

					$i = 0;
					while ($row = mysqli_fetch_array($result)) {
						$i++;
				?>
				<tr>
					<td><?php echo $i ?></td>
					<td><?php echo $row['nama'] ?></td>
					<td class="right aligned collapsing">
						<form method="post" action="kriteria.php">
							<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
							<button type="submit" name="edit" class="ui mini teal left labeled icon button"><i
									class="right edit icon"></i>EDIT</button>
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