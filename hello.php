<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert Cost</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Javascript for bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .wrapper{
            width: 50%;
            margin: 0 auto;
            margin-top: -20px;
            /* margin-left: -0px; */
            /* background-color:white; */
            border-radius: 8px;
        }
        table{
            background-color:#f0f0e0;
        }
        table tr td:last-child{
            width: 120px;
        }
        .main{
            /* width:100%;
            height: 90px;
            background-color: wheat;
            border-radius:80px; */
        }
        .main h2{
            color:red;
            margin-top: 90px;
            margin-left: 30px;
            width:100%;
            background-color:green;
            text-align:center;
            padding:20px;
            border-radius:20px;
        }
        .main a{
            margin-top: 90px;
            margin-right: 30px;
            background-color: purple;
        }
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
input[type=number]{
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
  width: 100%;
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
    <!-- The following code will enable all tooltips in the document: -->
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body style="background-image: url('13652.jpg'); background-size: cover; background-repeat: no-repeat;">

<h1 style="background-color: #4CAF50;font-family:Time New Roman;" ><center>Insert Cost of The Day</center></h1>
<a href="adminhome.php" class="button3">Home</a>
<!-- <center><?php
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

?> </center> -->
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix main">
                        <!-- Form  -->
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
      <input type="date" name="date" placeholder="YYYY-MM-DD">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label>Reason</label>
    </div>
    <div class="col-75">
      <input type="text" name="Reason" placeholder="Reason">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label>Price</label>
    </div>
    <div class="col-75">
      <input type="number" min="0" name="price" placeholder="Price">
    </div>
  </div>
  
    <div class='row'>
        <input type="submit" value="Submit" align="center">
    </div>
  
  </form>
</div>
                        <!-- <a href="Car_cost.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add Daily Cost</a> -->
                    </div>
                    <?php
                    $con = mysqli_connect('localhost', 'root', '','car');
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM cost order by id DESC";
                    if($result = mysqli_query($con, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>Serial No</th>";
                                        echo "<th>Issue Date</th>";
                                        echo "<th>Reason</th>";
                                        echo "<th>Price</th>";
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['CDate'] . "</td>";
                                        echo "<td>" . $row['Reason'] . "</td>";
                                        echo "<td>" . $row['Price'] . "</td>";
                                        echo "<td>";
                                        echo '<a href="delete-cost.php?id='. $row['id'] .'" style:"color:red;" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
 
                    // Close connection
                    mysqli_close($con);
                    ?>

                </div>
            </div>        
        </div>
    </div>
</body>
</html>