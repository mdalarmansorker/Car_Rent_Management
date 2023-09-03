<?php
$value = $_GET['user'];
?>
<html>

<head>
    <title>User Submission Form</title>
</head>
<body>


    <form action="./back-end/addprice_back.php" method="post">
        <fieldset>
            <legend>Price Adding For Perticular User</legend>
            User ID: <input type="number" name="id" value="<?php echo $value ?>"><br>
            Enter Price: <input type="number" name="price" ><br>
            
            <button name="submit" style="height:50px; width:180px;" type="submit">Submit</button>
            <a href="shedule_details.php">Go Back</a>
    </form>
</body>

</html>