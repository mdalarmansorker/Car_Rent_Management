<?php

    $con=mysqli_connect('localhost','root','','car');

    session_start();
       if(empty($_POST['email']) && empty($_POST['password']))
       {
           header("location:Admin_Log_in.php?Error=Please Fill in the Blanks");
       }
       else if(empty($_POST['email']))
       {
            header("location:Admin_Log_in.php?Error=Please inter Username");
       }
       else if(empty($_POST['password']))
       {
           header("location:Admin_Log_in.php?Error=Please inter password");
       }
       else
       {
            $query="select * from admin where Email='".$_POST['email']."' and Password='".$_POST['password']."'";
            $result=mysqli_query($con,$query);
// Fetch a result row as an associative array:
            if($data = mysqli_fetch_assoc($result))
            {
                $_SESSION['User']= $data['Name'];
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['pass'] = $_POST['password'];
                header("location:adminhome.php");
            }
            else
            {
                header("location:Admin_Log_in.php?Error=Please Enter Correct User Name and Password ");
            }
        }
 
?>