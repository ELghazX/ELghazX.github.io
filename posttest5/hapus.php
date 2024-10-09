<?php
require 'koneksi.php';

$id = $_GET['id'];


$query = "DELETE FROM akun WHERE id =$id";
$result = mysqli_query($conn, $query);

if ($result) {
    echo "<script> alert('Berhasil menghapus data mahasiswa!');
                    document.location.href = 'index.php#pesanan';
        </script>";
} else {
    echo "<script>
            alert('Gagal menghapus data mahasiswa!');
            document.location.href = 'index.php#pesanan';
        </script> ";
}
