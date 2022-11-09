<?php
include('../admin\authentication.php');
include('includes/header.php');

$conn = mysqli_connect("localhost","root","","student");
if(!$conn){
    echo "could not connect";
}
?>

<div class="container-fluid px-4">

    <h3 class="mt-4">Student Dashboard</h3>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Students</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Students</h4>
                </div>
                <div class="card-body">
                    <?php 
                    if(isset($_GET['id'])){
                        $student_id = $_GET['id'];
                        $student = "SELECT * FROM general WHERE student_id='$student_id'";
                        $student_run = mysqli_query($conn, $student);
                        if(mysqli_num_rows($student_run) > 0) {
                            foreach($student_run as $student) {
                                
                                ?>
                             
                    

                            <form action="../admin\code.php" method="post">
                                <input type="hidden" name="student_id" value="<?=$student['student_id']; ?>">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="">Student Name</label>
                                        <input type="text" name="sname" value="<?= $student['student_name']; ?>" class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Date of Birth</label>
                                        <input type="text" name="date" value="<?= $student['birth_date']; ?>" class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Gender</label>
                                        <input type="text" name="gender" value="<?= $student['gender']; ?>" class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Address</label>
                                        <input type="text" name="address" value="<?= $student['addr']; ?>" class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Email</label>
                                        <input type="text" name="email" value="<?= $student['student_email']; ?>" class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Phone Number</label>
                                        <input type="text" name="number" value="<?= $student['phone_number']; ?>" class="form-control">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="">Course</label>
                                        <input type="text" name="course" value="<?= $student['course']; ?>" class="form-control">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <button type="submit" name="update" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>
                                <?php
                                
                            }
                        } else{
                        
                            echo "<h4>No Record Found</h4>";
                            
                        }
                    }
                    ?>
                           
                            
<?php
include('includes/footer.php');
include('includes/scripts.php');
?>