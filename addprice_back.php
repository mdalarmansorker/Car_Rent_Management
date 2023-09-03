<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "car";

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (mysqli_connect_errno()) {
    die("Database connection failed! " . mysqli_connect_errno() . " (mysqli_conncet_errorno())");
}
?>
<?php
require_once("vailidation_functions.php");
if (isset($_POST["submit"])) {
    $price = htmlspecialchars(trim($_POST["price"]));
    $value = $_POST["id"];
    if (!has_presence($price)) {
        echo "Price Can't be empty";
    } else {
        $q = "UPDATE shedule_info SET price = $price WHERE u_id_i = $value";
        $query_res = mysqli_query($connection, $q);
        if (!$query_res) {
            die("Database query 1 failed. ");
        }
        mysqli_close($connection);
        header("Location: shedule_details.php?price=$value");
        exit();
    }
} else {
    $price = 0;
}
?>