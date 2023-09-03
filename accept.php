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

$q = "INSERT INTO shedule_info(ordered, sh_date, u_id_i) SELECT u_order, order_date, u_id FROM users_data WHERE u_id = $value";
$query_res = mysqli_query($connection, $q);
if (!$query_res) {
    die("Database query 1 failed. ");
}


$q = "INSERT INTO accepted_users(`u_id`, `u_fname`, `u_phone`, `u_order`, `start_from`, `stop_to`, `type`, `notes`, `curr_date`) SELECT `u_id`, `u_fname`, `u_phone`, `u_order`, `start_from`, `stop_to`, `type`, `notes`, `curr_date` FROM users_data WHERE users_data.u_id =  $value";
$query_res = mysqli_query($connection, $q);
if (!$query_res) {
    die("Database query 2 failed. ");
}

$q = "DELETE FROM users_data WHERE u_id = $value";
$query_res = mysqli_query($connection, $q);
if (!$query_res) {
    die("Database query 3 failed. ");
}


mysqli_close($connection);
header("Location: reject.php?order=$value");



header("Location: u_info.php?accepted=$value");
exit();
?>