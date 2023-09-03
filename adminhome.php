<!DOCTYPE html>
<html>
    <head><title>Admin</title>
    <style>
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
        </style>
        </head>
    <body style="background-image: url('cars3.jpg'); background-size: cover; background-repeat: no-repeat;">
        <h1 style="background-color: cadetblue;"><center>Car Rent Management</center></h1>
    <center>
    <?php if (isset($_GET['A'])) { ?>
                <p class="A"><?php echo $_GET['A']; ?></p>
            <?php } ?>
    <?php
    session_start();

    if(isset($_SESSION['User']) && isset($_SESSION['pass']) && isset($_SESSION['email']))
    {
        echo ' Welcome ' . $_SESSION['User'].'<br/>';
        echo '<a href="logout.php?logout">Logout</a>';
    }
    else
    {
        header("location:Admin_Log_in.php");
    }

?></center>
<br>
<div align="right">
<a href="Sign_up.php" class="button">New Admin</a><a href="Admindetails.php" class="button">Admin List</a><br>
<a href="hello.php" class="button">Insert Cost</a><a href="show_cost.php" class="button">Show Cost</a><br>
<a href="shedule.php" class="button">Schedules</a><a href="profit.php" class="button">Show Profit</a><br>

</div>
    </body>
</html>