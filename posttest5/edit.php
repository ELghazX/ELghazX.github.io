<?php
require 'koneksi.php';
$id = $_GET['id'];
$query = "SELECT * FROM akun WHERE id = $id";
$result = mysqli_query($conn, $query);

$listakun = [];

while ($row = mysqli_fetch_assoc($result)) {
    $listakun[] = $row;
}
$listakun = $listakun[0];

if (isset($_POST["tambah"])) {
    $Nama = $_POST["Nama"];
    $UID = $_POST["UID"];
    $Username = $_POST["Username"];
    $password = $_POST["password"];
    $jenis_joki = $_POST["jenis_joki"];

    $query = "UPDATE akun SET Nama = '$Nama', UID = '$UID', Username = '$Username', password = '$password', jenis_joki = '$jenis_joki' WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>
        alert('Data berhasil diubah');
        document.location.href = 'index.php#pesanan';
        </script>";
    } else {
        echo "<script>
        alert('Data gagal diubah');
        document.location.href = 'edit.php';
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
            <input type="text" id="Nama" name="Nama" value="<?php echo $listakun['Nama'] ?>" required>

            <label for="UID">UID Genshin:</label>
            <input type="number" id="UID" name="UID" placeholder="80xxxxxx" value="<?php echo $listakun['UID'] ?>" min="0" required>

            <label for="Username">Username/Email Login:</label>
            <input type="text" id="Username" name="Username" value="<?php echo $listakun['Username'] ?>" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" value="<?php echo $listakun['password'] ?>" required>

            <label for="jenis_joki">Layanan:</label>
            <select id="jenis_joki" name="jenis_joki" required>
                <option value="quest" <?php echo $listakun['jenis_joki'] == 'quest' ? 'selected' : '' ?>>Joki Quest</option>
                <option value="explore" <?php echo $listakun['jenis_joki'] == 'explore' ? 'selected' : '' ?>>Joki Explore</option>
                <option value="material" <?php echo $listakun['jenis_joki'] == 'material' ? 'selected' : '' ?>>Joki Material</option>
                <option value="build" <?php echo $listakun['jenis_joki'] == 'build' ? 'selected' : '' ?>>Joki Build Character</option>
                <option value="rawat_akun" <?php echo $listakun['jenis_joki'] == 'rawat_akun' ? 'selected' : '' ?>>Rawat Akun</option>
            </select>
            <input type="submit" value="Ubah" name="tambah" class="tambah">
        </form>
    </div>
    <footer>
        <?php require 'footer.php' ?>
    </footer>
    <script src="scripts/script.js"></script>


</body>

</html>