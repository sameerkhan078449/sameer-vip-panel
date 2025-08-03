<?php
$host = "sqlXXX.epizy.com";  // Replace with your actual DB host
$user = "if0_39622442";
$pass = "rPeXxudfz60Txu0";
$db   = "if0_39622442_sameerpanel";
$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>