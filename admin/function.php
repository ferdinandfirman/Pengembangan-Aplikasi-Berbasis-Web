<?php

    $conn = mysqli_connect("localhost", "root", "", "gki_penginjil_web");

    //ambil data dari tabel ... database / query
    // $result = mysqli_query ($conn, "SELECT * FROM mahasiswa");

    //ambil data(fetch) mahasiswa dari object result
    //mysqli_fetch_row() //mengembalikan array numerik
    //mysqli_fetch_assoc() //mengembalikan array asosiatif
    //mysqli_fetch_array() //mengembalikan keduanya
    //mysqli_fetch_object() 

    // while ( $mhs = mysqli_fetch_row($result)){
    //     var_dump ($mhs["nama"]);

    // };
// function query($query) {
//     global $conn;
//     $result = mysqli_query($conn, $query);
//     $rows = [];
//     while ( $row = mysqli_fetch_assoc($result)){
//         $rows[] = $row;
//     }
//     return $rows;
// }

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function registrasi($data) {
    global $conn;

    $username = strtolower (stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    //cek username apakah username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM admin WHERE username = '$username'");

    if(mysqli_fetch_assoc($result)){
        echo "<script>
                alert('username telah digunakan')
                
            </script>";
        return false;
    }

    //cek konfirmasi password
    if ( $password !== $password2 ) {
        echo "<script>
                alert('konfirmasi password tidak sesuai!');

            </script>";
        return false;

    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan admin baru ke database
    mysqli_query($conn, "INSERT INTO admin VALUES('', '$username', '$password')");

    return mysqli_affected_rows($conn);

}


function tambah_warta($data) {
    global $conn;
        $judul_warta = htmlspecialchars($data["judul_warta"]);
        $isi_warta = htmlspecialchars($data["isi_warta"]);
        // $tgl_pembuatan = "SELECT CURTIME()";

        $query = "INSERT INTO warta VALUES ('', '$judul_warta', '$isi_warta', '', '')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
}

function hapus_warta($id_warta) {
    global $conn;
    mysqli_query($conn, "DELETE FROM warta WHERE id_warta = $id_warta ");

    return mysqli_affected_rows($conn);
}

function ubah_warta($data) {
    global $conn;
        $id_warta = $data["id_warta"];
        $judul_warta = htmlspecialchars($data["judul_warta"]);
        $isi_warta = htmlspecialchars($data["isi_warta"]);
        // $tgl_pembuatan = "SELECT CURTIME()";

        $query = "UPDATE warta SET judul_warta = '$judul_warta', isi_warta = '$isi_warta' WHERE id_warta = $id_warta" ;
        
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
}