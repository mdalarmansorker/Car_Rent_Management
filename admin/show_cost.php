<!DOCTYPE html>
<html>
<head>
    <title>Show Cost</title>
    <link rel="stylesheet" href="../css/showcost.css">

</head>
<body style="background-image: url('../image/2021-mustang-wallpaper-4k-Ultra-HD.jpg'); background-size: cover; background-repeat: no-repeat;">

    <h1 style="text-align: center; background-color: green;">Search Cost</h1>
    <a href="adminhome.php" class="button3">Home</a>

            <center>
    <?php
    session_start();

    if(isset($_SESSION['User']))
    {
        echo $_SESSION['User'].'<br/>';
        echo '<a href="./back-end/logout.php?logout">Logout</a>';
    }
    else
    {
        header("location:Admin_Log_in.php");
    }

?></center>
<!-- <table><tr><th> -->
    <right>
<div class="container">
  <form action="./back-end/show_cost_back.php" method="post">
  <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
  <div class="row">
    <div class="col-25">
      <label>Starting Date</label>
    </div>
    <div class="col-75">
    <input type="date" required name="date1" placeholder="YYYY-MM-DD">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label>Ending Date</label>
    </div>
    <div class="col-75">
    <input type="date" required name="date2" placeholder="YYYY-MM-DD">
    </div>
  </div>
  
  
    <div class='row'>
        <input type="submit" value="Submit" align="center">
    </div>
  
  </form>
</div></r>
<!-- </th></tr>
</table> -->
</body>
</html>


