<?php
include('../admin\authentication.php');
include('includes/header.php');


$conn = mysqli_connect("localhost","root","","student");

    $query = "SELECT COUNT(*) AS total FROM `general` WHERE course = 'Web Development'";
    $we = mysqli_query($conn,$query);
    $web = mysqli_fetch_assoc($we);

    $quer = "SELECT COUNT(*) AS tota FROM `general` WHERE course = 'Data Analytics'";
    $dat = mysqli_query($conn,$quer);
    $data = mysqli_fetch_assoc($dat);

    $que = "SELECT COUNT(*) AS tot FROM `general` WHERE course = 'Mobile App Development'";
    $mob = mysqli_query($conn,$que);
    $mobile = mysqli_fetch_assoc($mob);

    $qu = "SELECT COUNT(*) AS t FROM `general` WHERE course = 'Infrastructure Management'";
    $infrastr = mysqli_query($conn,$qu);
    $infrastructure = mysqli_fetch_assoc($infrastr);
?>
<?php include('../admin\message.php'); ?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Admin Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <a class="card bg-danger text-white mb-4" href="web.php">
                <div class="card-body">Web Development</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <div class="small text-white stretched-link"><?php echo $web['total']; ?></div>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-md-6">
            <a class="card bg-danger text-white mb-4" href="data.php">
                <div class="card-body">Data Analytics</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <div class="small text-white stretched-link"><?php echo $data['tota']; ?></div>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-md-6">
            <a class="card bg-danger text-white mb-4" href="mobile.php">
                <div class="card-body">Mobile App Development</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <div class="small text-white stretched-link"><?php echo $mobile['tot']; ?></div>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </a>
        </div>
        <div class="col-xl-3 col-md-6">
            <a class="card bg-danger text-white mb-4" href="infrastructure.php">
                <div class="card-body">Infrastructure Management</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <div class="small text-white stretched-link"><?php echo $infrastructure['t']; ?></div>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </a>
        </div>
    </div>
</div>
<?php
include('includes/footer.php');
include('includes/scripts.php');
?>