<!DOCTYPE html>
<html>
<head>
    <title>Inserting Cost</title>
    <link rel="stylesheet" href="../css/carcost.css">
</head>
<body style="background-image: url('../image/13652.jpg'); background-size: cover; background-repeat: no-repeat;">

<h1 style="background-color: #4CAF50;" ><center>Insert Cost of The Day</center></h1>
<a href="adminhome.php" class="button3">Home</a>
<br><br>
<?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
    <?php
    session_start();

    if(isset($_SESSION['User']) && isset($_SESSION['pass']) && isset($_SESSION['email']))
    {
        // echo $_SESSION['User'].'<br/>';
        // echo '<a href="logout.php?logout">Logout</a>';
    }
    else
    {
        header("location:Admin_Log_in.php");
    }

?>
<left>
<div class="container" align="left">
  <form action="/back-end/cost.php" method="post">
  <?php if (isset($_GET['error'])) { ?>
    <p class="error"><?php echo $_GET['error']; ?></p>
  <?php } ?>
  <div class="row">
    <div class="col-25">
      <label>Date</label>
    </div>
    <div class="col-75">
      <input type="date" required name="date" placeholder="YYYY-MM-DD">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label>Reason</label>
    </div>
    <div class="col-75">
      <input type="text" required name="Reason" placeholder="Reason">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label>Price</label>
    </div>
    <div class="col-75">
      <input type="text" required name="price" placeholder="Price">
    </div>
  </div>
  
    <div class='row'>
        <input type="submit" value="Submit" align="center">
    </div>
  
  </form>
</div>
>
<br><br><br>
<!-- <table id="customers" align="left">
  <tr style="background-color:rgb(2, 109, 112);">
    <td><b>Serial No</b></td>
    <td><b>Issue Date</b></td>
    <td><b>Reason</b></td>
    <td><b>Price (Taka)</b></td>
  </tr>
<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','car');
$sql = "SELECT * FROM `cost` ORDER BY `id` desc;";
$rs = mysqli_query($con,$sql);
while($data = mysqli_fetch_array($rs))
{
    ?>
    <tr>
    <td><?php echo $data['id'];?></td>
    <td><?php echo $data['CDate'];?></td>
    <td><?php echo $data['Reason'];?></td>
    <td align="right"><?php echo $data['Price'];?></td>
  </tr>	
  <?php
}
?>
</table></left>
<?php mysqli_close($con);?> -->



</body>
</html>


