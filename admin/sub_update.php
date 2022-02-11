<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Subject Data</title>
</head>
<?php
        include "../connection.php";   
                    
        $id = $_GET['subid'];
       
        $select = "SELECT * FROM sub_master WHERE Sub_id=$id";
        $cal = mysqli_query($con,$select);
        $row = mysqli_fetch_assoc($cal);
        
        if(isset($_POST['submit'])) // when click on Update button
        {
        $id = $_GET['subid'];
        $sub_code = $_POST['sub_code'];
        $sub_name = $_POST['sub_name'];
        $semester = $_POST['sem'];
        
    
    $update = "UPDATE sub_master SET Sub_code='$sub_code',Sub_name='$sub_name',Semester=' $semester' WHERE Sub_id='$id'";
        $edit = mysqli_query($con,$update);
    
        if(!$edit)
        {
            echo "<script> alert('Some problem'); </script>";
        
        }
        else
        {
            echo 'updated';
            header("Location: subject.php"); 
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
                <strong> Update Subject Data Here....  </strong>
                </div>
                <div class="card-body card-block">
                    <form action="#" method="POST" class="form-horizontal">
                        <div class="row form-group">
                            <div class="col col-sm-5">
                                <label  for="input-small"  class=" form-control-label">Subject Code</label>
                            </div>
                            <div class="col col-sm-6">
                                <input type="text" value="<?php echo $row['Sub_code'];?>" required id="input-small" name="sub_code" class="input-sm form-control-sm form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-sm-5">
                                <label  for="input-small"  class=" form-control-label">Subject Name</label>
                            </div>
                            <div class="col col-sm-6">
                                <input type="text" value="<?php echo $row['Sub_name'];?>" required id="input-small" name="sub_name" class="input-sm form-control-sm form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-sm-5">
                                <label  for="input-small"  class=" form-control-label">Semester</label>
                            </div>
                            <div class="form-wrapper">
            <select  id="" class="form-control" name="sem" required>
              <option value="<?php echo $row['Semester'];?>"  selected> <?php  echo $row['Semester'];?></option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
            </select>
           
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

