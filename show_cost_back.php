<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','car');



// get the post records
	$date1 = $_POST['date1'];
	$date2 = $_POST['date2'];
	if(empty($date1) || empty($date2))
    {
        header("Location: show_cost.php?error=Fill up the dates!");

        exit();
    }
    else{
// database insert SQL code
$sql = "SELECT SUM(Price) FROM `cost` WHERE `Cdate` BETWEEN '$date1' AND '$date2'";
	}
    

// run the query and return in $rs
$rs = mysqli_query($con, $sql);
//convert the $rs into an array
$data = mysqli_fetch_array($rs);

if($data)
{
	if(!$data[0]==0)
	{		header("location: show_cost.php?error=Cost = $data[0] taka");
	}	
	else
	{		header("location: show_cost.php?error=0 cost on that day.");
	}
}

else
{
	header("location: show_cost.php?error=No cost found!");
}

?>