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

    if (hapus_warta($id_warta) > 0) {
        echo "<script>
                alert('warta berhasil dihapus!');
                document.location.href = 'warta.php';
            </script>";
    } else {
        echo "<script>
                alert('warta gagal dihapus!');
                document.location.href = 'warta.php';
            </script>";
    }

?>