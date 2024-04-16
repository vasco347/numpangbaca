<?php

$host = "localhost";
$db = "authapps";
$username = "postgres";

$con = pg_connect("host=$host dbname=$db user=$username")
        or die ("Koneksi Gagal");

?>