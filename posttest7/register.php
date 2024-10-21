<?php

require 'functions.php';

if (isset($_POST['register'])) {

    if (registrasi($_POST) > 0) {
        echo "<script>
        alert('User baru berhasil ditambahkan. Silahkan login!');
        document.location.href = 'index.php';
        </script>";
    } else {
        echo mysqli_error($conn);
    }
}

mysqli_close($conn);
