<?php
require 'functions.php';

$keyword = $_POST["keyword"];
$listakun = cari($keyword);

$i = 1;
foreach ($listakun as $akun) :
?>
    <tr class="table-akun-row">
        <td class="table-akun-data"><?= $i ?></td>
        <td class="table-akun-data"><?= $akun['Nama'] ?></td>
        <td class="table-akun-data"><?= $akun['UID'] ?></td>
        <td class="table-akun-data"><?= $akun['Username'] ?></td>
        <td class="table-akun-data"><?= $akun['password'] ?></td>
        <td class="table-akun-data"><?= $akun['jenis_joki'] ?></td>
        <td class="table-akun-data">
            <?php
            $imagePath = 'images/' . $akun['ss_map'];
            if (!file_exists($imagePath) || empty($akun['ss_map'])) {
                $imagePath = 'assets/dailycommis.png';
            }
            ?>
            <img src="<?= $imagePath ?>" alt="Screenshot map" class="ss_map" style="width: 80px; height: 100px; display: block; margin: 0 auto;">
        </td>
        <td class="table-akun-data">
            <div class="button-UD">
                <a href="edit.php?id=<?= $akun['id'] ?>">
                    <button class="edit-data">
                        <i data-feather="edit-3"></i>
                    </button>
                </a>
                <a href="hapus.php?id=<?= $akun['id'] ?>" onclick="return confirm ('yakin hapus?')">
                    <button class="hapus-data">
                        <i data-feather="trash-2"></i>
                    </button>
                </a>
            </div>
        </td>
    </tr>
<?php
    $i++;
endforeach;
?>

<script>
    feather.replace();
</script>