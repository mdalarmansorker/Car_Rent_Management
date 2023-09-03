<!DOCTYPE html>
<html>
<head>
    <title>Admin Details</title>
    <link rel="stylesheet" href="../css/admindetails.css">
</head>
<body style="background-image: url('../image/13652.jpg'); background-size: cover; background-repeat: no-repeat;">

<h1 style="background-color: #4CAF50;" ><center>Admin Details</center></h1>
<a href="adminhome.php" class="button3">Home</a>
<br><br>
<?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
    <?php
    session_start();

    if(isset($_SESSION['User']) && isset($_SESSION['pass']) && isset($_SESSION['email']))
    {
        echo $_SESSION['User'].'<br/>';
        echo '<a href="./back-end/logout.php?logout">Logout</a>';
    }
    else
    {
        header("location:Admin_Log_in.php");
    }

?>


<br><br><br>
<table id="customers" align="center">
  <tr style="background-color:rgb(2, 109, 112);">
    <td><b>Name</b></td>
    <td><b>Email</b></td>
    <td><b>Phone</b></td>
    <td><b>Division</b></td>
    <td><b>Gender</b></td>
  </tr>
<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','car');
$sql = "SELECT * FROM `admin` ORDER BY Name ASC;";
$rs = mysqli_query($con,$sql);
while($data = mysqli_fetch_array($rs))
{
    ?>
    <tr>
    <td><?php echo $data['Name'];?></td>
    <td><?php echo $data['Email'];?></td>
    <td><?php echo $data['Phone'];?></td>
    <td><?php echo $data['Division'];?></td>
    <td><?php echo $data['Gender'];?></td>

  </tr>	
  <?php
}
?>
</table>
<?php mysqli_close($con);?> 



</body>
</html>


