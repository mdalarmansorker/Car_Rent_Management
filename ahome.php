<?php session_start();
$errors = array();
require_once("vailidation_functions.php");

if (isset($_POST["submit"])) {
    $name = htmlspecialchars(trim($_POST["name"]));
    if (!has_presence($name)) {
        $errors["Name"] = "Name Can't be empty";
    }
    $phone = trim($_POST["phone"]);
    if (!has_presence($phone)) {
        $errors["Phone"] = "Phone Number can't be empty";
    }

    $ordered =  $_POST["vh1_num"];
    $ordered .= " Car ";
    $ordered .= $_POST["vh2_num"];
    $ordered .= " Micro ";
    $ordered .= $_POST["vh3_num"];
    $ordered .= " Ambulance ";
    $from = $_POST["start_point"];
    $to = $_POST["end_point"];
    $type = $_POST["type"];
    $notes = htmlspecialchars($_POST["comment"]);
    $date = $_POST["order_date"];
    if (!has_presence($date)) {
        $errors["OrderDate"] = "Order Date Can't be empty";
    }
    if (empty($errors)) {

        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "car";

        $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

        if (mysqli_connect_errno()) {
            die("Database connection failed! " . mysqli_connect_errno() . " (mysqli_conncet_errorno())");
        }

        $result = "INSERT INTO users_data (u_fname, u_phone, u_order, order_date, start_from, stop_to, type, notes, curr_date) VALUES ('$name','$phone', '$ordered','$date', '$from', '$to', '$type', '$notes', CURRENT_DATE());";
        $query_res = mysqli_query($connection, $result);
        if (!$query_res) {
            die("Database query failed. ");
        }
        mysqli_close($connection);
        $_SESSION['form'] = "Your Form Submitted Successfully.<br>";
        header("Location: user.php");
    }
} else {
    $name = "";
    $phone = "";
    $ordered = "";
    $from = "";
    $to = "";
    $type = "";
    $notes = "";
    $date = "";
    echo form_errors($errors);
}
?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/home.css">
    <title>Booking Car</title>
</head>

    <body style="font-family: 'Times New Roman', Times, serif; border-radius: 1ch; color:rgb(255, 255, 255); background-image: url('car7.jpg'); background-size: cover; background-repeat: no-repeat;">
    <header>
        <h3>Welcome to our Car Rent Site.</h3>
        <p>Fill This Form to Order Vehicle From our Company</p>
        <p>You will get a phone to confirm the order. Or You can contact us:</p>
        <p>Contact Number: +8801700000011111</p>
        
    </header>
    <div class="form" style="margin-left:100px;color:red;">
        <form action="ahome.php" method="post">
            <div>
                <button class="btn btn-warning" style="width: 200px;margin-left: 500px;">Personal Info</button>
                <div class="col-md-6">
                    <?php echo form_errors($errors) ?>
                    <label for="name" class="form-label clr " style="text-align: center;">Full name:</label>
                    <input type="tel" class="form-control" id="name" placeholder="Full name" name="name" required value=<?php echo $name ?>>
                </div>
                <div class="col-md-6">
                    <label for="phone" class="form-label clr " style="text-align: center;">Enter a phone number:</label>
                    <input type="tel" class="form-control" phone id="phone" name="phone" placeholder="01*********" pattern="[0-9]{11}" required value=<?php echo $phone ?>>
                </div>
                <legend class="clr ">Select Vehicle Info To Order</legend>
                <label class="clr ">Select Vehicle:</label><br>
                <label class="clr">How Many Car: </label>
                <select name="vh1_num" class="clr ">
                    <option selected>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                </select>
                <br><br>
                <label class="clr">How Many Micro: </label>
                <select name="vh2_num" class="clr ">
                    <option selected>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                </select>
                <br><br>
                <label class="clr">How Many Ambulance: </label>
                <select name="vh3_num" class="clr ">
                    <option selected>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                </select>
                <br><br>
                <label class="clr aln">Jurney From :</label><br>
                <select name="start_point" class="clr ">
                    <option selected>Rangpur</option>
                    <option>Panchagarh</option>
                    <option>Dinajpur</option>
                    <option>Thakurgaon</option>
                    <option>Nilphamary</option>
                    <option>Kurigram</option>
                    <option>Gaibandha</option>
                    <option>Bogura</option>
                    <option>Khulna</option>
                    <option>Dhaka</option>
                    <option>Rajshahi</option>
                    <option>Mymanshing</option>
                    <option>Sylhet</option>
                    <option>Barishal</option>
                </select>
                <br>
                <label class="clr">To :</label><br>
                <select name="end_point" class="clr ">
                    <option>Rangpur</option>
                    <option selected>Dhaka</option>
                    <option>Nilphamary</option>
                    <option>Chittagang</option>
                    <option>Dinajpur</option>
                    <option>Rajshahi</option>
                    <option>Mymanshing</option>
                    <option>Sylhet</option>
                    <option>Barishal</option>
                </select>
                <br>
                <label class="clr aln">Select AC or Non AC:</label><br>
                <select name="type" class="clr ">
                    <option>AC</option>
                    <option selected>Non AC</option>
                </select>
                <br>
                <label for="order_date" class="clr ">Order Date:</label>
                <input type="date" id="order_date" name="order_date">
                <br>
                <label class="clr ">Give your comments:</label><br>
                <textarea name="comment" cols="70" rows="4"></textarea><br><br>
                <button class="btn btn-success" type="submit" name="submit">Submit</button>
                <button class="btn btn-danger"><a href="user.php" style="text-decoration: none; color: white;">Go Back</a></button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>