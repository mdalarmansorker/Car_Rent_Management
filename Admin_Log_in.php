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
    <style>
* {
  box-sizing: border-box;
}
.button {
    background-color: rgb(0, 0, 0);
    border: none;
    border-radius: 10px;
    color: rgb(255, 255, 255);
    padding: 20px 50px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 30px;
    margin: 4px 4px;
    cursor: pointer;
    width:100%;
  }
  .button {
    border: 4px solid #black; /* Green */
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
input[type=password]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=email]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit] {
  background-color: white;
  width: 100%;
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
  background-color: rgb(0, 0, 0);
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
</style>
</head>
    <body style="font-family: 'Times New Roman', Times, serif; border-radius: 1ch; color:white; background-image: url('59.jpg'); background-size: cover; background-repeat: no-repeat;">
    <h1 style="text-align: center; background-color: rgb(255, 255, 255);color:white;"><a href="Home.html" class="button">Car Rent Management</a></h1>
    <br><br>
    <table border="5" bordercolor="white"><tr><th>
<div class="container">
    <h1 style="color:black;background-color:white;"><center>Admin</center></h1>
    <form action="adminlogin.php" method="post">
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
<address style="text-align: right;">
    Bangladesh Army University Of Science And Technology, Saidpur, Nilphamari<br>
    Department of Computer Science And Engineering<br>
    CSE 10<sup>th</sup> Batch<br>
    CSE 2206 - Database Sessional: Project 01<br>
    Team Members:<pre>
MD AL ARMAN SORKER - 200101059
MD ALI ARMAN       - 200101056
MONISHA BAKSHI     - 200101055</pre>
</address></body>
</html>