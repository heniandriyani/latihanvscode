<?php

// batas login
// if (!isset($_SESSION["login"])) {
//     echo "<script>
//     document.location.href = 'login.php';
//     </script>";

//     exit;
// }

include 'config/app.php';

$id_pengunjung = (int) $_GET['id_pengunjung'];

if (delete_pengunjung($id_pengunjung) > 0) {
    echo "<script>
        alert('Data Pengunjung Berhasil Dihapus');
        document.location.href = 'index.php';
    </script>";
} else {
    echo "<script>
        alert('Data Pengunjung Gagal Dihapus');
        document.location.href = 'data_buku.php';
    </script>";
}