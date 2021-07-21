<?php
$pass=$_POST['pass'];
$usn=$_POST['usn'];
session_start();
// echo $usn,$pass;


include 'connect.php';

$sql = "select * from admin where usn='$usn' and password='$pass';";  

$result = mysqli_query($conn, $sql);
$Nrow=mysqli_num_rows($result);
$errorr=mysqli_error($conn);

if ($errorr || $Nrow==0){
    echo $errorr;
    if(!($errorr) && $Nrow==0 ){
        echo '<h1><br>Incorrect admin credentials</h1><meta http-equiv="refresh" content="2; url=adminlogin.php">';
    }
    else{
        echo $errorr;
         $conn.die();
    }
    }
else {
    $_SESSION['admin']=$usn;
    echo '<meta http-equiv="refresh" content="0; url=admin.php">';;
}


?>
<link rel="stylesheet" href="css.css">