<html lang="en">
<?php
include 'model_katalog.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<link rel="stylesheet" type="text/css" href="asset/style.css">
<body>
<div class="halaman ">

<h1>Data Katalog Jilbab</h1>
<a class="button button1" href="index.php?page=tambah-katalog">Tambah Data</a>
<a class="button button1" href="print_katalog.php" target="_blank">Cetak Data</a>
<br><br>
<table border="1" width="100%">
<thead>
<tr>
<th>No.</th>
<th>Jenis</th>
<th>Bahan</th>
<th>Warna</th>
<th>Merek</th>
<th>Id Bonus</th>
<th>Bonus</th>
<th>Stok</th>
<th>Harga</th>
<th>Aksi</th>
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
<td><?=number_format($data->harga, 0, ",", ".")?></td>
<td>
<a class="button button1" name="edit" id="edit" href="index.php?page=edit-katalog&jenis=<?=$data->jenis ?>">Edit</a>
<a class="button button1" name="hapus" id="hapus" href="proces_katalog.php?jenis=<?=$data->jenis ?>">Delete</a></td>

</td>
</tr>
<?php endforeach;
} else{ ?>
<tr>
<td colspan="9">Belum ada data pada tabel Katalog.</td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
</body>

</html>
