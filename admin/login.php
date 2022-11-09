<?php
session_start();
include('includes/header.php');
// include('includes/navbar.php');

// unset($_SESSION['user']);
// unset($_SESSION['pass']);   
// if(isset($_SESSION['user']) && isset($_SESSION['pass'])){
//         header('Location:../dashboard\index.php');
//     }
//     else{
//         header('Location:login.php');
//         die();
//     }
?>

<div class="py-5">
    <form class="container" method="post" action="../../adminlogin.php">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <?php include('message.php'); ?>
                <div class="card">
                    <div class="card-header">
                        <h4>Login</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label>Username</label>
                            <input type="text" placeholder="Enter Username" class="form-control" name="user">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label>Password</label>
                            <input type="password" placeholder="Enter Password" class="form-control" name="pass">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary" name="button">Log In</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</form>
</div>

<?php
include('includes/footer.php');
?>