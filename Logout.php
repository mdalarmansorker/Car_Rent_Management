<?php 
    session_start();
    if(isset($_GET['logout']))
    {
        session_destroy();
        header("location:Admin_Log_in.php");
        $_SESSION['User'] = '';
    }

?>