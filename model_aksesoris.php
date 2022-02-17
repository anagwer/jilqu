<?php
include 'config.php';
class Model extends Connection{
public function __construct()
    {
        $this->conn = $this->get_connection();
    }
    public function insert($nama, $stok, $harga)
    {
        $sql = "INSERT INTO aksesoris (nama, stok, harga) VALUES ('$nama', '$stok', '$harga')";
        $this->conn->query($sql);
    }
    
    public function tampil_data()
    {
    
    $sql = "SELECT * FROM aksesoris";
    $bind = $this->conn->query($sql);
    while ($obj = $bind->fetch_object()) {
    $baris[] = $obj;
    }
    if(!empty($baris)){
        return $baris;
    }
}

public function edit($id)
{
    $sql = "SELECT * FROM aksesoris WHERE nama='$id'";
    $bind = $this->conn->query($sql);
    while ($obj = $bind->fetch_object()) {
    $baris = $obj;
    }
    return $baris;
}
public function update($nama, $stok, $harga)
{
    $sql = "UPDATE aksesoris SET nama='$nama', stok='$stok',harga='$harga' WHERE nama='$nama'";
    $this->conn->query($sql);
}

public function delete($nama)
{
    $sql = "DELETE FROM aksesoris WHERE nama='$nama'";
    $this->conn->query($sql);
}

    
}