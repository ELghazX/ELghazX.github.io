<?php include "navbar.php" ?>

<section id ="hasil">
    <div class="hasil-inputan">
    <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = htmlspecialchars($_POST['nama']);
            $user_login = htmlspecialchars($_POST['user-login']);
            $uid = htmlspecialchars($_POST['uid']);
            $service = htmlspecialchars($_POST['service']);
            $password = htmlspecialchars($_POST['password']);

            echo "<h2>Pesanan Anda Telah Dikirim</h2><br>";
            echo "<p><strong>Nama:</strong> $nama</p>";
            echo "<p><strong>UID:</strong> $uid</p>";
            echo "<p><strong>Username/Email Login:</strong> $user_login</p>";
            echo "<p><strong>Password:</strong> $password</p>";
            echo "<p><strong>Layanan:</strong> $service</p>";
        } else {
            echo "Tidak ada data yang dikirim.";
        }
    ?>

    </div>
    <script src="scripts/script.js"></script>
</section>

<?php include "footer.php" ?>