<!DOCTYPE html>
<html>
<head>
    <title>Cek Nama</title>
</head>
<body>
    <h1>Cek Nama</h1>
    
    <?php
    // Periksa apakah parameter 'andi' telah dikirim melalui URL
    if(isset($_REQUEST['andi'])) {
        // Jika 'andi' ada, tampilkan nilai variabel 'andi'
        $nama = $_REQUEST['andi'];
        echo "<p>Halo, $nama!</p>";
    } else {
        // Jika tidak, tampilkan pesan kesalahan
        echo "<p>Parameter 'andi' tidak ditemukan dalam URL.</p>";
    }
    ?>
    
    <!-- Link yang mengirimkan nilai variabel 'andi' -->
    <a href="http://localhost/cek.php?andi=andi">Link ke Cek</a>
</body>
</html>
