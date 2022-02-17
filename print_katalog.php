
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<?php
include 'model_katalog.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">
<head>
<title>Cetak Katalog</title>
<style>
h1 {
text-align: center;
}
table, td, th {
border: 1px solid #ddd;
text-align: left;
}
table {
border-collapse: collapse;
width: 100%;
}
th, td {
padding: 15px;
}
</style>
</head>
<body>
<h1>Katalog Saat Ini</h1>
<table>
<thead>
<tr>
<th>No.</th>
<th>Jenis</th>
<th>Bahan</th>
<th>Warna</th>
<th>Merek</th>
<th>Stok</th>
<th>Harga</th>
</tr>
</thead>
<tbody>
<?php
$result = $model->tampil_data();
if ( !empty($result) ) {
foreach ($result as $data): ?>
<tr>
<td><?=$index++ ?></td>
<td><?=$data->jenis ?></td>
<td><?=$data->bahan ?></td>
<td><?=$data->warna ?></td>
<td><?=$data->merek ?></td>
<td><?=$data->id_bonus ?></td>
<td><?=$data->bonus ?></td>
<td><?=$data->stok ?></td>
<td><?=$data->harga ?></td>
</tr>
<?php endforeach;
} else{ ?>
<tr>
<td colspan="9">Belum ada data pada tabel nilai mahasiswa.</td>
</tr>
<?php } ?>
</tbody>
</table>
<script>
window.print();
</script>
</body>
</html>