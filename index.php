<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Web Dinamis</title>
<link rel="stylesheet" type="text/css" href="asset/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="content">
    <ul class="topnav">
        <li><a href="index.php?page=home">Beranda</a></li>
        <li><a href="index.php?page=katalog">Katalog</a></li>
        <li><a href="index.php?page=aksesoris">Aksesoris</a></li>
        <li><a href="index.php?page=profil">Profil</a></li>
        <li class="right"><a href="index.php?page=logout">Log out</a></li>
    </ul>

<div class="badan">
<?php
    if(isset($_GET['page'])){
        $page = $_GET['page'];
        switch ($page) {
        case 'home':
            include "home.php";
        break;
        case 'katalog':
            include "katalog.php";
        break;
        case 'tambah-katalog':
            include "tambah_katalog.php";
        break;
        case 'aksesoris':
            include "aksesoris.php";
        break;
        case 'tambah-aksesoris':
            include "tambah_aksesoris.php";
        break;
        case 'edit-aksesoris':
            include "edit_aksesoris.php";
        break;
        case 'edit-katalog':
            include "edit_katalog.php";
        break;
        case 'profil':
            include "profil.php";
        break;
        case 'logout':
            include "logout.php";
        break;
        default:
            echo "<center><h3>Maaf. Halaman tidak di temukan!</h3></center>";
        break;
        }
    }else{
        include "home.php";
    }
?>
</div>
<div class="footer">
    <p class="deskripsi">Made by: Giwang & Shafira</p>
</div>
</div>
</body>
</html>