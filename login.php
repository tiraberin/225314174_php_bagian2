<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    if (empty($username) || empty($email)) {
        header("Location: error.php");
        exit;
    } else {
        $jam = date("H:i:s");
        $hari = date("l");
        $tanggal = date("Y-m-d");
        echo "Selamat datang, $username!<br>";
        echo "Email: $email<br>";
        echo "Jam login: $jam<br>";
        echo "Hari login: $hari<br>";
        echo "Tanggal login: $tanggal<br>";
    }
} else {
    header("Location: index.php");
    exit;
}
?>