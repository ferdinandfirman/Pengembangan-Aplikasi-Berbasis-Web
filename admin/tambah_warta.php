<?php

session_start();

if( !isset($_SESSION["login_admin"])){
  header("Location: login_admin.php");
  exit;
}

	require 'include/header.php';
	require 'include/navbar.php';
    require 'function.php';

    if (isset($_POST ["submit"] ) ) {

        //mengecek apakah berhasil atau tidak
        if( tambah_warta($_POST) > 0 ) {
            echo "<script>
                alert('warta baru berhasil ditambahkan!');
                document.location.href = 'warta.php';
            </script>";
        } else {
            echo "<script>
                alert('warta gagal ditambahkan!');
            </script>";
        }
    }
?>

    <h2 style="text-align:center"><b>TAMBAH WARTA</b></h2>
        <form method="POST" action="" enctype="multipart/form-data" style="margin:0px 20px">
            <div class="form-group" style="font-size:22px">
                <label for="judul_warta" class="col-form-label text-md-right font-weight-bold">JUDUL WARTA</label>
                <input id="judul_warta" type="text" class="form-control" 
                       name="judul_warta" style="font-size:20px" required autocomplete="judul_warta" autofocus>
            </div>

            <div class="form-group" style="font-size:22px">
                <label for="isi_warta" class="col-form-label text-md-right font-weight-bold">ISI WARTA</label>
                <textarea id="isi_warta" style="font-size:20px" type="text" class="form-control" 
                name="isi_warta" rows="5" required></textarea>
            </div>

            <div class="form-group" style="font-size:22px">
                <label for="gambar_warta" class="col-form-label text-md-right font-weight-bold">UPLOAD GAMBAR</label>
                <input id="gambar_warta" style="font-size:20px" type="file" class="form-control" 
                name="gambar_warta"></input>
            </div>

            <br>
            <div class="form-group" style="text-align: right;">
                <button type="submit" class="btn btn-success font-weight-bold" name="submit" style="height:50px; width:280px; font-size:22px">
                    TAMBAHKAN WARTA
                </button>
            </div>

</body>
</html> 
