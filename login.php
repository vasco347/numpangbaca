<?php
include_once 'koneksi.php';

session_start();
if(isset($_SESSION['nama_mhs'])) {
    header("location: index.php");
    exit();
}
if(isset($_POST['login'])) {
    $nim = $_POST['nim'];
    $password = $_POST['password'];

    $query_mhs = "SELECT  * FROM mahasiswa WHERE nim_mhs='$nim' AND password_mhs='$password'";
    $result = pg_query($con, $query_mhs);
    $rows = pg_num_rows($result); 
    if($rows) {
        $q = pg_fetch_assoc($result);
        $_SESSION['nama_mhs'] = $q['nama_mhs'];
        header("location: index.php");
        exit();
    } else {
        echo "<script>alert('NIM ATAU PASSWORD SALAH')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>LOGIN</title>
</head>
<body>
    <div class="bg-body">
        <img src="images/logo.png" alt="logo">
        <form class="custom-shape" action="" method="POST">
            <div class="box-login">
                <input type="text" name="nim" placeholder="Masukan Username" required>
                <br><br>
                <input type="password" name="password" placeholder="Masukan Password" required>
                <br><br>
                <button name="login">LOGIN</button>
            </div>
            <p>don't have account ?<a href=""> Register</a> or <a href="">Guest</a></p>
            <div class="outline-box">
                <h3>OTHER LOGIN</h3>
            </div>
             <div class="box-icon">
                <a href=""><i class="fa-brands fa-google"></i></a>
                <a href=""><i class="fa-brands fa-facebook"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
                <a href=""><i class="fa-brands fa-tiktok"></i></a>
                <a href=""><i class="fa-brands fa-x-twitter"></i></a>
            </div>
        </form>
    </div>
</body>
</html>