<!DOCTYPE html>
<html lang="en">

<head>

   <!-- Title Page-->
   <title>Admin Dashboard</title>
   

</head>

<?php include "header.php"; ?>
<?php 
include "../connection.php";


?>
<body class="animsition">
   
<?php include "sidebar.php"; ?>

        <!-- PAGE CONTAINER-->
        <div class="page-container">
           

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i><br>
                                            </div>
                                            <div class="text">
                                                <?php   
                                                    $stu = "SELECT * FROM student_master";
                                                    $call = mysqli_query($con,$stu);
                                                    $count = mysqli_num_rows($call);
                                                ?>
                                                <h2><?php echo $count; ?></h2>
                                                <span>Student</span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                            <?php   
                                                    $fac = "SELECT * FROM faculty_master";
                                                    $call = mysqli_query($con,$fac);
                                                    $count = mysqli_num_rows($call);
                                                ?>
                                                <h2><?php echo $count; ?></h2>
                                                <span>Faculty</span>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                            <?php   
                                                    $que = "SELECT * FROM question_master";
                                                    $call = mysqli_query($con,$que);
                                                    $count = mysqli_num_rows($call);
                                                ?>
                                                <h2><?php echo $count; ?></h2>
                                                <span>Questions</span>
                                            </div>
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                            <?php 
                                            
                                            $fac = "SELECT * FROM result_master";
                                            $call = mysqli_query($con,$fac);
                                            $count = mysqli_num_rows($call);
                                        ?>
                                                <h2><?php echo $count?></h2>
                                              <span>Result</span>
                                            </div>
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

   <?php include "footer.php"; ?>
</body>

</html>
<!-- end document-->
