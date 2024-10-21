<?php
session_start();

require "functions.php";

if (isset($_POST['login'])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM logres WHERE username = '$username'");

    if (mysqli_num_rows($result) === 1) {

        //cek pw nya 
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            $_SESSION["login"] = true;
            header("Location: dashboard.php#home");
            exit;
        }
    }

    echo "<script>
    alert ('username / password salah');
    document.location.href = 'index.php';
    </script>";
}
