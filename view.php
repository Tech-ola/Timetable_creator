<!DOCTYPE html>
<html dir="ltr" lang="en">
<body>
    <?php 
    include "./header.php";
    ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php
        include "./aside.php";
        ?>

        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Your Timetable</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="#" class="fw-normal">Dashboard</a></li>
                            </ol>
                            <a href="./excel.php" target="_blank"
                                class="btn btn-danger  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Download
                            in Excel Format</a>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                        <?php
                                        include('./connect.php');
                                        $id = $_GET['id'];
                                        $query = "select * from gen_timetable where id = '$id'";
                                        $result = mysqli_query($conn,$query);
                                        $row = mysqli_fetch_array($result);
                                    ?>
                            <h3 class="box-title"><?php echo $row ['name_of_timetable'] ?></h3>
                            <!-- <p class="text-muted">Add class <code>.table</code></p> -->
                            <div class="table-responsive">
                                <table class="table text-nowrap" border="2">
                                    <thead>
                                        <tr>
                                           
                                            <th class="border-top-0">Day</th>
                                            <th class="border-top-0">Subject</th>
                                            <th class="border-top-0">Time</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        <tr>
                                            <td><?php echo $row ['day1'] ?></td>
                                            <td><?php echo $row ['subject1'] ?></td>
                                            <td><?php echo $row ['time1'] ?></td>
                                          
                                        </tr>
                                    
                                        <tr>
                                            <td><?php echo $row ['day2'] ?></td>
                                            <td><?php echo $row ['subject2'] ?></td>
                                            <td><?php echo $row ['time2'] ?></td>
                                          
                                        </tr>
                                        <tr>
                                            <td><?php echo $row ['day3'] ?></td>
                                            <td><?php echo $row ['subject3'] ?></td>
                                            <td><?php echo $row ['time3'] ?></td>
                                          
                                        </tr>
                                        <tr>
                                            <td><?php echo $row ['day4'] ?></td>
                                            <td><?php echo $row ['subject4'] ?></td>
                                            <td><?php echo $row ['time4'] ?></td>
                                          
                                        </tr>
                                        <tr>
                                            <td><?php echo $row ['day5'] ?></td>
                                            <td><?php echo $row ['subject5'] ?></td>
                                            <td><?php echo $row ['time5'] ?></td>
                                          
                                        </tr>
                                        <tr>
                                            <td><?php echo $row ['day6'] ?></td>
                                            <td><?php echo $row ['subject6'] ?></td>
                                            <td><?php echo $row ['time6'] ?></td>
                                          
                                        </tr>
                                        <tr>
                                            <td><?php echo $row ['day7'] ?></td>
                                            <td><?php echo $row ['subject7'] ?></td>
                                            <td><?php echo $row ['time7'] ?></td>
                                          
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row">
                            <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                            <a href="./select.php"
                                class="btn btn-primary  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Go back</a>
                        
                    </div>
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                            <a href="edit-timetable.php?id=<?php echo $row['id']; ?>"
                                class="btn btn-success  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Edit</a>
                        
                    </div>
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                            <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?')"
                                class="btn btn-danger  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Delete</a>
                        
                    </div>

                            </div>

                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?php 
            include "./footer.php";
            ?>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
</body>

</html>