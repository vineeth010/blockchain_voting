<?php
include 'connect.php';
session_start();

if(!(isset($_SESSION['admin'])))
{ echo '<meta http-equiv="refresh" content="0; url=index.php">';}
else{
    $sql = "DROP TABLE sta;";  
    
    $result = mysqli_query($conn, $sql);
    
    $errorr=mysqli_error($conn);
    if($errorr)
    {
        echo 'erorr at Initiating..';
        echo $errorr;
    }

    $sql = "CREATE TABLE IF NOT EXISTS sta(
        state_var int ,
        show_var int
        );";  
    
    $result = mysqli_query($conn, $sql);
    
    $errorr=mysqli_error($conn);
    if($errorr)
    {
            echo 'erorr at Initiating..';
        echo $errorr;
    }
     $sql = "insert into sta value(1,1);";  
     $result = mysqli_query($conn, $sql);
     $errorr=mysqli_error($conn);
     
     if($errorr){
         
        echo 'eror at starting....';
         echo $errorr;
    
     }else{

    $_SESSION['state']='start';
    $_SESSION['show']=1;
     }
}
?>
<meta http-equiv="refresh" content="0 url=admin.php">