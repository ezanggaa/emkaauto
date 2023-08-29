<?php
	include('config.php');
	include('fungsi.php');

	$jenis = $_GET['c'];

	include('header.php');
?>
<div class="container">
<section class="content">
	<h2 class="ui header" style="font-size:36px;">Perbandingan Alternatif &rarr; <?php echo getKriteriaNama($jenis-1) ?></h2>
	<table border="1" class="table-alternatif">
			<thead>
				<tr>
					<th class="collapsing">No</th>
					<th>Nama Mobil</th>
					<th>Tahun</th>
					<th>Jarak Tempuh</th>
					<th>Harga</th>
					<th>Kondisi Mobil</th>
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
					</td>
				</tr>

				<?php } ?>

			</tbody>
		</table>
		<br>
	<?php showTabelPerbandingan($jenis,'alternatif'); ?>
	<h3 class="ui header">Tabel Nilai Perbandingan Analytic Hierarchy Process</h3>
			<table class="ui collapsing table">
				<tbody>
					<tr>
						<td class="center aligned">1</td>
						<td>Sama pentingnya <em>(Equal Importance)</em></td>
					</tr>
					<tr>
						<td class="center aligned">2</td>
						<td>Sama hingga sedikit lebih penting</td>
					</tr>
					<tr>
						<td class="center aligned">3</td>
						<td>Sedikit lebih penting <em>(Slightly more importance)</em></td>
					</tr>
					<tr>
						<td class="center aligned">4</td>
						<td>Sedikit lebih hingga jelas lebih penting</td>
					</tr>
					<tr>
						<td class="center aligned">5</td>
						<td>Jelas lebih penting <em>(Materially more importance)</em></td>
					</tr>
					<tr>
						<td class="center aligned">6</td>
						<td>Jelas hingga sangat jelas lebih penting</td>
					</tr>
					<tr>
						<td class="center aligned">7</td>
						<td>Sangat jelas lebih penting <em>(Significantly more importance)</em></td>
					</tr>
					<tr>
						<td class="center aligned">8</td>
						<td>Sangat jelas hingga mutlak lebih penting</td>
					</tr>
					<tr>
						<td class="center aligned">9</td>
						<td>Mutlak lebih penting <em>(Absolutely more importance)</em></td>
					</tr>
				</tbody>
			</table>
</section>

</div>

<section class="content">
			

	</section>

<?php include('footer.php'); ?>