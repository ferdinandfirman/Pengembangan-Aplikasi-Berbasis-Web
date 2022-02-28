<?php
	require 'include/header.php';
	require 'include/navbar.php';
  require 'admin/function.php';
  $warta = query("SELECT * FROM warta");
  rsort($warta);
?>

  <!-- <a class="btn btn-success btn-lg font-weight-bold ml-auto" href="tambah_warta.php" role="button" style="height: 45px; font-size:18px;">TAMBAH WARTA</a> -->
  <?php $i = 1; ?>
  <?php foreach ($warta as $row):?>
  <div class ="card">
    <div class="card-body">
      <div class="row">
        <div class="col-md-3">
          <img style="width:300px; vertical-alignment:center" src="admin/img/warta/<?= $row["gambar_warta"];?>" alt="gambar poster">
        </div><br>
        <div class="col-md-9">
          <h3 style="text-transform:uppercase;"><b><?= $row["judul_warta"]; ?></b></h3>
          <p><?= $row["isi_warta"]; ?> 
            <br><br> Diposting pada <?= $row["tgl_pembuatan"]; ?>
          </p>
          <!-- <a class="btn btn-primary font-weight-bold" href="ubah_warta.php?id_warta=<?= $row["id_warta"]; ?>" role="button" style="text-align: right">UBAH</a>
          <a class="btn btn-danger font-weight-bold" href="hapus_warta.php?id_warta=<?= $row["id_warta"]; ?>" onclick = "
          return confirm('Apakah Anda yakin ingin menghapus warta ini?');" role="button" style="text-align: right">HAPUS</a> -->
        </div>
      </div>    
    </div>
  </div>

  <?php $i++; ?>
  <?php endforeach; ?>

  <br><br>

<?php
  require 'include/footer.php';
?>
