<?php
require 'koneksi.php';
if (isset($_POST["tambah"])) {
    $Nama = $_POST["Nama"];
    $UID = $_POST["UID"];
    $Username = $_POST["Username"];
    $password = $_POST["password"];
    $jenis_joki = $_POST["jenis_joki"];

    $query = "INSERT INTO akun VALUES ('', '$Nama', '$UID','$Username', '$password' , '$jenis_joki')";

    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>
        alert('Data berhasil ditambahkan');
        document.location.href = 'index.php#pesanan';
        </script>";
    } else {
        echo "<script>
        alert('Data gagal ditambahkan');
        document.location.href = 'tambah.php';
        </script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <header>
        <?php require 'navbar.php' ?>
    </header>
    <div id="pesan">
        <form action="" method="POST">
            <label for="Nama">Nama:</label>
            <input type="text" id="Nama" name="Nama" required>

            <label for="UID">UID Genshin:</label>
            <input type="number" id="UID" name="UID" placeholder="80xxxxxx" min="0" required>

            <label for="Username">Username/Email Login:</label>
            <input type="text" id="Username" name="Username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="jenis_joki">Layanan:</label>
            <select id="jenis_joki" name="jenis_joki" required>
                <option value="" disabled selected>-- Pilih Joki</option>
                <option value="quest">Joki Quest</option>
                <option value="explore">Joki Explore</option>
                <option value="material">Joki Material</option>
                <option value="build">Joki Build Character</option>
                <option value="rawat_akun">Rawat Akun</option>
            </select>
            <input type="submit" value="Tambah Pesanan" name="tambah" class="tambah">
        </form>
    </div>
    <footer>
        <?php require 'footer.php' ?>
    </footer>
    <script src="scripts/script.js"></script>


</body>

</html>