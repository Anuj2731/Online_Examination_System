


<?php

session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>

<title>Online Examination System</title>
<script>

//   window.onload = function(){
//     myFunction();
// var time=15;
// function myFunction() {
    
//     setInterval(function(){
//         if(time>0){
//         document.getElementById("timer").innerText = time;
        
//         time = time - 1;
//         }
//         else{
//             document.getElementById('exam_click').click();
//             // alert('your exam has ended');
//         window.location.href = 'index.php';
//         }        
//     }, 1000);
// }





  }





</script> 
 
<link rel="stylesheet" href="assets/grid.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <style>
#btn{

  padding-top : 20px;
}
#radio1 {
    visibility: hidden!important;
}
 </style>
 
</head>

<?php
 
 include '../connection.php';

  $suid=$_GET['subid'];
 
if(isset($_POST['result'])){
   
    
    $rad=$_POST['radio'];
    

    $count = count($rad);
    
  
    $result = 0;
  
    $selected = $_POST['radio'];
//   print_r($selected);
     
    $radcount =  count($selected);
    
        
//    print_r("SELECT Q_ans FROM question_master WHERE Sub_id = $suid ");exit;
    $q =mysqli_query($con,"SELECT Q_ans,Q_id FROM question_master WHERE Sub_id = $suid ");
    

     $num = mysqli_num_rows($q);
     
     

     //$row = mysqli_fetch_assoc($q);
      
     $my_arary = array();
    //  $row = mysqli_fetch_assoc($q);
     $q_id = array();
while($row = mysqli_fetch_assoc($q)){
    
  $my_arary[] = $row['Q_ans'];
//   print_r( $row);
$q_id[] = $row['Q_id'];

}

// print_r( $q_id);
    for($i=0;$i<$radcount-1;$i++){

        $qid = $q_id[$i] ;
        // print_r($qid);
            if(trim($my_arary[$i]) == trim($selected[$qid])){
               
            $result++;
            }
            // print_r($row['Q_ans']);exit;
            
    }



    echo "<script>alert('Thanku For Submitting') ; window.location.href='index.php' ;  </script>";
     
    
    $s = mysqli_query($con,"SELECT S_id FROM student_master");
    $enrollid=$_GET['enroll'];
    
   
    while( $stu_data = mysqli_fetch_assoc($s)){
        $sid = $stu_data['S_id'];
     
  
    $s = mysqli_query($con,"SELECT Sub_name FROM sub_master WHERE Sub_id = $suid");
    $sub_data = mysqli_fetch_assoc($s);
         $subname = $sub_data['Sub_name'];
  
        
                     $insert = mysqli_query($con,"INSERT INTO result_master(S_id,E_enrollmentno,Sub_name,R_score) VALUES 
                         ('$sid','$enrollid','$subname','$result')"); 
                         
                        }
     }
    

    //  echo "<script>window.location='index.php' </script>";
     
?>

<body> 
<?php
include '../connection.php';
 


    $mcq="SELECT * FROM question_master WHERE Sub_id = $suid";
    
    $result=mysqli_query($con,$mcq);
    
    $count=mysqli_num_rows($result);


    
        
    if($count>0){
            
         while($row = mysqli_fetch_assoc($result)){
    

        ?> 
        <p id=timer></p>
            <div class="container mt-sm-5 my-1">
            <div class="question ml-sm-5 pl-sm-5 pt-2">
            <form method="POST">
                <div class="py-2 h5" ><b><?php echo $row['Q_name']?></b></div>
                <div class="ml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-3" id="options">
               
                <label class="options"><?php echo 'A)'. $row['Q_opt1']?>
                    <input type="radio" name="radio[<?php echo $row['Q_id']; ?>]" value="<?php echo  $row['Q_opt1']?>">
                    <span class="checkmark"></span> 
                </label> 
                 
                <label class="options"><?php echo 'B)'. $row['Q_opt2']?>             
                    <input type="radio" name="radio[<?php echo $row['Q_id']; ?>]" value="<?php echo $row['Q_opt2']?>">
                    <span class="checkmark"></span>  
                </label> 
                
                <label class="options"><?php echo 'C)'. $row['Q_opt3']?>
                    <input type="radio" name="radio[<?php echo $row['Q_id']; ?>]" value="<?php echo $row['Q_opt3'] ?>">
                    <span class="checkmark"></span>  
                </label> 
                   
                <label class="options"><?php echo 'D)'. $row['Q_opt4']?>
                <input type="radio" name="radio[<?php echo $row['Q_id']; ?>]" value="<?php echo $row['Q_opt4']?>">
                <span class="checkmark"></span> 
                </label> 

                <label class="options" id="radio1">
                    <input type="radio" id="radio1" name="radio[<?php echo $row['Q_id']; ?>]" value="N/A" checked>
                    <span class="checkmark"></span> 
                </label> 
            </div>
            </div>
           
            
        </div>
          <?php  
        
            }
            ?>
            <div class='d-flex justify-content-center' id='btn'>

                <input id="exam_click" type='submit' class='btn btn-primary' name='result'>
        
            </div>
            <form>
<?php
    }
     ?>   
   
  

</body>

</html>