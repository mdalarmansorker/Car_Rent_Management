
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/signup.css">
</head>
<body style="background-image: url('../image/2021-mustang-wallpaper-4k-Ultra-HD.jpg'); background-size: cover; background-repeat: no-repeat;">

<h1 style="background-color: rgb(0, 0, 0);color:white;" ><center>Sign Up</center></h1>
<a href="adminhome.php" class="button3">Home</a>

<center>
<?php
    session_start();
// Check the session is empty or not, if empty go to log in page else in this page
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
</center>

<table><tr><th>
<div class="container">
  <form action="./back-end/Signupdata.php" method="post">
    <!-- to print a message receive from backend page -->
  <?php if (isset($_GET['error'])) { ?>
          <p class="error"><?php echo $_GET['error']; ?></p>
  <?php } ?>
  <div class="row">
    <div class="col-25">
      <label>Name</label>
    </div>
    <div class="col-75">
      <input type="text" name="Name" required placeholder="Your name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label>Email</label>
    </div>
    <div class="col-75">
      <input type="email" name="Email" required placeholder="example@mail.com">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label>Password</label>
    </div>
    <div class="col-75">
      <input type="password" required name="password" placeholder="Password">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label>Phone</label>
    </div>
    <div class="col-75">
      <input type="tel" required pattern="[0]{1}[1]{1}[3-9]{1}[0-9]{8}" name="phone" placeholder="0173456789">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label>Gender</label>
    </div>
    <div class="col-75">
      <select name="Gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label>Division</label>
    </div>
    <div class="col-75">
      <select name="Division">
            <option value="Dhaka">Dhaka</option>
                <option value="Chittagang">Chittagang</option>
                <option value="Sylhet">Sylhet</option>
                <option value="Khulna">Khulna</option>
                <option value="Barishal">Barishal</option>
                <option value="Rajshahi">Rajshahi</option>
                <option value="Rangpur" selected>Rangpur</option>
                <option value="Mymanshing">Mymanshing</option>
      </select>
    </div>
  </div>
  
  <br>
  <div class="row">
    
  <input type="submit" value="Sign Up" align="center" style="color: black;font-weight:bold;font-size:20px;font-family:Time New Roman;">
    </div>
  
  </div>
  </form>
</div>
</th></tr>
</table>
</body>
</html>

