<!DOCTYPE html>
<html>
<head>
    <title>Inserting Cost</title>
<style>
* {
  box-sizing: border-box;
}
.button {
    background-color: rgb(2, 109, 112);
    border: none;
    border-radius: 10px;
    color: rgb(255, 255, 255);
    padding: 50px 50px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 30px;
    margin: 4px 4px;
    cursor: pointer;
  }
  .button {
    border: 4px solid #4CAF50; /* Green */
    }
  .button1 {
    background-color: black;
    padding: 16px 16px;
    }
.button2{
    background-color:#45a049;
  color: white;
  padding: 10.5px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}
.button3{
      border-radius: 10px;
      background-color: black;
      color: white;
      padding: 8px 10px;
      font-size: 20px;
    }
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}
input[type=date]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f0f0e0;
  width: 30%;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}
.col-50{
    float: left;
    width: 50%;
    margin-top: 6px;
}
.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 40%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}
#customers tr:nth-child(odd){background-color:white;}
#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body style="background-image: url('13652.jpg'); background-size: cover; background-repeat: no-repeat;">

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
  <form action="cost.php" method="post">
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


