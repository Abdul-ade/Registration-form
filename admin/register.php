<?php
include('authentication.php');
include('includes/header.php');
include('includes/navbar.php');
 include('message.php');
?>

<div class="py-5">
    <form class="container" method="post" action="../../registration.php">
        <div class="row justify-content-center">
            <div class="col-md-5">
                
                <div class="card">
                
                    <div class="card-header">
                        <h4>Register</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group ">
                            <label>First Name</label>
                            <input type="text" placeholder="Enter First Name" class="form-control w-3" name="fname">
                            <label>Last Name</label>
                            <input type="text" placeholder="Enter Last Name" class="form-control" name="lname">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label>Birth Date</label>
                            <select name='Day'>
                                <option value=''>Birth Day</option>
                                <option value='01'>01</option>
                                <option value='02'>02</option>
                                <option value='03'>03</option>
                                <option value='04'>04</option>
                                <option value='05'>05</option>
                                <option value='06'>06</option>
                                <option value='07'>07</option>
                                <option value='08'>08</option>
                                <option value='09'>09</option>
                                <option value='10'>10</option>
                                <option value='11'>11</option>
                                <option value='12'>12</option>
                                <option value='13'>13</option>
                                <option value='14'>14</option>
                                <option value='15'>15</option>
                                <option value='16'>16</option>
                                <option value='17'>17</option>
                                <option value='18'>18</option>
                                <option value='19'>19</option>
                                <option value='20'>20</option>
                                <option value='21'>21</option>
                                <option value='22'>22</option>
                                <option value='23'>23</option>
                                <option value='24'>24</option>
                                <option value='25'>25</option>
                                <option value='26'>26</option>
                                <option value='27'>27</option>
                                <option value='28'>28</option>
                                <option value='29'>29</option>
                                <option value='30'>30</option>
                                <option value='31'>31</option>
                            </select>
                            <select name='Month'>
                                <option value=''>Birth Month</options>
                                <option value='January'>January</option>
                                <option value='February'>February</option>
                                <option value='March'>March</option>
                                <option value='April'>April</option>
                                <option value='May'>May</option>
                                <option value='June'>June</option>
                                <option value='July'>July</option>
                                <option value='August'>August</option>
                                <option value='September'>Semptember</option>
                                <option value='October'>October</option>
                                <option value='November'>November</option>
                                <option value='December'>December</option>
                            </select>
                            <select name='Year'>
                                <option value=''>Birth Year</option>
                                <option value='2003'>2003</option>
                                <option value='2004'>2004</option>
                                <option value='2005'>2005</option>
                                <option value='2006'>2006</option>
                                <option value='2007'>2007</option>
                                <option value='2008'>2008</option>
                                <option value='2009'>2009</option>
                                <option value='2010'>2010</option>
                                <option value='2011'>2011</option>
                                <option value='2012'>2012</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label>Gender</label>
                            <select name='gender'>
                                <option value=''>Please Select</option>
                                <option value='Male'>Male</option>
                                <option value='Female'>Female</option>
                                <option value='Other'>Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label>Address</label>
                            <input type="text" placeholder="Enter Address" class="form-control" name="address">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label>Student E-mail</label>
                            <input type="email" placeholder="Enter Email Address" class="form-control" name="email">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label>Phone Number</label>
                            <input type="number" placeholder="Enter Phone Number" class="form-control" name="pnumber">
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label>Courses</label>
                            <select name='courses'>
                                <option value=''>Choose a course</option>
                                <option value='Web development'>Web Development</option>
                                <option value='Data Analytics'>Data Analytics</option>
                                <option value='Mobile App Development'>Mobile App Development</option>
                                <option value='Infrastructure Management'>Infrastructure Management</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <form action="../admin\check-index.php" method="post">
                    <button class="nav-link" type="submit" name ="btn">Logout</button>
    </form>
</div>

<?php
include('includes/footer.php');
?>