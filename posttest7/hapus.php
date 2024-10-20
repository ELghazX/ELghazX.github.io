<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}
require 'koneksi.php';

$id = $_GET['id'];
$findQuery = mysqli_query($conn, "SELECT * FROM akun WHERE id = $id");
$listakun = [];

while ($akun = mysqli_fetch_assoc($findQuery)) {
    $listakun[] = $akun;
}

unlink('images/' . $listakun[0]['ss_map']);
$query = "DELETE FROM akun WHERE id =$id";
$result = mysqli_query($conn, $query);



if ($result) {
    echo "<script> alert('Berhasil menghapus data!');
                    document.location.href = 'dashboard.php#pesanan';
        </script>";
} else {
    echo "<script>
            alert('Gagal menghapus data!');
            document.location.href = 'dashboard.php#pesanan';
        </script> ";
}
