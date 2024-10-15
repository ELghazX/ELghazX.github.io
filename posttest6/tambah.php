<?php
require 'koneksi.php';
if (isset($_POST["tambah"])) {
    $Nama = $_POST["Nama"];
    $UID = $_POST["UID"];
    $Username = $_POST["Username"];
    $password = $_POST["password"];
    $jenis_joki = $_POST["jenis_joki"];

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
        $newFileName = date('Y-m-d H.i.s') . '.' . $fileExtension;

        if (move_uploaded_file($tmp_name, 'images/' . $newFileName)) {
            $query = "INSERT INTO akun VALUES ('', '$Nama', '$UID','$Username', '$password' , '$jenis_joki','$newFileName')";

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
        } else {
            echo "Gagal";
        }
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
            <input type="text" id="Nama" name="Nama" required>

            <label for="UID">UID Genshin:</label>
            <input type="number" id="UID" name="UID" placeholder="80xxxxxx" min="0" required>

            <label for="Username">Username/Email Login:</label>
            <input type="text" id="Username" name="Username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="jenis_joki">Layanan:</label>
            <select id="jenis_joki" name="jenis_joki" required onchange="toggleSSMap()">
                <option value="" disabled selected>-- Pilih Joki --</option>
                <option value="quest">Joki Quest</option>
                <option value="explore">Joki Explore</option>
                <option value="material">Joki Material</option>
                <option value="build">Joki Build Character</option>
                <option value="rawat_akun">Rawat Akun</option>
            </select>

            <div id="ss_map_container" style="width: 100%; padding: 1rem; font-size: 1.6rem; border: 1px solid var(--accent-color); border-radius: 0.5rem; background-color: var(--second-color); color: var(--putih); cursor: pointer;"
                onfocus="this.style.borderColor = 'var(--accent-color2)';"
                onblur="this.style.borderColor = 'var(--accent-color)';">
                <label for="ss_map">Screenshot Map (Khusus Joki Explore):</label>
                <input type="file" id="ss_map" name="ss_map">
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