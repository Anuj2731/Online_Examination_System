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
#box{
    padding-left: 100px;
}


</style>
<?php 

include "../connection.php";
     
    if(isset($_GET['lid'])){
    $id = $_GET['lid'];
   
    $query = "DELETE FROM student_login_master WHERE L_id=$id";
    $delete = mysqli_query($con,$query);
    
    if($delete){
        echo "<script>alert('DELETED')</script>";
    }else{
        echo "<script>alert('Some Problem')</script>";
    }
}
  
if(isset($_POST['submit'])){
    
    $search = $_POST['search'];
    $result = mysqli_query($con, "SELECT * FROM student_login_master WHERE S_id=$search");
    $count = mysqli_num_rows($result);
}else{
    $select = "SELECT * FROM student_login_master";
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
                                        <li><a href="stu_time.php">Login/Logout_Time</a></li>
                                        <li><a href="#">Menu 2</a></li>
                                        <li><a href="#">Menu 3</a></li>
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
                    <div class="col-md-12" id="box">
							<!-- TABLE STRIPED -->
							<div class="panel" id="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Student Login/Logout Time Details</h3>
								</div>
                                
								<div class="panel-body">
									<table class="table table-striped">
										<thead>
											<tr>
                                                <th id="sid">L_id</th>
												<th>S_id</th>
												<th>Li_date_time</th>
												<th id="head1">Lo_date_time</th>
                                                <th id="head1">Delete</th>
											</tr>
										</thead>
										<tbody>
                                        <?php 
                                       
                                        if($count > 0) {  
                                            while($data = mysqli_fetch_assoc($result)){
                                        ?>
                                            <tr>
                                                <td><?php echo $data['L_id']; ?></td>
                                                <td><?php echo $data['S_id']; ?></td>
                                                <td><?php echo $data['Li_date_time']; ?></td>
                                                <td><?php echo $data['Lo_date_time']; ?></td>                       
                                               <td>
                                               <div class="card-body" id="btn">
                                            <button type="button" name="delete"  class="btn btn-danger btn-lg"><a href="?lid=<?php echo $data['L_id'];?>"  name="delete" class="text-white">Delete</a></button>
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
