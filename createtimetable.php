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
                        <h4 class="page-title">Create Timetable</h4>
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
                    <div class="col-lg-8 col-xlg-8 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material" action="./timetableconnect.php" method="POST">
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Name of Time-table</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" placeholder="Name of Time-table"
                                                class="form-control p-0 border-0" name="timetablename"> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Enter Name Of First Subject</label>
                                        <div class="col-md-12 border-bottom p-0">
                                        <input type="text" placeholder="Subject1"
                                                class="form-control p-0 border-0" name="subject1">

                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Select Time For First Subject</label>
                                        <div class="col-md-12 border-bottom p-0">
                                       <select name="time1" id="" class="col-md-12 border-bottom p-0">
                                       <option value="">Choose an Option</option>    
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
                                       <option value="">Choose an Option</option>    
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
                                        <input type="text" placeholder="Subject2"
                                                class="form-control p-0 border-0" name="subject2">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Select Time For Second Subject</label>
                                        <div class="col-md-12 border-bottom p-0">
                                       <select name="time2" id="" class="col-md-12 border-bottom p-0">
                                       <option value="">Choose an Option</option>
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
                                       <option value="">Choose an Option</option>    
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
                                        <input type="text" placeholder="Subject3"
                                                class="form-control p-0 border-0" name="subject3">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Select Time For Third Subject</label>
                                        <div class="col-md-12 border-bottom p-0">
                                       <select name="time3" id="" class="col-md-12 border-bottom p-0">
                                       <option value="">Choose an Option</option>
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
                                       <option value="">Choose an Option</option>    
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
                                        <input type="text" placeholder="Subject4"
                                                class="form-control p-0 border-0" name="subject4">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Select Time For Fourth Subject</label>
                                        <div class="col-md-12 border-bottom p-0">
                                       <select name="time4" id="" class="col-md-12 border-bottom p-0">
                                       <option value="">Choose an Option</option>
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
                                       <option value="">Choose an Option</option>    
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
                                        <input type="text" placeholder="Subject5"
                                                class="form-control p-0 border-0" name="subject5">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Select Time For Fifth Subject</label>
                                        <div class="col-md-12 border-bottom p-0">
                                       <select name="time5" id="" class="col-md-12 border-bottom p-0">
                                       <option value="">Choose an Option</option>
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
                                       <option value="">Choose an Option</option>    
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
                                        <input type="text" placeholder="Subject6"
                                                class="form-control p-0 border-0" name="subject6">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Select Time For Sixth Subject</label>
                                        <div class="col-md-12 border-bottom p-0">
                                       <select name="time6" id="" class="col-md-12 border-bottom p-0">
                                       <option value="">Choose an Option</option>
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
                                       <option value="">Choose an Option</option>    
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
                                        <input type="text" placeholder="Subject7"
                                                class="form-control p-0 border-0" name="subject5">
                                        </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="example-email" class="col-md-12 p-0">Select Time For Seventh Subject</label>
                                        <div class="col-md-12 border-bottom p-0">
                                       <select name="time7" id="" class="col-md-12 border-bottom p-0">
                                       <option value="">Choose an Option</option>
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
                                       <option value="">Choose an Option</option>    
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
                                        <div class="col-sm-12">
                                            <button class="btn btn-success" value="submit">Create Timetable</button>
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