<?php
$value = $_GET["user"];
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "car";

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (mysqli_connect_errno()) {
    die("Database connection failed! " . mysqli_connect_errno() . " (mysqli_conncet_errorno())");
}

$q = "UPDATE shedule_info SET status = 'Done' WHERE u_id_i = $value";
$query_res = mysqli_query($connection, $q);

if (!$query_res) {
    die("Database query failed. For Status");
}
mysqli_close($connection);

header("Location: ../shedule_details.php?status=$value");
exit();
?>
