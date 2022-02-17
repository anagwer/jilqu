
<?php

    // Inisialisasi sesi
    session_start();
 
    // Batalkan pengaturan semua variabel sesi
    $_SESSION = array();
 
    // Hancurkan sesi.
    session_destroy();
 
    // Alihkan ke halaman login
    header("location: login.php");
    exit;

?>