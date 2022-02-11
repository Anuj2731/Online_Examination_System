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
.button {
   /* Green */
   background-color: #008CBA;
 border-radius:5px;
  color: white;
  padding: 9px 9px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 4px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.button2:hover {
    background-color: white;
  border: 2px solid  #008CBA;
  color: black;
}

#print{
    text-align:center;  
}

</style>
<?php 

   include "../connection.php";

   
    if(isset($_POST['submit'])){
    
        $search = $_POST['search'];
        $result = mysqli_query($con, "SELECT student_master.S_id,S_fname,S_lname,R_id,E_enrollmentno,sub_name,R_score FROM student_master WHERE S_id=$search INNER JOIN result_master ON student_master.S_id = result_master.S_id ");
       
         $count = mysqli_num_rows($result);
    }else{
        $sql="SELECT student_master.S_id,S_fname,S_lname,R_id,E_enrollmentno,sub_name,R_score FROM student_master INNER JOIN result_master ON student_master.S_id = result_master.S_id";
        $result=mysqli_query($con,$sql);
        $count = mysqli_num_rows($result);
    }


?>
<?php

   
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
                    <div class="col-md-12" >
							<!-- TABLE STRIPED -->
                        
							    <div class="panel" id="tab"  >
								        <div class="panel-heading" >
									    <h3 class="panel-title">Result Details</h3>
								         </div>
                                
								        <div class="panel-body">
									    <table class="table table-striped" >
										    <thead>
											    <tr>
                                                    <th>S_id</th>
                                                    <th >FirstName</th>
							                        <th>Lastename</th>
												    <th id="sid">ResultID</th>
												    <th>Enrollmentno</th>
                                                    <th>Subject name</th>
                                                    <th>Result</th>
                                                
											    </tr>
										    </thead>
										<tbody>
                                        <?php 
                                        if($count > 0) {  
                                            while($data = mysqli_fetch_assoc($result)){
                                        ?>
                                            <tr>
                                                <td><?php echo $data['S_id']; ?></td>
                                                <td><?php echo $data['S_fname']; ?></td>
                                                <td><?php echo $data['S_lname']; ?></td>
                                                <td><?php echo $data['R_id']; ?></td>
                                                
                                                <td><?php echo $data['E_enrollmentno']; ?></td>
                                                <td><?php echo $data['sub_name']; ?></td>
                                                <td><?php echo $data['R_score']; ?></td>
                                                <td>
                                                
                                            </tr>
                                           <?php 
                                        }
                                            }
                                           ?>   
                                        </tbody>
                                        

                                    </table>
                                    
                                   
                        </div>
                       
                           </div> 

                                    <p id="print">
                                         <input   class ="button button2"  type="button" value="Print Table" onclick="myApp.printTable()" />
                                    </p>
                            
                        
                            </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

        </div>

    <?php include "footer.php"; ?>
    </body>
                
    <script>
    var myApp = new function () {
        this.printTable = function () {
            var tab = document.getElementById('tab');

            var style = "<style>";
                style = style + "table {width: 100%;font: 17px Calibri;}";
                style = style + "table, th, td {border: solid 1px #DDD; border-collapse: collapse;";
                style = style + "padding: 2px 3px;text-align: center;}";
                style = style + "</style>";

            var win = window.open('', '', 'height=700,width=700');
            win.document.write(style);          //  add the style.
            win.document.write(tab.outerHTML);
            win.document.close();
            win.print();
        }
    }
</script>
    </html>
    <!-- end document-->
