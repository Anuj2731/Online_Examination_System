<?php 
// Initialize the session
session_start();

include  '../connection.php';
$id=$_SESSION['user_id'];
    

    if(isset($_SESSION['user_id'])){

     $sql="INSERT INTO student_login_master(S_id,Li_date_time,Lo_date_time) VALUES ('$id','NULL',now())";
    
    $row=mysqli_query($con,$sql);

    // session_destroy();

    }
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();

// // If it's desired to kill the session, also delete the session cookie.
// // Note: This will destroy the session, and not just the session data!
// if (ini_get("session.use_cookies")) {
//     $params = session_get_cookie_params();
//     setcookie(session_name(), '', time() - 42000,
//         $params["path"], $params["domain"],
//         $params["secure"], $params["httponly"]
//     );
// }
 
// Redirect to login page
header("location: ../signin.php");
exit;
?>