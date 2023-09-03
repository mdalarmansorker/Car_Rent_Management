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
    <h1 style="background-color:green;font-family:Arial;color:white;"><center>Panding Request Collect</center></h1>
    <?php
    $query = "SELECT * FROM users_data";
    $query2 = "SELECT `u_id`, `u_fname`, `u_phone`, `u_order`, `start_from`, `stop_to`, `type`, `notes`, `curr_date`, shedule_info.sh_date FROM accepted_users INNER JOIN shedule_info on accepted_users.u_id = shedule_info.u_id_i ORDER BY accepted_users.u_id DESC";
    $query_res = mysqli_query($connection, $query);
    $query_res2 = mysqli_query($connection, $query2);

    if (!$query_res) {
        die("Database query failed. ");
    }
    ?>
    <table class="table table-striped">
    <caption style="caption-side:top">Pending Users List</caption>
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
            <th>Accept</th>
            <th>Reject</th>
        </tr>
        <tbody>
            <?php

            while ($row = mysqli_fetch_assoc($query_res)) {
                $_SESSION["id"] = $row["u_id"];
                echo "<tr>
                <td>" . $row["u_id"] . "</td><td>" . $row["u_fname"] . "</td><td>" . $row["u_phone"] . "</td>
                <td>" . $row["u_order"] . "</td><td>" . $row["order_date"] . "</td><td>" . $row["start_from"] . "</td>
                <td>" . $row["stop_to"] . "</td><td>" . $row["type"] . "</td><td>" . $row["notes"] . "</td>
                <td>" . $row["curr_date"] . "</td>
                <td>" . "<a href=" . "accept.php" . "?order=" . $_SESSION["id"] . ">Accept</a>" . "</td>
                <td>" . "<a href=" . "reject.php" . "?order=" . $_SESSION["id"] . ">Reject</a>" . "</td>
                </tr>";
            }
            ?>
            <table class="table table-striped">
            <caption style="caption-side:top">All Accepted Users List</caption>
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
                </tr>
                <tbody>
                    <?php

                    while ($row = mysqli_fetch_assoc($query_res2)) {
                        echo "<tr>
                <td>" . $row["u_id"] . "</td><td>" . $row["u_fname"] . "</td><td>" . $row["u_phone"] . "</td>
                <td>" . $row["u_order"] . "</td><td>" . $row["sh_date"] . "</td><td>" . $row["start_from"] . "</td>
                <td>" . $row["stop_to"] . "</td><td>" . $row["type"] . "</td><td>" . $row["notes"] . "</td>
                <td>" . $row["curr_date"] . "</td>
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
                    if (isset($_GET["accepted"])) {
                        $output = "<br> User ID " . $_GET["accepted"] . " is accepted Successfully";
                        echo $output;
                    }
                    if (isset($_GET["rejected"])) {
                        $output = "<br> User ID " . $_GET["rejected"] . " is rejected Successfully";
                        echo $output;
                    }
                    ?>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>