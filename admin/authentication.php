<?php
session_start();
$conn = mysqli_connect("localhost","root","","admin");
if(!$conn){
    die('Could not connect');
}
if(!isset($_SESSION['auth'])){
    $_SESSION['message'] = "Login to access dashboard";
    header('Location: ../admin\login.php');
    exit(0);
}else{

}

?>