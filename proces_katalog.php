<?php
include 'model_katalog.php';
if (isset($_POST['submit_simpan'])) {
    $jenis = $_POST['jenis'];
    $bahan = $_POST['bahan'];
    $warna = $_POST['warna'];
    $merek = $_POST['merek'];
    $id_bonus = $_POST['id'];
    $bonus = $_POST['nama'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];
    $model = new Model();
    $model->insert($jenis, $bahan, $warna, $merek, $id_bonus, $bonus, $stok, $harga);
    header('location:index.php?page=katalog');
}

if (isset($_POST['submit_edit'])) {
    $jenis = $_POST['jenis'];
    $bahan = $_POST['bahan'];
    $warna = $_POST['warna'];
    $merek = $_POST['merek'];
    $id_bonus = $_POST['id'];
    $bonus = $_POST['nama'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];
    $model = new Model();
    $model->update($jenis, $bahan, $warna, $merek, $id_bonus, $bonus, $stok, $harga);
    header('location:index.php?page=katalog');
}

if (isset($_GET['jenis'])) {
    $id = $_GET['jenis'];
    $model = new Model();
    $model->delete($id);
    header('location:index.php?page=katalog');
}