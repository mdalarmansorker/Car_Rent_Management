<!DOCTYPE html>
<html>
<head>
    <title>Show Cost</title>
<style>
* {
  box-sizing: border-box;
}
.button {
background-color: rgb(2, 109, 112);
border: none;
border-radius: 10px;
color: rgb(255, 255, 255);
padding: 10x 100px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 30px;
margin: 4px 4px;
cursor: pointer;
}
.button3{
      border-radius: 10px;
      background-color: black;
      color: white;
      padding: 5px 16px;
      /* font-size: 20px; */
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
  width: 25%;
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
<body style="background-image: url('2021-mustang-wallpaper-4k-Ultra-HD.jpg'); background-size: cover; background-repeat: no-repeat;">

    <h1 style="text-align: center; background-color: green;">Search Cost</h1>
    <a href="adminhome.php" class="button3">Home</a>

            <center>
    <?php
    session_start();

    if(isset($_SESSION['User']))
    {
        echo $_SESSION['User'].'<br/>';
        echo '<a href="logout.php?logout">Logout</a>';
    }
    else
    {
        header("location:Admin_Log_in.php");
    }

?></center>
<!-- <table><tr><th> -->
    <right>
<div class="container">
  <form action="show_cost_back.php" method="post">
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


