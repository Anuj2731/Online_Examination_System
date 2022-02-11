<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Faculty Data</title>
</head>
<?php
        include "../connection.php";   
                    
        $fid = $_GET['fid'];
       
        $select = "SELECT * FROM faculty_master WHERE F_id=$fid";
        $cal = mysqli_query($con,$select);
        $row = mysqli_fetch_assoc($cal);
        
        if(isset($_POST['submit'])) // when click on Update button
        {
        $sid = $_GET['fid'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $pass = $_POST['pass'];
    
    $update = "UPDATE faculty_master SET F_fname='$fname',F_lname='$lname',F_email='$email',F_phone='$mobile',F_password='$pass' WHERE F_id='$fid'";
        $edit = mysqli_query($con,$update);
    
        if(!$edit)
        {
            echo "<script> alert('Some problem'); </script>";
        
        }
        else
        {
            echo 'updated';
            header("Location: faculty.php"); 
        }    	
    } 
    
    ?>
<body class="animsition">
   
   <?php include "sidebar.php"; ?>
   
<!-- PAGE CONTAINER-->
<div class="page-container">


<!-- MAIN CONTENT-->
<div class="main-content" id="main-content">
<div class="section__content section__content--p30">
    <div id="container-fluid" class="container-fluid">
    <div class="row m-t-30">
     <div class="card">
                <div class="card-header">
                <strong> Update Faculty Data Here....  </strong>
                </div>
                <div class="card-body card-block">
                    <form action="#" method="POST" class="form-horizontal">
                        <div class="row form-group">
                            <div class="col col-sm-5">
                                <label  for="input-small"  class=" form-control-label">FirstName</label>
                            </div>
                            <div class="col col-sm-6">
                                <input type="text" value="<?php echo $row['F_fname'];?>" required id="input-small" name="fname" class="input-sm form-control-sm form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-sm-5">
                                <label  for="input-small"  class=" form-control-label">LastName</label>
                            </div>
                            <div class="col col-sm-6">
                                <input type="text" value="<?php echo $row['F_lname'];?>" required id="input-small" name="lname" class="input-sm form-control-sm form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-sm-5">
                                <label  for="input-small"  class=" form-control-label">Email</label>
                            </div>
                            <div class="col col-sm-6">
                                <input type="email" value="<?php echo $row['F_email'];?>" required id="input-small" name="email"  class="input-sm form-control-sm form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-sm-5">
                                <label  for="input-small"  class=" form-control-label">Mobile Number</label>
                            </div>
                            <div class="col col-sm-6">
                                <input type="text" value="<?php echo $row['F_phone'];?>" required id="input-small" name="mobile"  class="input-sm form-control-sm form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-sm-5">
                                <label  for="input-small"  class=" form-control-label">Password</label>
                            </div>
                            <div class="col col-sm-6">
                                <input type="password" value="<?php echo $row['F_password'];?>" required id="input-small" name="pass"  class="input-sm form-control-sm form-control">
                            </div>
                        </div>
                       
        
                </div>
                <div class="card-footer">
                    <button type="submit" name="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Update
                    </button>
                    <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Reset
                    </button>
                  
                </div>
                </form>
            </div>
        </div>
                    
                            </div>
                        </div>
                        </div>
                        </div>
                        </div>
                                   
</body>
</html>

