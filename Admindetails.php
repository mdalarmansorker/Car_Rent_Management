<!DOCTYPE html>
<html>
<head>
    <title>Admin Details</title>
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
  font-family: Time New Roman, Helvetica, sans-serif;
  border-collapse: collapse;
  width: auto;
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
        echo '<a href="logout.php?logout">Logout</a>';
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


