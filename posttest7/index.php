<?php
session_start();
if (isset($_SESSION["login"])) {
    header("Location: dashboard.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="styles/login_register.css">
    <title>Login Joki</title>
</head>

<body>
    <div class="container" id="container">
        <!-- Register -->
        <div class="form-container sign-up">
            <form action="register.php" method="POST">
                <h1>Buat Akun</h1>
                <input type="text" name="username" id="username" placeholder="Username" required>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <input type="password" name="password2" id="password2" placeholder="Konfirmasi Password" required>
                <button type="submit" name="register">Register</button>
            </form>
        </div>
        <!-- register end -->

        <!-- Login -->
        <div class="form-container sign-in">
            <form action="login.php" method="POST">
                <h1>Login</h1>
                <input type="text" name="username" id="username" placeholder="Username" required>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <button type="submit" name="login">Login</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Hey!</h1>
                    <p>Sini login kalau sudah punya akun</p>
                    <button class="hidden" id="login">Login</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Halo!!</h1>
                    <p>Sini register dulu kalau belum ada akun</p>
                    <button class="hidden" id="register">Register</button>
                </div>
            </div>
        </div>

    </div>
    <button id="dark-mode-toggle">Ganti Mode</button>


    <script src="scripts/login.js"></script>
</body>

</html>