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
                    <h4>Web Development</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Student ID</th>
                                <th>Student Name</th>
                                <th>Course</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = "SELECT * FROM general where course ='Web Development'";
                            $run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($run) > 0) {
                                $row = mysqli_fetch_array($run);
                                foreach($run as $row) {
                                    ?>
                                <tr>
                                    <td><?php echo $row['student_id'] ?></td>
                                    <td><?php echo $row['student_name'] ?></td>
                                    <td><?php echo $row['course'] ?></td>
                                </tr>
                                    <?php
                                }
                            } else {

                            ?>
                                <tr>
                                    <td colspan='9'>No Record Found</td>
                                </tr>
                            <?php 
                            }
                            ?>
                         </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>





<?php
include('includes/footer.php');
include('includes/scripts.php');
?>