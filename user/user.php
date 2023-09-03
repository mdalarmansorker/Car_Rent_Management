<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>User</title>
    <style>
        .sch {
            width: 700px;
            height: 300px;
            background-color: cyan;
            margin-left: 420px;
            margin-top: 100px;
            border-radius: 20px;
        }

        div>p {
            text-align: center;

        }
    </style>
</head>

<body style="background-color: rgb(62, 75, 95);">
    <div class="sch" align="center">
        <a href="../index.html"><button type="button" class="btn btn-primary first" style="width: 700px;"><b>Welcome to our Car Rent Site.</b></button></a>
        <p>Fill This Form to Order Vehicle From our Company</p>
        <p>You will get a phone to confirm the order. Or You can contact us:</p>
        <p>Contact Number: +8801700000011111</p>
        <?php
    if (isset($_SESSION['form'])) {
        echo 
        '<div style="text-align:center;color:green">'.$_SESSION['form'].'</div><br><br>';
        session_destroy();
    }
    ?>
        <center><a href="ahome.php"><button class="btn btn-success">Go To Fom Submission</button></a></center>
        

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>