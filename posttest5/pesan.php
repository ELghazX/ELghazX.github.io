<?php
require 'koneksi.php';
$query = "SELECT * FROM akun";
$result = mysqli_query($conn, $query);
$listakun = [];
while ($row = mysqli_fetch_assoc($result)) {
    $listakun[] = $row;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <main id="tabel-pesan">
        <h2>Form Pesanan</h2>
        <p>Silahkan tekan tombol di bawah ini untuk memesan</p>
        <div class="container">
            <a href="tambah.php" class="submit">
                <button class="tombol">
                    <p>Pesan</p>
                </button>
            </a>
        </div>

        <table class="table-akun">
            <thead>
                <tr class="table-akun-row">
                    <th class="table-akun-header">No</th>
                    <th class="table-akun-header">Nama</th>
                    <th class="table-akun-header">UID</th>
                    <th class="table-akun-header">Username</th>
                    <th class="table-akun-header">Password</th>
                    <th class="table-akun-header">Jenis_joki</th>
                    <th class="table-akun-header">Edit</th>
                </tr>
            </thead>

            <tbody>
                <?php $i = 1;
                foreach ($listakun as $akun) : ?>
                    <tr class="table-akun-row">
                        <td class="table-akun-data"><?php echo $i ?></td>
                        <td class="table-akun-data"><?php echo $akun['Nama'] ?></td>
                        <td class="table-akun-data"><?php echo $akun['UID'] ?></td>
                        <td class="table-akun-data"><?php echo $akun['Username'] ?></td>
                        <td class="table-akun-data"><?php echo $akun['password'] ?></td>
                        <td class="table-akun-data"><?php echo $akun['jenis_joki'] ?></td>
                        <td class="table-akun-data">
                            <div class="button-UD">
                                <a href="edit.php?id=<?php echo $akun['id'] ?>">
                                    <button class="edit-data">
                                        <i data-feather="edit-3"></i>
                                    </button>
                                </a>
                                <a href="hapus.php?id=<?php echo $akun['id'] ?>" onclick="return confirm ('yakin hapus?')">
                                    <button class=" hapus-data">
                                        <i data-feather="trash-2"></i>
                                    </button>
                                </a>
                            </div>
                        </td>
                    </tr>
                <?php $i++;
                endforeach ?>
            </tbody>
        </table>
    </main>


    <script>
        feather.replace();
    </script>
</body>

</html>