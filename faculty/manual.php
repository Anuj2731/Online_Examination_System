<?php 

session_start();


include  '../connection.php';
if(isset($_POST['Submit'])){

    
  
    $select=mysqli_query($con,"SELECT Sub_id FROM sub_master");
    while($data = mysqli_fetch_assoc($select)){
        $sub_id = $data['Sub_id'];
        
    $que=$_POST['que'];
    $opt1=$_POST['opt1'];
    $opt2=$_POST['opt2'];
    $opt3=$_POST['opt3'];
    $opt4=$_POST['opt4'];
    $ans=$_POST['ans'];
    $id=$_SESSION['user_id'];
    
}
    

    if(isset($_SESSION['user_id'])){
        
    $query = "INSERT INTO question_master(F_id,Sub_id,Sub_name,Q_name,Q_opt1,Q_opt2,Q_opt3,Q_opt4,Q_ans)
                  VALUES('$id','$sub_id','$subname','$que','$opt1','$opt2','$opt3','$opt4','$ans')";
          $mysqli=mysqli_query($con,$query);
          
    
        ?>
        <script>

        alert('Your Question Accepted Next Question Please !!Thank You!!');
        window.location = "upload.php";
    </script>
    <?php
    }
}

?>