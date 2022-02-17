<?php
include 'model_aksesoris.php';
if (isset($_POST['submit_simpan'])) {
    $nama = $_POST['nama'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];
    $model = new Model();
    $model->insert($nama, $stok, $harga);
    header('location:index.php?page=aksesoris');
}

if (isset($_POST['submit_edit'])) {
    $nama = $_POST['nama'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];
    $model = new Model();
    $model->update($nama, $stok, $harga);
    header('location:index.php?page=aksesoris');
}

if (isset($_GET['nama'])) {
    $id = $_GET['nama'];
    $model = new Model();
    $model->delete($id);
    header('location:index.php?page=aksesoris');
}
?>