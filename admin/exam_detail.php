<!DOCTYPE html>
<html lang="en">

<head>

   <!-- Title Page-->
   <title>Admin Dashboard</title>
   <link rel="stylesheet" href="assets/bootstrap.min.css">
   <link rel="stylesheet" href="assets/style.css">
   <link rel="stylesheet" href="assets/main.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<?php include "header.php"; ?>
<style>
#main-content {
    padding-top: 10px !important;
    min-height: 100vh;
}
#head{
    padding-left: 25px !important; 
}
#head1{
    padding-left: 44px !important; 
}
#add{
    padding-right: 30px !important; 
    padding-bottom: 10px !important; 
}
#sid{
    padding-left: 10px !important; 
}
 #btn{
    padding: 0px !important; 
    padding-left: 15px!important;
} 
#container-fluid{
    padding-left: 0px !important; 
}
#header{
    padding-right: 40px!important;
}
#table{

padding-left: 46px !important;

}


</style>
<?php 

include "../connection.php";

if(isset($_POST['submit'])){
    
    $search = $_POST['search'];
    $result = mysqli_query($con, "SELECT * FROM exam_detail_master WHERE S_id=$search");
   
     $count = mysqli_num_rows($result);
     
    }
else{
    $select = "SELECT * FROM exam_detail_master";
    $result = mysqli_query($con,$select);
    $count = mysqli_num_rows($result);
    
}
?>

<body class="animsition">
   
<?php include "sidebar.php"; ?>

        <!-- PAGE CONTAINER-->
        <div class="page-container">
           

            <!-- MAIN CONTENT-->
             <!-- MAIN CONTENT-->
             <div class="main-content" id="main-content">
                <div class="section__content section__content--p30">
                    <div id="container-fluid" class="container-fluid">
                    <!-- /# column -->
							<div class="col-lg-12" id="header">
								<div class="card">
									<!-- <div class="card-header">
										<h4>Pills</h4>
									</div> -->
									<div class="card-body" >
										

                                    <ul class="list-inline">
                                        <li><a href="student.php">Student</a></li>
                                        <li><a href="exam_detail.php">Exam Details</a></li>
                                        <li><a href="stu_time.php">Login/Logout_Time</a></li>
                                        <!-- <li><a href="#">Menu 3</a></li> -->
                                        <form class="form-header pull-right" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit" name="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                                    </ul>
                                   
									</div>
								</div>
							</div>
						</div>
                    <div class="row m-t-30">
                    <div class="row">
                    <div class="col-md-12" id="table">
							<!-- TABLE STRIPED -->
							<div class="panel" id="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Exam Details</h3>
								</div>
                                
								<div class="panel-body">
									<table class="table table-striped">
										<thead>
											<tr>
                                                <th id="sid">E_ID</th>
												<th>S_ID</th>
												<th>E_enrollmentno</th>
												<th id="head1">E_rollno</th>
												<th>E_semester</th>
                                                <th>E_division</th>
                                                <th id="head">Update</th>
                                                <th id="head1">Delete</th>
											</tr>
										</thead>
										<tbody>
                                        <?php 
                                        if($count > 0) {  
                                            while($data = mysqli_fetch_assoc($result)){
                                        ?>
                                            <tr>
                                                <td><?php echo $data['E_id']; ?></td>
                                                <td><?php echo $data['S_id']; ?></td>
                                                <td><?php echo $data['E_enrollmentno']; ?></td>
                                                <td><?php echo $data['E_rollno']; ?></td>
                                                <td><?php echo $data['E_semester']; ?></td>
                                                <td><?php echo $data['E_division']; ?></td>
                                                <td>
                                                
                                                <div class="card-body" id="btn">
                                                <button type="button"  class="btn btn-primary btn-lg" data-toggle="modal" name="update" data-target="#exampleModalCenter"><a href="exam_update.php?eid=<?php echo $data['E_id'];?>" name="update" class="text-white">Update</a></button>
                                                </div>
                                                
                                               </td>
                                           
                                               <td>
                                               <div class="card-body" id="btn">
                                            <button type="button" name="delete"  class="btn btn-danger btn-lg"><a href="exam_delete.php?eid=<?php echo $data['E_id'];?>" class="text-white">Delete</a></button>
                                               </td>
                                               </div>
                                            </tr>
                                           <?php 
                                        
                                    }
                                            }
                                           ?>
                                        </tbody>
                                    </table>
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
