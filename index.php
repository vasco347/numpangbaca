<?php
session_start();
 
if (!isset($_SESSION['nama_mhs'])) {
    header("Location: login.php");
    exit(); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
</head>
<body>
    <form action="logout.php" method="POST">
        HELLO <?=$_SESSION['nama_mhs'];?>
        <button type="submit">Logout</button>
    </form>
</body>
</html>