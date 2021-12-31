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
                        <h4 class="page-title">Add New</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="#" class="fw-normal">Dashboard</a></li>
                            </ol>
                            
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
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12 col-xlg-12 col-md-12">
                        <div class="white-box">
                            <div class="user-bg"> <img width="100%" alt="user" src="plugins/images/large/img1.jpg">
                                <div class="overlay-box">
                                    <div class="user-content">
                                        <a href="javascript:void(0)"><img src="plugins/images/users/genu.jpg"
                                                class="thumb-lg img-circle" alt="img"></a>
                                        <h4 class="text-white mt-2"><a href="./createtimetable.php"><button class="btn btn-success" style="color:white">Create Timetable</button></a></h4>
                                        <!-- <h5 class="text-white mt-2">info@myadmin.com</h5> -->
                                    </div>
                                </div>
                            </div>
                            <div class="user-btm-box mt-5 d-md-flex">
                                <div class="col-md-4 col-sm-4 text-center">
                                    <!-- <h1>258</h1> -->
                                </div>
                                <div class="col-md-4 col-sm-4 text-center">
                                <h1>Available Timetable</h1>    
                                <h1>
                                    <?php
              include "./connect.php"; 
              $sql = "SELECT * FROM `gen_timetable`"; 
 
              $connStatus = $conn->query($sql); 
               
              $numberOfRows = mysqli_num_rows($connStatus); 
               
              echo $numberOfRows;  
              //this echo out the total number of rows returned from the query 
               
              $conn->close(); 
              ?>
                                    </h1>
                                </div>
                                <div class="col-md-4 col-sm-4 text-center">
                                    <!-- <h1>556</h1> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                <!-- <h3 align="center">Total Timetable Available</h3> -->
                    <!-- Column -->
                    <div class="col-md-12">
                    <table class="table text-nowrap" border=2  style="background:skyblue">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">Id</th>
                                            <th class="border-top-0">Time-Table Name</th>
                                            <th class="border-top-0">Date Added</th>
                                            <th class="border-top-0">Action</th>
											
                                        </tr>
                                    </thead>
                                    <tbody>

									<?php
                                        include('./connect.php');
                                        $query = "select * from gen_timetable";
                                        $result = mysqli_query($conn,$query);
                                        $num = mysqli_num_rows($result);

                                        for($i=0; $i<$num; $i++)
                                        {
                                            $row = mysqli_fetch_array($result);
                                    ?>
										

                                   
                                        <tr>
										<td><?php echo $i+1; ?></td>
                                            <td><?php echo $row['name_of_timetable']; ?></td>
                                            <td><?php echo $row['Date_recorded']; ?></td>
                                            <td>

                                            <a href="view.php?id=<?php echo $row['id']; ?>"><button class="btn btn-primary">Details</button></a> 
                                            
                                            </td>
											
                                        </tr>
                                      <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>

                    </div>

                </div>
                <!-- Row -->
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