<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','car');



// get the post records
	$date = $_POST['date'];
	$reason = $_POST['Reason'];
	$price = $_POST['price'];
	if(empty($date) || empty($reason) || empty($price))
    {
        header("Location: ../hello.php?error=Fill up the form");

        exit();
    }
    else{
// database insert SQL code
$sql = "INSERT INTO `cost` (`Cdate`,`Reason`,`Price`) VALUES('$date', '$reason', '$price')";
	}
// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	header("location: ../hello.php");
}
else
{
	header("location: ../hello.php?error=Something wrong, Please try again.");
}

?>