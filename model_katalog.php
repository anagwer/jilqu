<?php
include 'config.php';
class Model extends Connection{
public function __construct()
    {
        $this->conn = $this->get_connection();
    }
    public function insert($jenis, $bahan, $warna, $merek, $id_bonus, $bonus, $stok, $harga)
    {
        $sql = "INSERT INTO katalog (jenis, bahan, warna, merek, id_bonus, bonus, stok, harga) VALUES ('$jenis', '$bahan',
                '$warna', '$merek', '$id_bonus', '$bonus', '$stok', '$harga')";
        $this->conn->query($sql);
    }
    
    public function tampil_data()
    {
    $sql = "SELECT * FROM katalog";
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
    $sql = "SELECT * FROM katalog WHERE jenis='$id'";
    $bind = $this->conn->query($sql);
    while ($obj = $bind->fetch_object()) {
    $baris = $obj;
    }
    return $baris;
}
public function update($jenis, $bahan, $warna, $merek, $id_bonus, $bonus, $stok, $harga)
{
    $sql = "UPDATE katalog SET jenis='$jenis', bahan='$bahan', warna='$warna', merek='$merek', id_bonus='$id_bonus', bonus='$bonus', stok='$stok',harga='$harga' WHERE jenis='$jenis'";
    $this->conn->query($sql);
}

public function delete($jenis)
{
    $sql = "DELETE FROM katalog WHERE jenis='$jenis'";
    $this->conn->query($sql);
}

    
}