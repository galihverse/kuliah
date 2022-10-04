<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "datamhs";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_errno) {
    echo "Koneksi Database Error: " . mysqli_connect_error();
}

?>