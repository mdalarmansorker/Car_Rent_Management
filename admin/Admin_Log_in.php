<?php
session_start();
if(isset($_SESSION['User']) && isset($_SESSION['pass']) && isset($_SESSION['email']))
{
  header("location:adminhome.php");
}
?>
<!DOCTYPE html>
<html>
    <head><title>Car Rent</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>
    <body style="font-family: 'Times New Roman', Times, serif; border-radius: 1ch; color:white; background-image: url('../image/59.jpg'); background-size: cover; background-repeat: no-repeat;">
    <h1 style="text-align: center; background-color: rgb(255, 255, 255);color:white;"><a href="Home.html" class="button">Car Rent Management</a></h1>
    <br><br>
    <table border="5" bordercolor="white"><tr><th>
<div class="container">
    <h1 style="color:black;background-color:white;"><center>Admin</center></h1>
    <form action="./back-end/adminlogin.php" method="post">
            <?php if (isset($_GET['Error'])) { ?>
                <p class="Error"><?php echo $_GET['Error']; ?></p>
            <?php } ?>
            <div class="row">
    <div class="col-25">
      <label style="color:white">Email</label>
    </div>
    <div class="col-75">
      <input type="email" required name="email" placeholder="example@mail.com">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label style="color:white">Password</label>
    </div>
    <div class="col-75">
      <input type="password" required name="password" placeholder="Password">
    </div>
  </div>
    <div class="row">
        <input type="submit" value="Sign In" align="center" style="color: black;font-weight:bold;font-size:20px;font-family:Time New Roman;">
  </div> 
    </form></th></tr></table>
    <br>
    <pre>
    </pre>
</body>
</html>