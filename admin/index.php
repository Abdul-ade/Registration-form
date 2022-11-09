<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php include('message.php'); ?>
                <h3>hello</h3>
               <a class="nav-link" href="../../project\admin\login.php"><button class="btn btn-primary" type="submit" name="button">Login</button></a>
            
            </div>
        </div>
    </div>
</div>

<?php
include('includes/footer.php');
?>