<?php
$value = $_GET["order"];
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "car";

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (mysqli_connect_errno()) {
    die("Database connection failed! " . mysqli_connect_errno() . " (mysqli_conncet_errorno())");
}
$q = "DELETE FROM users_data WHERE u_id = $value";
$query_res = mysqli_query($connection, $q);

if (!$query_res) {
    die("Database query failed. ");
}
mysqli_close($connection);

header("Location: ../u_info.php?rejected=$value");
exit();
?>
