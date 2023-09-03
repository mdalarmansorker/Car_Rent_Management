<?php
session_start();
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "car";

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (mysqli_connect_errno()) {
    die("Database connection failed! " . mysqli_connect_errno() . " (mysqli_conncet_errorno())");
}

?>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>User_info_Collecting</title>
</head>

<body>
<h1 style="background-color:green;font-family:Arial;color:white"><center>All Schedule Details</center></h1>

    <?php
    $result = "SELECT accepted_users.u_id, accepted_users.u_fname , accepted_users.`u_phone`, accepted_users.`u_order`, accepted_users.`start_from`, accepted_users.`stop_to`, accepted_users.`type`, accepted_users.`notes`, accepted_users.`curr_date` ordering_date, shedule_info.price, shedule_info.status OrderStatus, shedule_info.sh_date SheduleDate FROM accepted_users JOIN shedule_info on accepted_users.u_id = shedule_info.u_id_i ORDER BY shedule_info.sh_date ASC;";
    $query_res = mysqli_query($connection, $result);

    if (!$query_res) {
        die("Database query failed. ");
    }
    ?>
    <table class="table table-striped">
        <tr>
            <th>User ID</th>
            <th>User Name</th>
            <th>Phone</th>
            <th>Ordered</th>
            <th>Order Date</th>
            <th>From</th>
            <th>To</th>
            <th>Type</th>
            <th>Notes</th>
            <th>Form Submit Date</th>
            <th>price</th>
            <th>Order status</th>
            <th>Price Add</th>
            <th>Status Done</th>
        </tr>
        <tbody>
            <?php

            while ($row = mysqli_fetch_assoc($query_res)) {
                $_SESSION["id"] = $row["u_id"];
                echo "<tr>
                <td>" . $row["u_id"] . "</td><td>" . $row["u_fname"] . "</td><td>" . $row["u_phone"] . "</td>
                <td>" . $row["u_order"] . "</td><td>" . $row["SheduleDate"] . "</td><td>" . $row["start_from"] . "</td>
                <td>" . $row["stop_to"] . "</td><td>" . $row["type"] . "</td><td>" . $row["notes"] . "</td>
                <td>" . $row["ordering_date"] . "</td><td>" . $row["price"] . "</td>
                <td>" . $row["OrderStatus"]. "</td>
                <td>" . "<a href=" . "addprice.php" . "?user=" . $_SESSION["id"] . ">Price Add</a>" . "</td>
                <td>" . "<a href=" . "doneStatus.php" . "?user=" . $_SESSION["id"] . ">Done Status</a>" . "</td>
                </tr>";
            }
            ?>
            <?php
            mysqli_free_result($query_res);
            ?>
            <?php
            mysqli_close($connection);
            ?>
            <a href="shedule.php"><button class="btn btn-warning">Go Back</button></a>
            <?php
            if(isset($_GET["price"]))
            {
                $output = "<br> For User ID ".$_GET["price"]." price added Successfully";
                echo $output;
            }
            if(isset($_GET["status"]))
            {
                $output = "<br> User ID ".$_GET["status"]." status updated to Done Successfully";
                echo $output;
            }
            ?>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
           <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>
