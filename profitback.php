<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','car');



// get the post records
	$date1 = $_POST['date1'];
	$date2 = $_POST['date2'];
	if(empty($date1) || empty($date2))
    {
        header("Location: profit.php?error=Fill up the dates!");

        exit();
    }
    else{
// database insert SQL code
$sql = "SELECT SUM(price) FROM `shedule_info` WHERE `sh_date` BETWEEN '$date1' AND '$date2'";
	}
    

// run the query and return the table into $rs
$rs = mysqli_query($con, $sql);
//convert $rs into an array
$data = mysqli_fetch_array($rs);

if($data)
{
	//printting on profit.php array's first value
	header("location: profit.php?error=Total Profit = $data[0] taka");
}
else
{
	header("location: profit.php?error=No profit found!");
}

?>