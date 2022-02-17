
<?php
$id = $_GET['jenis'];
include 'model_katalog.php';
$model = new Model();
$data = $model->edit($id);
?>
<!doctype html>
<html lang="en">
<head>
<title>Edit Katalog</title>
<link rel="stylesheet" type="text/css" href="asset/style.css">
<script type="text/JavaScript" src="asset/form.js"></script>
</head>
<body>
<div class="halaman ">
<legend><h1>Edit Katalog</h1><legend>
<a href="index.php?page=katalog">Kembali</a>
<br><br>
<form action="proces_katalog.php" method="post" name="katalog_form" onSubmit="return validasiKtlg()">
<table width="50%">
    <tr>
        <td class="td3"><label>Jenis</label></td>
        <td><input type="text" name="jenis" value="<?php echo $data->jenis ?>"></td>
        <td><div style="color : red;" id="jenisErr"></td>
    </tr>
    <tr>
    <td class="td3"><label>bahan</label></td>
    <td><input type="text" name="bahan" value="<?php echo $data->bahan ?>"></td>
    <td><div style="color : red;" id="bahanErr"></td>
    </tr>
    <tr>
    <td class="td3"><label>warna</label></td>
    <td><input type="text" name="warna" value="<?php echo $data->warna ?>"></td>
    <td><div style="color : red;" id="warnaErr"></td>
    </tr>
    <tr>
    <td class="td3"><label>merek</label></td>
    <td><input type="text" name="merek" value="<?php echo $data->merek ?>"></td>
    <td><div style="color : red;" id="merekErr"></td>
    </tr>
    <tr>
    <td><label>Id Bonus</label></td>
        <td><select name="id" id="id" class="form-control" onchange='changeValue(this.value)' required autofocus >  
        <option  selected disabled value >== Pilih Id Bonus == </option> 
            <?php  
            $con = mysqli_connect("localhost","root","","jilqu"); 
            $query = mysqli_query($con, "select * from aksesoris order by id esc");  
            $result = mysqli_query($con, "select * from aksesoris");  
            $a          = "var nama = new Array();\n;";  
            while ($row = mysqli_fetch_array($result)) {  
                echo '<option name="id" value="'.$row['id'] . '">' . $row['id'], $row['nama'] . '</option>';   
            $a .= "nama['" . $row['id'] . "'] = {nama:'" . addslashes($row['nama'])."'};\n";  
            }  
            ?>  
        </select></td>
        <td><div style="color : red;" id="bonusErr"></td></tr>
        <tr>  
                     <td>Bonus (Tersimpan : <?php echo $data->bonus ?>) </td>  
                     <td><input type="text" name="nama" id="nama" readonly></td>  
                     <td><div style="color : red;" id="namaErr"></td>
                </tr>  
    <tr>
    <td class="td3"><label>stok</label></td>
    <td><input type="text" name="stok" value="<?php echo $data->stok ?>"></td>
    <td><div style="color : red;" id="stokErr"></td>
    <tr>
    <td class="td3"><label>Harga</label></td>
    <td><input type="text" name="harga" value="<?php echo $data->harga ?>"></td>
    <td><div style="color : red;" id="hargaErr"></td>
    </tr>
    <tr >
        <td colspan="2"><button class="button button1" type="submit" name="submit_edit">Submit</button></td>
    </tr>
</table>
</form>
</div>
<script type="text/javascript">   
    <?php   
    echo $a;?>  
    function changeValue(id){  
    document.getElementById('nama').value = nama[id].nama;  
    };  
    </script>  
</body>
</html>