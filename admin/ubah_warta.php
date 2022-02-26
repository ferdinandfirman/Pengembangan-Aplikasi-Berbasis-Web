<?php
  session_start();

  if( !isset($_SESSION["login_admin"])){
    header("Location: login_admin.php");
    exit;
  }
  
	require 'include/header.php';
	require 'include/navbar.php';
    require 'function.php';

    $id_warta = $_GET["id_warta"]; 

    $warta = query("SELECT * FROM warta WHERE id_warta = $id_warta")[0];

    if (isset($_POST ["submit"] ) ) {

        //mengecek apakah berhasil atau tidak
        if( ubah_warta($_POST) > 0 ) {
            echo "<script>
                alert('warta berhasil diubah!');
                document.location.href = 'warta.php';
            </script>";
        } else {
            echo "<script>
                alert('warta gagal diubah!');
            </script>";
        }
    }
?>

    <h2 style="text-align:center"><b>UBAH WARTA</b></h2>
        <form method="POST" action="" enctype="multipart/form-data" style="margin:0px 20px">
            <input type="hidden" name="id_warta" value="<?= $warta["id_warta"]; ?>">
            <input type="hidden" name="gambar_warta_lama" value="<?= $warta["gambar_warta"]; ?>">
            <div class="form-group" style="font-size:22px">
                <label for="judul_warta" class="col-form-label text-md-right font-weight-bold">JUDUL WARTA</label>
                <input id="judul_warta" type="text" class="form-control" value="<?=$warta["judul_warta"];?>"
                       name="judul_warta" style="font-size:20px" required autocomplete="judul_warta" autofocus>
            </div>

            <div class="form-group" style="font-size:22px">
                <label for="isi_warta" class="col-form-label text-md-right font-weight-bold">ISI WARTA</label>
                <textarea id="isi_warta" style="font-size:20px" type="text" class="form-control" 
                name="isi_warta" rows="5" required><?=$warta["isi_warta"];?></textarea>
            </div>

            <div class="form-group" style="font-size:22px">
                <label for="gambar_warta" class="col-form-label text-md-right font-weight-bold">UPLOAD GAMBAR</label>
                <br><img style="width:250px" src="img/<?= $warta["gambar_warta"];?>" alt="belum ada gambar poster">
                <input id="gambar_warta" style="font-size:20px; margin-top:10px" type="file" class="form-control" 
                name="gambar_warta"></input>
            </div>

            <br>
            
            <div class="form-group" style="text-align: right;">
                <button type="submit" class="btn btn-primary font-weight-bold" name="submit" style="height:50px; width:280px; font-size:22px">
                    UBAH WARTA
                </button>
            </div>

</body>
</html> 
