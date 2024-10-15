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

    $olding = $_POST["olding"];
    if ($_FILES['ss_map']['error'] === 4) {
        $file_name = $olding;
    } else {
        $tmp_name = $_FILES["ss_map"]["tmp_name"];
        $file_name = $_FILES["ss_map"]["name"];
        $validExtension = ['jpg', 'jpeg', 'png'];
        $fileExtension = explode('.', $file_name);
        $fileExtension = strtolower(end($fileExtension));
        if (!in_array($fileExtension, $validExtension)) {
            echo "<script>
            alert('File yang diupload bukan gambar');
            document.location.href = 'tambah.php';
            </script>";
        } else {
            $newfilename = date('Y-m-d H.i.s') . '.' . $fileExtension;
            if (move_uploaded_file($tmp_name, 'images/' . $newfilename)) {
                unlink('images/' . $olding);
            } else {
                echo "Gagal";
            }
        }
    }

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
    <title>Form Pemesanan Jasa Joki</title>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <header>
        <?php require "navbar.php"; ?>

    </header>
    <div id="pesan">
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="Nama">Nama:</label>
            <input type="text" id="Nama" name="Nama" value="<?php echo $listakun['Nama'] ?>" required>

            <label for="UID">UID Genshin:</label>
            <input type="number" id="UID" name="UID" placeholder="80xxxxxx" value="<?php echo $listakun['UID'] ?>" min="0" required>

            <label for="Username">Username/Email Login:</label>
            <input type="text" id="Username" name="Username" value="<?php echo $listakun['Username'] ?>" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" value="<?php echo $listakun['password'] ?>" required>

            <label for="jenis_joki">Layanan:</label>
            <select id="jenis_joki" name="jenis_joki" required onchange="toggleSSMap()">
                <option value="quest" <?php echo $listakun['jenis_joki'] == 'quest' ? 'selected' : '' ?>>Joki Quest</option>
                <option value="explore" <?php echo $listakun['jenis_joki'] == 'explore' ? 'selected' : '' ?>>Joki Explore</option>
                <option value="material" <?php echo $listakun['jenis_joki'] == 'material' ? 'selected' : '' ?>>Joki Material</option>
                <option value="build" <?php echo $listakun['jenis_joki'] == 'build' ? 'selected' : '' ?>>Joki Build Character</option>
                <option value="rawat_akun" <?php echo $listakun['jenis_joki'] == 'rawat_akun' ? 'selected' : '' ?>>Rawat Akun</option>
            </select>

            <div id="ss_map_container" style="width: 100%; padding: 1rem; font-size: 1.6rem; border: 1px solid var(--accent-color); border-radius: 0.5rem; background-color: var(--second-color); color: var(--putih); cursor: pointer;"
                onfocus="this.style.borderColor = 'var(--accent-color2)';"
                onblur="this.style.borderColor = 'var(--accent-color)';">
                <label for="ss_map">Screenshot Map (Khusus Joki Explore):</label>
                <input type="file" id="ss_map" name="ss_map">
                <br>
                <img src="images/<?php echo $listakun['ss_map']  ?>" alt="<?php echo $listakun['ss_map'] ?>" style="width:80px; height: 100px">
            </div>

            <input type="submit" value="Tambah Pesanan" name="tambah" class="tambah">
        </form>
    </div>
    <footer>
        <?php require "footer.php"; ?>
    </footer>
    <script src="scripts/script.js"></script>
    <script>
        function toggleSSMap() {
            var jenisJoki = document.getElementById("jenis_joki").value;
            var ssMapContainer = document.getElementById("ss_map_container");

            if (jenisJoki === "explore") {
                ssMapContainer.style.display = "block";
            } else {
                ssMapContainer.style.display = "none";
            }
        }
    </script>
</body>

</html>