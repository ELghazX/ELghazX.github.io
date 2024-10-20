<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'joki_genshin';

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function registrasi($data)
{
    global $conn;

    $username = strtolower(stripslashes($data['username']));
    $password = mysqli_real_escape_string($conn, $data['password']);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);

    //cek konfirmasi pw
    if ($password !== $password2) {
        echo "<script>
        alert('Konfirmasi password tidak sesuai!');
        document.location.href = 'index.php';
        </script>";
        return false;
        // header("Location: index.php");
        // exit;
    }
    //cek username\
    $result = mysqli_query($conn, "SELECT username FROM logres WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script> 
        alert('username sudah ada')
        document.location.href = 'index.php';
        </script>";
        return false;
    }


    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //masukin ke database
    mysqli_query($conn, "INSERT INTO logres VALUES ('', '$username', '$password')");
    return mysqli_affected_rows($conn);
}


function cari($keyword)
{
    $query = "SELECT * from akun WHERE
    Username LIKE '%$keyword%' OR 
    Nama LIKE '%$keyword%' OR 
    UID LIKE '%$keyword%' OR 
    jenis_joki LIKE '%$keyword%'
    ";
    return query($query);
}
