<?php
include 'connect.php';
session_start();
include 'verify.php';

if((!(isset($_SESSION['state'])))  || ($_SESSION['state']=='stop'))
{
    echo '<meta http-equiv="refresh" content="0; url=error.php">';
}
else{

$pass=$_POST['pass'];
$usn=$_POST['usn'];

// echo $usn,$pass;




$sql = "select usn,password,status from voters where usn='$usn'";  

$result = mysqli_query($conn, $sql);
$Nrow=mysqli_num_rows($result);
$errorr=mysqli_error($conn);

if ($errorr || $Nrow==0){
    echo $errorr;
    if(!($errorr) and $Nrow==0 ){
        echo '<h1><br>User not registered</h1><meta http-equiv="refresh" content="5; url=logintovote.php">';
    }
    else{
       
        echo $errorr;
         $conn.die();
    }
    }
else {
   
    $row=mysqli_fetch_assoc($result);
    $u=$row['usn'];
    $p=$row['password'];
    $s=$row['status'];
    if($s==1 ){

        echo '<h1><br>'.$usn.' Already Voted</h1><meta http-equiv="refresh" content="5; url=logintovote.php">';
    }
    else{
        $_SESSION['voter']=$usn;
        echo '<meta http-equiv="refresh" content="0; url=voter.php">';
    }
    
}
}

?>
<link rel="stylesheet" href="css.css">