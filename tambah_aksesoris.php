<!doctype html>
<html lang="en">
<head>
<title>Tambah Data Aksesoris</title>
<link rel="stylesheet" type="text/css" href="asset/style.css">
</head>
<body>
<div class="halaman ">
<fieldset>
<legend><h1>Tambah Aksesoris</h1></legend>
<a href="index.php?page=aksesoris">Kembali</a>
<br><br>
<form action="proces_aksesoris.php" method="post" name="tmb_aksesoris_form" onSubmit="return validasi()">
<table width="50%">
    <tr>
        <td class="td3"><label>Nama</label></td>
        <td><input type="text" name="nama" id="nama"></td>
        <td><div style="color : red;" id="namaErr"></div></td>
    </tr>
    <tr>
    <td class="td3"><label>stok</label></td>
    <td><input type="text" name="stok" ></td>
    <td><div style="color : red;" id="stokErr"></div></td>
    <tr>
    <td class="td3"><label>Harga</label></td>
    <td><input type="text" name="harga"></td>
    <td><div style="color : red;" id="hargaErr"></div></td>
    </tr>
    <tr >
        <td colspan="2"><button class="button button1" type="submit" name="submit_simpan">Submit</button></td>
    </tr>
</table>
</form>
</fieldset>
</div>
<script type="text/JavaScript" src="asset/form.js"></script>
</body>
</html>

