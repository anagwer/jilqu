<!doctype html>
<html lang="en">
<head>
<title>Tambah Data katalog</title>
<link rel="stylesheet" type="text/css" href="asset/style.css">
<script type="text/JavaScript" src="asset/form.js"></script>
</head>
<body>
<div class="halaman ">
<fieldset>
	<legend><h1>Tambah</h1></legend>
    <span style="color: red; font-size:12px;">* Form Harus Diisi<br></span>
	<a href="index.php?page=katalog">Kembali</a>
<br><br>
<form action="proces_katalog.php" method="post" name="katalog_form" onSubmit="return validasiKtlg()">
<table width="50%">
    <tr>
        <td class="td3"><label>Jenis</label><span style="color: red; font-size:15px;">*</span></td>
        <td><input type="text" name="jenis" pattern="[a-z]{1,15}" title="Hanya mengandung Huruf"></td>
        <td><div style="color : red;" id="jenisErr"></td>
    </tr>
    <tr>
    <td class="td3"><label>bahan</label><span style="color: red; font-size:15px;">*</span></td>
    <td><input type="text" name="bahan" pattern="[a-z]{1,15}" title="Hanya mengandung Huruf"></td>
    <td><div style="color : red;" id="bahanErr"></td>
    </tr>
    <tr>
    <td class="td3"><label>warna</label><span style="color: red; font-size:15px;">*</span></td>
    <td><input type="text" name="warna" pattern="[a-z]{1,15}" title="Hanya mengandung Huruf"></td>
    <td><div style="color : red;" id="warnaErr"></td>
    </tr>
    <tr>
    <td class="td3"><label>merek</label><span style="color: red; font-size:15px;">*</span></td>
    <td><input type="text" name="merek" pattern="[a-z]{1,15}" title="Hanya mengandung Huruf"></td>
    <td><div style="color : red;" id="merekErr"></td>
    </tr>
    <tr>
    <td><label>Id Bonus</label><span style="color: red; font-size:15px;">*</span></td>
        <td><select name="id" id="id" class="form-control" onchange='changeValue(this.value)' required>  
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
                     <td>Bonus <span style="color: red; font-size:15px;">*</span></td>  
                     <td><input type="text" name="nama" id="nama" readonly></td>  
                     <td><div style="color : red;" id="namaErr"></td>
                </tr>  
    <tr>
    <td class="td3"><label>stok<span style="color: red; font-size:15px;">*</span></label></td>
    <td><input type="number" name="stok"></td>
    <td><div style="color : red;" id="stokErr"></td>
    </tr>
    <tr>
    <td class="td3"><label>Harga</label><span style="color: red; font-size:15px;">*</span></td>
    <td><input type="number" name="harga"></td>
    <td><div style="color : red;" id="hargaErr"></td>
    </tr>
    <tr >
        <td colspan="2"><button class="button button1" type="submit" name="submit_simpan">Submit</button></td>
    </tr>
</table>
</form>
		</fieldset>
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
