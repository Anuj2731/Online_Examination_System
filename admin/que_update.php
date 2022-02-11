<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student Data</title>
</head>
<?php
        include "../connection.php";   
                    
        $qid = $_GET['Qid'];
       
        $select = "SELECT * FROM question_master WHERE Q_id=$qid";
        $cal = mysqli_query($con,$select);
        $row = mysqli_fetch_assoc($cal);
        
        if(isset($_POST['submit'])) // when click on Update button
        {
        $qid = $_GET['Qid'];
        $qname = $_POST['que'];
        $opt1 = $_POST['opt1'];
        $opt2 = $_POST['opt2'];
        $opt3 = $_POST['opt3'];
        $opt4 = $_POST['opt4'];
        $ans=$_POST['ans'];
    
    $update = "UPDATE question_master SET Q_name='$qname',Q_opt1='$opt1',Q_opt2='$opt2',Q_opt3='$opt3',Q_opt4='$opt4',Q_ans='$ans' WHERE Q_id='$qid'";
        $edit = mysqli_query($con,$update);
    
        if(!$edit)
        {
            echo "<script> alert('Some problem'); </script>";
        
        }
        else
        {
            echo 'updated';
            header("Location: question.php"); 
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
                <strong> Update Question Data Here....  </strong>
                </div>
                <div class="card-body card-block">
                    <form action="#" method="POST" class="form-horizontal">
                        <div class="row form-group">
                            <div class="col col-sm-5">
                                <label  for="input-small"  class=" form-control-label">Question</label>
                            </div>
                            <div class="col col-sm-6">
                                <input type="text" value="<?php echo $row['Q_name'];?>" required id="input-small" name="que" class="input-sm form-control-sm form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-sm-5">
                                <label  for="input-small"  class=" form-control-label">Option1</label>
                            </div>
                            <div class="col col-sm-6">
                                <input type="text" value="<?php echo $row['Q_opt1'];?>" required id="input-small" name="opt1" class="input-sm form-control-sm form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-sm-5">
                                <label  for="input-small"  class=" form-control-label">Option2</label>
                            </div>
                            <div class="col col-sm-6">
                                <input type="text" value="<?php echo $row['Q_opt2'];?>" required id="input-small" name="opt2" class="input-sm form-control-sm form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-sm-5">
                                <label  for="input-small"  class=" form-control-label">Option3</label>
                            </div>
                            <div class="col col-sm-6">
                                <input type="text" value="<?php echo $row['Q_opt3'];?>" required id="input-small" name="opt3" class="input-sm form-control-sm form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-sm-5">
                                <label  for="input-small"  class=" form-control-label">Option4</label>
                            </div>
                            <div class="col col-sm-6">
                                <input type="text" value="<?php echo $row['Q_opt4'];?>" required id="input-small" name="opt4" class="input-sm form-control-sm form-control">
                            </div>
                        </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-sm-5">
                                <label  for="input-small"  class=" form-control-label">Answer</label>
                            </div>
                            <div class="col col-sm-6">
                                <input type="text" value="<?php echo $row['Q_ans'];?>" required id="input-small" name="ans" class="input-sm form-control-sm form-control">
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

