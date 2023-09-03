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
    <link rel="stylesheet" href="../css/insertcost.css">
    <!-- The following code will enable all tooltips in the document: -->
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body style="background-image: url('../image/13652.jpg'); background-size: cover; background-repeat: no-repeat;">

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
  <form action="./back-end/cost.php" method="post">
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