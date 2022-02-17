<?php
// Inisialisasi sesi
session_start();
 
// Periksa apakah pengguna sudah masuk, jika ya, arahkan dia ke halaman selamat datang
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php");
    exit;
}
 
// Sertakan file konfigurasi
    $host = "localhost";
    $database = "jilqu";
    $username = "root";
    $password = "";
    $mysqli = new mysqli($host, $username, $password, $database);
 
// Tentukan variabel dan inisialisasi dengan nilai kosong
$username = $password = "";
$username_err = $password_err = "";
 
// Memproses data formulir saat formulir diserahkan
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Periksa apakah nama pengguna kosong
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Periksa apakah kata sandi kosong
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validasi kredensial
    if(empty($username_err) && empty($password_err)){
        // Siapkan pernyataan pilih
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = $mysqli->prepare($sql)){
            // Ikat variabel ke pernyataan yang disiapkan sebagai parameter
            $stmt->bind_param("s", $param_username);
            
            // Tetapkan parameter
            $param_username = $username;
            
            // Mencoba mengeksekusi pernyataan yang telah disiapkan
            if($stmt->execute()){
                // Simpan hasil
                $stmt->store_result();
                
                // Periksa apakah nama pengguna ada, jika ya kemudian verifikasi kata sandi
                if($stmt->num_rows == 1){                    
                    // Mengikat variabel hasil
                    $stmt->bind_result($id, $username, $hashed_password);
                    if($stmt->fetch()){
                        if(password_verify($password, $hashed_password)){
                            // Kata sandi benar, jadi mulailah sesi baru
                            session_start();
                            
                            // Simpan data dalam variabel sesi
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Alihkan pengguna ke halaman selamat datang
                            header("location: index.php");
                        } else{
                            // Tampilkan pesan kesalahan jika kata sandi tidak valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Tampilkan pesan kesalahan jika nama pengguna tidak ada
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }
    
    // Close connection
    $mysqli->close();
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="asset/style.css">
    <style type="text/css">
        body{ font: 14px sans-serif;
            margin:10% 0%;
        }
    </style>
</head>
<body >
<div class="w3-container" align="center">
        <div class="w3-card-4" style="width:30%; padding: 20px; background-color: white;">
        <div class="w3-container w3-deep-purple">
        <h2>Admin Login</h2></div>
        <hr>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="button button1" value="Login">
            </div>
            <p>Nggak punya akun? Yaudah terima aja.</p>
        </form>
        </div> 
</div>
</body>
</html>