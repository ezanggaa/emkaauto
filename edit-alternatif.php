<?php
	require_once 'config.php';
	require_once 'fungsi.php';

	require_once 'header.php';

if (isset($_POST['edit'])) {
  $id = filter($_GET['id']);
  $namaMobil = filter($_POST['nama']);
  $tahun = filter($_POST['tahun']);
  $jarakTempuh = filter($_POST['jk_tempuh']);
  $harga = filter($_POST['harga']);
  $kondisiMobil = filter($_POST['knd_mobil']);

  $editAlternatif = query("UPDATE `alternatif` SET `nama`='$namaMobil',`tahun`='$tahun',`jk_tempuh`='$jarakTempuh',`harga`='$harga',`knd_mobil`='$kondisiMobil' WHERE `id` = '$id'");

  if ($editAlternatif) {
    redirect('alternatif.php');
  } else {
    echo "<script>
              alert('Data gagal diedit!')
          </script>";
  }
} else if (isset($_GET['id'])) {
  $id = filter($_GET['id']);

  $dataAlternatif = mysqli_fetch_assoc(query("SELECT * FROM `alternatif` WHERE `id` = $id"));

  $namaMobil = $dataAlternatif['nama'];
  $tahun = $dataAlternatif['tahun'];
  $jarakTempuh = $dataAlternatif['jk_tempuh'];
  $harga = $dataAlternatif['harga'];
  $kondisiMobil = $dataAlternatif['knd_mobil'];
}


?>

<div class="container">
<section class="content">
	<h2 class="ui header" style="font-size: 36px;">Edit Data Mobil</h2>

	<form class="ui form" method="post" action="" style="width: 300px;">
    <input type="hidden" name="id" value="<?= $id; ?>" />
		<div class="field">
			<label style="font-size:16px;">Nama Mobil</label>
			<input type="text" name="nama" placeholder="Nama Mobil Baru" value="<?= $namaMobil; ?>">
		</div>
    <div class="field">
			<label style="font-size:16px;">Tahun</label>
			<input type="text" name="tahun" placeholder="Tahun" value="<?= $tahun; ?>" />
		</div>
    <div class="field">
			<label style="font-size:16px;">Jarak Tempuh</label>
			<input type="text" name="jk_tempuh" placeholder="Jarak Tempuh" value="<?= $jarakTempuh; ?>" />
		</div>
    <div class="field">
			<label style="font-size:16px;">Harga</label>
			<input type="number" name="harga" placeholder="Harga Mobil" value="<?= $harga; ?>" />
		</div>
    <div class="field">
			<label style="font-size:16px;">Kondisi Mobil</label>
			<input type="text" name="knd_mobil" placeholder="Kondisi Mobil" value="<?= $kondisiMobil; ?>" />
		</div>
		<br>
    <button type="submit" class="btn-primary" name="edit">Simpan Data</button>
	</form>
</section>
</div>



<?php require_once 'footer.php'; ?>