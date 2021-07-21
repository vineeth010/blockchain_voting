<?php
session_start();
if((!(isset($_SESSION['state'])))  || ($_SESSION['state']=='stop'))
{
    echo '<meta http-equiv="refresh" content="0; url=index.php">';
}
else{

$pass=$_POST['pass'];
$usn=$_POST['usn'];

// echo $usn,$pass;
$_SESSION['voter']=$usn;

include 'connect.php';

$sql = "select * from voters where usn='$usn' and password='$pass' and status=0;";  

$result = mysqli_query($conn, $sql);
$Nrow=mysqli_num_rows($result);
$errorr=mysqli_error($conn);

if ($errorr || $Nrow==0){
    echo $errorr;
    if(!($errorr) and $Nrow==0 ){
        echo '<h1><br>Something Went Wrong</h1><meta http-equiv="refresh" content="10; url=logintovote.php">';
    }
    else{
        echo $errorr;
         $conn.die();
    }
    }
else {
    echo '<meta http-equiv="refresh" content="0; url=voter.php">';;
}
}

?>
<link rel="stylesheet" href="css.css">