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
                        <h4 class="page-title">Edit Timetable</h4>
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
                    <?php
                                        include('./connect.php');
                                        $id = $_GET['id'];
                                        $query = "select * from gen_timetable where id = '$id'";
                                        $result = mysqli_query($conn,$query);
                                        $row = mysqli_fetch_array($result);
                                    ?>
                    <div class="col-lg-8 col-xlg-8 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material" action="./proc-edit.php" method="POST">
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Name of Time-table</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" value="<?php echo $row['name_of_timetable']; ?>"
                                                class="form-control p-0 border-0" name="timetablename"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Enter Name Of First Subject</label>
                                        <div class="col-md-12 border-bottom p-0">
                                        <input type="text" value="<?php echo $row['subject1']; ?>" class="form-control p-0 border-0" name="subject1">

                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Select Time For First Subject</label>
                                        <div class="col-md-12 border-bottom p-0">
                                       <select name="time1" id="" class="col-md-12 border-bottom p-0">
                                       <option value="<?php echo $row['time1']; ?>"><?php echo $row['time1']; ?></option>    
                                           <option value="8:00-9:00">8:00-9:00</option>
                                           <option value="9:00-10:00">9:00-10:00</option>
                                           <option value="10:00-11:00">10:00-11:00</option>
                                           <option value="11:00-12:00">11:00-12:00</option>
                                           <option value="12:00-13:00">12:00-13:00</option>
                                           <option value="13:00-14:00">13:00-14:00</option>
                                           <option value="14:00-15:00">14:00-15:00</option>
                                           <option value="15:00-16:00">15:00-16:00</option>
                                           <option value="16:00-17:00">16:00-17:00</option>
                                       </select>
                                       </div></div>
                                       <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Select Day For First Subject</label>
                                        <div class="col-md-12 border-bottom p-0">
                                       <select name="day1" id="" class="col-md-12 border-bottom p-0">
                                       <option value="<?php echo $row['day1']; ?>"><?php echo $row['day1']; ?></option>    
                                       <option value="sunday">Sunday</option>
                                       <option value="monday">Monday</option>
                                           <option value="tuesday">Tuesday</option>
                                           <option value="wednesday">Wednesday</option>
                                           <option value="thursday">Thursday</option>
                                           <option value="friday">Friday</option>
                                           <option value="saturday">Saturday</option>
                                       </select>
                                       </div></div>
                                        
                                    <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Enter Name Of Second Subject</label>
                                        <div class="col-md-12 border-bottom p-0">
                                        <input type="text" value="<?php echo $row['subject2']; ?>"
                                                class="form-control p-0 border-0" name="subject2">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Select Time For Second Subject</label>
                                        <div class="col-md-12 border-bottom p-0">
                                       <select name="time2" id="" class="col-md-12 border-bottom p-0">
                                       <option value="<?php echo $row['time2']; ?>"><?php echo $row['time2']; ?></option>
                                       <option value="8:00-9:00">8:00-9:00</option>
                                           <option value="9:00-10:00">9:00-10:00</option>
                                           <option value="10:00-11:00">10:00-11:00</option>
                                           <option value="11:00-12:00">11:00-12:00</option>
                                           <option value="12:00-13:00">12:00-13:00</option>
                                           <option value="13:00-14:00">13:00-14:00</option>
                                           <option value="14:00-15:00">14:00-15:00</option>
                                           <option value="15:00-16:00">15:00-16:00</option>
                                           <option value="16:00-17:00">16:00-17:00</option>
                                       </select>
                                       </div></div>
                                       <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Select Day For Second Subject</label>
                                        <div class="col-md-12 border-bottom p-0">
                                       <select name="day2" id="" class="col-md-12 border-bottom p-0">
                                       <option value="<?php echo $row['day2']; ?>"><?php echo $row['day2']; ?></option>    
                                       <option value="sunday">Sunday</option>
                                       <option value="monday">Monday</option>
                                           <option value="tuesday">Tuesday</option>
                                           <option value="wednesday">Wednesday</option>
                                           <option value="thursday">Thursday</option>
                                           <option value="friday">Friday</option>
                                           <option value="saturday">Saturday</option>
                                       </select>
                                       </div></div>
                                        
                                    <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Enter Name Of Third Subject</label>
                                        <div class="col-md-12 border-bottom p-0">
                                        <input type="text" value="<?php echo $row['subject3']; ?>"
                                                class="form-control p-0 border-0" name="subject3">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Select Time For Third Subject</label>
                                        <div class="col-md-12 border-bottom p-0">
                                       <select name="time3" id="" class="col-md-12 border-bottom p-0">
                                       <option value="<?php echo $row['time3']; ?>"><?php echo $row['time3']; ?></option>
                                       <option value="8:00-9:00">8:00-9:00</option>
                                           <option value="9:00-10:00">9:00-10:00</option>
                                           <option value="10:00-11:00">10:00-11:00</option>
                                           <option value="11:00-12:00">11:00-12:00</option>
                                           <option value="12:00-13:00">12:00-13:00</option>
                                           <option value="13:00-14:00">13:00-14:00</option>
                                           <option value="14:00-15:00">14:00-15:00</option>
                                           <option value="15:00-16:00">15:00-16:00</option>
                                           <option value="16:00-17:00">16:00-17:00</option>                                       </select>
                                       </div></div>
                                       <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Select Day For Third Subject</label>
                                        <div class="col-md-12 border-bottom p-0">
                                       <select name="day3" id="" class="col-md-12 border-bottom p-0">
                                       <option value="<?php echo $row['day3']; ?>"><?php echo $row['day3']; ?></option>    
                                       <option value="sunday">Sunday</option>
                                       <option value="monday">Monday</option>
                                           <option value="tuesday">Tuesday</option>
                                           <option value="wednesday">Wednesday</option>
                                           <option value="thursday">Thursday</option>
                                           <option value="friday">Friday</option>
                                           <option value="saturday">Saturday</option>
                                       </select>
                                       </div></div>
                                        
                                    <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Enter Name Of Fourth Subject</label>
                                        <div class="col-md-12 border-bottom p-0">
                                        <input type="text" value="<?php echo $row['subject4']; ?>"
                                                class="form-control p-0 border-0" name="subject4">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Select Time For Fourth Subject</label>
                                        <div class="col-md-12 border-bottom p-0">
                                       <select name="time4" id="" class="col-md-12 border-bottom p-0">
                                       <option value="<?php echo $row['time4']; ?>"><?php echo $row['time4']; ?></option>
                                       <option value="8:00-9:00">8:00-9:00</option>
                                           <option value="9:00-10:00">9:00-10:00</option>
                                           <option value="10:00-11:00">10:00-11:00</option>
                                           <option value="11:00-12:00">11:00-12:00</option>
                                           <option value="12:00-13:00">12:00-13:00</option>
                                           <option value="13:00-14:00">13:00-14:00</option>
                                           <option value="14:00-15:00">14:00-15:00</option>
                                           <option value="15:00-16:00">15:00-16:00</option>
                                           <option value="16:00-17:00">16:00-17:00</option>
                                       </select>
                                       </div></div>
                                       <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Select Day For Fourth Subject</label>
                                        <div class="col-md-12 border-bottom p-0">
                                       <select name="day4" id="" class="col-md-12 border-bottom p-0">
                                       <option value="<?php echo $row['day4']; ?>"><?php echo $row['day4']; ?></option>    
                                       <option value="sunday">Sunday</option>
                                       <option value="monday">Monday</option>
                                           <option value="tuesday">Tuesday</option>
                                           <option value="wednesday">Wednesday</option>
                                           <option value="thursday">Thursday</option>
                                           <option value="friday">Friday</option>
                                           <option value="saturday">Saturday</option>
                                       </select>
                                       </div></div>
                                      
                                       <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Subject5</label>
                                        <div class="col-md-12 border-bottom p-0">
                                        <input type="text" value="<?php echo $row['subject5']; ?>"
                                                class="form-control p-0 border-0" name="subject5">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Select Time For Fifth Subject</label>
                                        <div class="col-md-12 border-bottom p-0">
                                       <select name="time5" id="" class="col-md-12 border-bottom p-0">
                                       <option value="<?php echo $row['time5']; ?>"><?php echo $row['time5']; ?></option>
                                       <option value="8:00-9:00">8:00-9:00</option>
                                           <option value="9:00-10:00">9:00-10:00</option>
                                           <option value="10:00-11:00">10:00-11:00</option>
                                           <option value="11:00-12:00">11:00-12:00</option>
                                           <option value="12:00-13:00">12:00-13:00</option>
                                           <option value="13:00-14:00">13:00-14:00</option>
                                           <option value="14:00-15:00">14:00-15:00</option>
                                           <option value="15:00-16:00">15:00-16:00</option>
                                           <option value="16:00-17:00">16:00-17:00</option>
                                       </select>
                                       </div></div>
                                       <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Select Day For Fifth Subject</label>
                                        <div class="col-md-12 border-bottom p-0">
                                       <select name="day5" id="" class="col-md-12 border-bottom p-0">
                                       <option value="<?php echo $row['day5']; ?>"><?php echo $row['day5']; ?></option>    
                                       <option value="sunday">Sunday</option>
                                       <option value="monday">Monday</option>
                                           <option value="tuesday">Tuesday</option>
                                           <option value="wednesday">Wednesday</option>
                                           <option value="thursday">Thursday</option>
                                           <option value="friday">Friday</option>
                                           <option value="saturday">Saturday</option>
                                       </select>
                                       </div></div>
                                       <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Enter Name Of Sixth Subject</label>
                                        <div class="col-md-12 border-bottom p-0">
                                        <input type="text" value="<?php echo $row['subject6']; ?>"
                                                class="form-control p-0 border-0" name="subject6">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Select Time For Sixth Subject</label>
                                        <div class="col-md-12 border-bottom p-0">
                                       <select name="time6" id="" class="col-md-12 border-bottom p-0">
                                       <option value="<?php echo $row['time6']; ?>"><?php echo $row['time6']; ?></option>
                                       <option value="8:00-9:00">8:00-9:00</option>
                                           <option value="9:00-10:00">9:00-10:00</option>
                                           <option value="10:00-11:00">10:00-11:00</option>
                                           <option value="11:00-12:00">11:00-12:00</option>
                                           <option value="12:00-13:00">12:00-13:00</option>
                                           <option value="13:00-14:00">13:00-14:00</option>
                                           <option value="14:00-15:00">14:00-15:00</option>
                                           <option value="15:00-16:00">15:00-16:00</option>
                                           <option value="16:00-17:00">16:00-17:00</option>
                                       </select>
                                       </div></div>
                                       <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Select Day For Sixth Subject</label>
                                        <div class="col-md-12 border-bottom p-0">
                                       <select name="day6" id="" class="col-md-12 border-bottom p-0">
                                       <option value="<?php echo $row['day6']; ?>"><?php echo $row['day6']; ?></option>    
                                       <option value="sunday">Sunday</option>
                                       <option value="monday">Monday</option>
                                           <option value="tuesday">Tuesday</option>
                                           <option value="wednesday">Wednesday</option>
                                           <option value="thursday">Thursday</option>
                                           <option value="friday">Friday</option>
                                           <option value="saturday">Saturday</option>
                                       </select>
                                       </div></div>
                                        
                                    <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Enter Name Of Seventh Subject</label>
                                        <div class="col-md-12 border-bottom p-0">
                                        <input type="text" value="<?php echo $row['subject7']; ?>"
                                                class="form-control p-0 border-0" name="subject7">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Select Time For Seventh Subject</label>
                                        <div class="col-md-12 border-bottom p-0">
                                       <select name="time7" id="" class="col-md-12 border-bottom p-0">
                                       <option value="<?php echo $row['time7']; ?>"><?php echo $row['time7']; ?></option>
                                       <option value="8:00-9:00">8:00-9:00</option>
                                           <option value="9:00-10:00">9:00-10:00</option>
                                           <option value="10:00-11:00">10:00-11:00</option>
                                           <option value="11:00-12:00">11:00-12:00</option>
                                           <option value="12:00-13:00">12:00-13:00</option>
                                           <option value="13:00-14:00">13:00-14:00</option>
                                           <option value="14:00-15:00">14:00-15:00</option>
                                           <option value="15:00-16:00">15:00-16:00</option>
                                           <option value="16:00-17:00">16:00-17:00</option>
                                       </select>
                                       </div></div>
                                       <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Select Day For Seventh Subject</label>
                                        <div class="col-md-12 border-bottom p-0">
                                       <select name="day7" id="" class="col-md-12 border-bottom p-0">
                                       <option value="<?php echo $row['day7']; ?>"><?php echo $row['day7']; ?></option>    
                                       <option value="sunday">Sunday</option>
                                       <option value="monday">Monday</option>
                                           <option value="tuesday">Tuesday</option>
                                           <option value="wednesday">Wednesday</option>
                                           <option value="thursday">Thursday</option>
                                           <option value="friday">Friday</option>
                                           <option value="saturday">Saturday</option>
                                       </select>
                                       </div></div>


                                       <div class="form-group mb-4">
                                        <!-- <label for="ID" class="col-md-12 p-0">ID</label> -->
                                        <div class="col-md-12 border-bottom p-0">
                                        <input type="hidden" name='id' value="<?php echo $row['id']; ?>">
                                        </div>
                                    </div>
                                       
                                        
                                    <div class="form-group mb-4">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success" value="submit">Edit Timetable</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
               
                    <!-- Column -->
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
            <footer class="footer text-center"> 2021 © Ample Admin brought to you by <a
                    href="https://www.wrappixel.com/">wrappixel.com</a>
            </footer>
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