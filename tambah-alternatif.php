<?php
	require_once 'config.php';
	require_once 'fungsi.php';

	require_once 'header.php';

if (isset($_POST['simpan'])) {
  $namaMobil = filter($_POST['nama']);
  $tahun = filter($_POST['tahun']);
  $jarakTempuh = filter($_POST['jk_tempuh']);
  $harga = filter($_POST['harga']);
  $kondisiMobil = filter($_POST['knd_mobil']);

  // insert ke database
  $tambahAlternatif = query("INSERT INTO `alternatif`(`id`, `nama`, `tahun`, `jk_tempuh`, `harga`, `knd_mobil`) VALUES (null,'$namaMobil','$tahun','$jarakTempuh','$harga','$kondisiMobil')")
  ;
  if ($tambahAlternatif) {
    redirect('alternatif.php');
  } else {
      echo "<script>
                Data Gagal ditambahkan!
            </script>";

  }
}
?>


<div class="container">
<section class="content">
	<h2 style="font-size:36px;">Tambah Data Mobil</h2>

	<form class="ui form" method="post" action="" style="width: 300px;">
		<div class="field">
			<label style="font-size:16px;">Nama Mobil</label>
			<input type="text" name="nama" placeholder="Nama Mobil Baru" required/>
		</div>
    <div class="field">
			<label style="font-size:16px;">Tahun</label>
			<input type="text" name="tahun" placeholder="Tahun" required/>
		</div>
    <div class="field">
			<label style="font-size:16px;">Jarak Tempuh</label>
			<input type="text" name="jk_tempuh" placeholder="Jarak Tempuh" required/>
		</div>
    <div class="field">
			<label style="font-size:16px;">Harga</label>
			<input type="number" name="harga" placeholder="Harga Mobil" required/>
		</div>
    <div class="field">
			<label style="font-size:16px;">Kondisi Mobil</label>
			<input type="text" name="knd_mobil" placeholder="Kondisi Mobil" required/>
		</div>
		<br>
    <button type="submit" class="btn-primary" name="simpan">Simpan Data</button>
	</form>
</section>
</div>


<?php require_once 'footer.php'; ?>