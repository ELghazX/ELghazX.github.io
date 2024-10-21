<?php
require "functions.php";
$keyword = $_GET["keyword"];
$listakun = cari($keyword);
?>
<table class="table-akun">
    <thead>
        <tr class="table-akun-row">
            <th class="table-akun-header">No</th>
            <th class="table-akun-header">Nama</th>
            <th class="table-akun-header">UID</th>
            <th class="table-akun-header">Username</th>
            <th class="table-akun-header">Password</th>
            <th class="table-akun-header">Jenis_joki</th>
            <th class="table-akun-header">Screenshot Map</th>
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
                    <?php
                    $imagePath = 'images/' . $akun['ss_map'];
                    if (!file_exists($imagePath) || empty($akun['ss_map'])) {
                        $imagePath = 'assets/dailycommis.png';
                    }
                    ?>
                    <img src="<?php echo $imagePath ?>" alt="Screenshot map" class="ss_map" style="width: 80px; height: 100px; display: block; margin: 0 auto;">
                </td>
                <td class="table-akun-data">
                    <div class="button-UD">
                        <a href="edit.php?id=<?php echo $akun['id'] ?>">
                            <button class="edit-data">
                                <i data-feather="edit-3" alt="edit"></i>
                            </button>
                        </a>
                        <a href="hapus.php?id=<?php echo $akun['id'] ?>" onclick="return confirm ('yakin hapus?')">
                            <button class="hapus-data">
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