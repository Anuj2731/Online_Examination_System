<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student Exam Data</title>
</head>
<?php
        include "../connection.php";   
                    
        $eid = $_GET['eid'];
       
        $select = "SELECT * FROM exam_detail_master WHERE E_id=$eid";
        $cal = mysqli_query($con,$select);
        $row = mysqli_fetch_assoc($cal);
        
        if(isset($_POST['submit'])) // when click on Update button
        {
        $eid = $_GET['eid'];
        $E_enroll = $_POST['E_enroll'];
        $E_rollno = $_POST['E_rollno'];
        $E_sem = $_POST['E_sem'];
        $E_div = $_POST['E_div'];
    
    $update = "UPDATE exam_detail_master SET E_enrollmentno='$E_enroll',E_rollno='$E_rollno',E_semester='$E_sem',E_division='$E_div' WHERE E_id='$eid'";
        $edit = mysqli_query($con,$update);
    
        if(!$edit)
        {
            echo "<script> alert('Some problem'); </script>";
        
        }
        else
        {
            echo 'updated';
            header("Location: exam_detail.php"); 
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
                <strong> Update Student exam Data Here....  </strong>
                </div>
                <div class="card-body card-block">
                    <form action="#" method="POST" class="form-horizontal">
                        <div class="row form-group">
                            <div class="col col-sm-5">
                                <label  for="input-small"  class=" form-control-label">Enrollment</label>
                            </div>
                            <div class="col col-sm-6">
                                <input type="text" value="<?php echo $row['E_enrollmentno'];?>" required id="input-small" name="E_enroll" class="input-sm form-control-sm form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-sm-5">
                                <label  for="input-small"  class=" form-control-label">Rollno</label>
                            </div>
                            <div class="col col-sm-6">
                                <input type="text" value="<?php echo $row['E_rollno'];?>" required id="input-small" name="E_rollno" class="input-sm form-control-sm form-control">
                            </div>
                        </div>
                        <div class="form-wrapper">
            <select  id="" class="form-control" name="E_sem">
              <option value="<?php echo $row['E_semester'];?>" selected><?php echo $row['E_semester'];?></option>
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
          
          <div class="form-wrapper">
            <select id="" class="form-control" name="E_div">
              <option value="<?php echo $row['E_division'];?>"  selected><?php echo $row['E_division'];?></option>
              <option value="A">A</option>
              <option value="B">B</option>
              <option value="C">C</option>
              <option value="D">D</option>
              <option value="E">E</option>

            </select>
           
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

