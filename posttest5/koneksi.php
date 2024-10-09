<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'joki_genshin';

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die('Gagal terhubung ke database: ' . mysqli_connect_error());
}
