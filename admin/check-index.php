<?php
session_start();

if(isset($_POST['btn'])){
    unset($_SESSION['user']);
    unset($_SESSION['pass']);
    unset($_SESSION['auth']);
    unset($_SESSION['auth_admin']);
    
    
    if(isset($_SESSION['user']) && isset($_SESSION['pass'])){
        header('Location:../dashboard\index.php');
        exit(0);
    }else{
        $_SESSION['message'] = "Logged out successfully";
        header('Location:login.php');
        exit(0);
    }

}
 
?>