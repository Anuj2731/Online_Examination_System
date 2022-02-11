<!DOCTYPE html>
<html lang="en">

<head>

   <!-- Title Page-->
   <title>Admin Dashboard</title>
   <link rel="stylesheet" href="assets/bootstrap.min.css">
   <link rel="stylesheet" href="assets/style.css">
   <link rel="stylesheet" href="assets/main.css">

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
    padding-left: 30px !important; 
}
.form-header {
    padding-left: 13px;
}
</style>
<?php 

   include "../connection.php";

  
    if(isset($_POST['submit'])){
    
        $search = $_POST['search'];
        $result = mysqli_query($con, "SELECT * FROM faculty_master WHERE F_id=$search");
       
         $count = mysqli_num_rows($result);
    }else{
        $select = "SELECT * FROM faculty_master";
        $result = mysqli_query($con,$select);
        $count = mysqli_num_rows($result);
    }

//              print_r($result);
//               $count = mysqli_num_rows($result);
//               print_r($count);
//   $search_result = filtertable($result);
//  }  
//  else{
//      $result = mysqli_query($con,"SELECT * FROM faculty_master");
    //   $search_result = filtertable($result);
//       $count = mysqli_num_rows($result);
//       print_r($count);
//   }

//   function filtertable($result){

//       $filter_result = mysqli_query($con,$result);
//       return $filter_result;
//    }
 
?>



<body class="animsition">
   
<?php include "sidebar.php"; ?>

        <!-- PAGE CONTAINER-->
        <div class="page-container">
           

            <!-- MAIN CONTENT-->
            <div class="main-content" id="main-content">
                <div class="section__content section__content--p30">
                <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit" name="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                    <div id="container-fluid" class="container-fluid">
                    
                    <div class="row m-t-30">
                    
                    <div class="row">
                    <div class="col-md-12">
							<!-- TABLE STRIPED -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Faculty Details</h3>
								</div>
                                <div  id="add">
                                <button type="button" name="submit" class="btn btn-success pull-right">
                                <i class="fa-plus-square"></i>&nbsp;<a href="fac_add.php" class="text-white"> ADD FACULTY</a></button>
                                </div>
								<div class="panel-body">
									<table class="table table-striped">
										<thead>
											<tr>
                                                <th id="sid">F_ID</th>
												<th>F_fname</th>
												<th>F_lname</th>
												<th id="head1">F_email</th>
												<th>F_phone</th>
                                                <th>F_password</th>
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
                                                <td><?php echo $data['F_id']; ?></td>
                                                <td><?php echo $data['F_fname']; ?></td>
                                                <td><?php echo $data['F_lname']; ?></td>
                                                <td><?php echo $data['F_email']; ?></td>
                                                <td><?php echo $data['F_phone']; ?></td>
                                                <td><?php echo $data['F_password']; ?></td>
                                                <td>
                                                <div class="card-body" id="btn">
                                                <button type="button"  class="btn btn-primary btn-lg" data-toggle="modal"  data-target="#exampleModalCenter"><a href="fac_update.php?fid=<?php echo $data['F_id'];?>" name="update" class="text-white">Update</a></button>
                                                </div>
                                             </td>
                                           <td>
                                               <div class="card-body" id="btn">
                                            <button type="button" name="delete"  class="btn btn-danger btn-lg"><a href="fac_delete.php?id=<?php echo $data['F_id'];?>" class="text-white">Delete</a></button>
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
