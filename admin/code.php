<?php 
session_start();
$conn = mysqli_connect("localhost","root","","student");


//  if(!isset($_SESSION['user'])) {
//      header('Location: login.php');
//      exit(0);
//  }


if(isset($_POST['update'])){
    $student_id = $_POST['student_id'];
    $student_name = $_POST['sname'];
    $birth_date = $_POST['date'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $student_email = $_POST['email'];
    $phone_number = $_POST['number'];
    $course = $_POST['course']; 
    $count = 0;
    if (strlen($student_name) <= 0 || strlen($birth_date) <= 0 || strlen($gender) <= 0 || strlen($address) <= 0 || strlen($student_email) <= 0 || strlen($phone_number) <= 0 || strlen($course) <= 0) {
        $count = 1;
        $_SESSION['message'] = "Input all fields correctly";
    }else {
        if (!preg_match("/^[a-zA-Z ]*$/",$student_name)) {
            $count = 1;
            $_SESSION['message'] = "Invalid Name";
        }
        if (!filter_var($student_email, FILTER_VALIDATE_EMAIL)) {
            $count = 1;
            $_SESSION['message'] = "Invalid Email";
        }
        if(!preg_match("/^[0-9]*$/",$phone_number)) {
            $count = 1;
            $_SESSION['message'] = "Invalid Phone Number";
        }
        
    }
    if($count != 0){
            header('Location: ../dashboard\index.php');
            $_SESSION['message'] = "Could not update";
            exit(0);
        }else{
            $query = "UPDATE general SET student_name = '$student_name', birth_date = '$birth_date', gender = '$gender', addr = '$address', student_email = '$student_email', phone_number = '$phone_number', course = '$course' WHERE student_id = '$student_id'";
            $query_run = mysqli_query($conn,$query);

            if($query_run){
                header('Location: ../dashboard\index.php');
                $_SESSION['message'] = "Updated successfully";
                exit(0);
            }else{
                header('Location: code.php');
            }
        }
}else{
    echo "Failed";
}

    $student_id = $_GET['id'];
    echo "$student_id";
    $query = "DELETE FROM general WHERE student_id = '$student_id'";
    $run = mysqli_query($conn,$query);
    if($run){
        header('Location: ../dashboard\student.php');
     }else{
        echo "no";
     }
?>