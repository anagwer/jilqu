
<?php
$id = $_GET['nama'];
include 'model_aksesoris.php';
$model = new Model();
$data = $model->edit($id);
?>
<!doctype html>
<html lang="en">
<head>
<title>Edit Aksesoris</title>
<link rel="stylesheet" type="text/css" href="asset/style.css">
</head>
<body>
<div class="halaman ">
<fieldset>
<legend><h1>Edit Aksesoris</h1></legend>
<a href="index.php?page=aksesoris">Kembali</a>
<br><br>
<form action="proces_aksesoris.php" method="post" name="tmb_aksesoris_form" onSubmit="return validasi()">
<table width="50%">
    <tr>
        <td class="td3"><label>Nama</label></td>
        <td><input type="text" name="nama" value="<?php echo $data->nama ?>"></td>
        <td><div style="color : red;" id="namaErr"></div></td>
    </tr>
    <tr>
    <td class="td3"><label>stok</label></td>
    <td><input type="text" name="stok" value="<?php echo $data->stok ?>"></td>
    <td><div style="color : red;" id="stokErr"></div></td>
    <tr>
    <td class="td3"><label>Harga</label></td>
    <td><input type="text" name="harga" value="<?php echo $data->harga ?>"></td>
    <td><div style="color : red;" id="hargaErr"></div></td>
    </tr>
    <tr >
        <td colspan="2"><button class="button button1" type="submit" name="submit_edit">Submit</button></td>
    </tr>
</table>
</form>
</fieldset>
</div>
<script type="text/JavaScript" src="asset/form.js"></script>
</body>
</html>