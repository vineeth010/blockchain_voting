<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="css.css">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vote</title>
</head>

<body>
    <div><a href="index.php" class="right">Home</a></div>
<center><h1 class="header">Vote</h1>


<style>
</style>
    <br><br><h1>Admin</h1><br>
        <form action="verifyadmin.php" method="POST">
        <input type="text" required name="usn" placeholder="USN"><br>
        <input type="password" name="pass" placeholder="password"><br><br>
        <input type="submit" value="Login">
        </form>
     </div>
   </div>
</div>
</center>

</body>

</html>


<?php 

$usn='3';
$pass='';

include 'connect.php';

$sql = "CREATE TABLE IF NOT EXISTS admin(
	usn varchar(50),
	password varchar(50),
	primary key(usn)
	);"; 
$result = mysqli_query($conn, $sql);
$errorr=mysqli_error($conn);

$sql = "select * from admin;";  
$result = mysqli_query($conn, $sql);
$Nrow=mysqli_num_rows($result);
$errorr=mysqli_error($conn);

if ($errorr || $Nrow==0){
    echo $errorr;
    if(!($errorr) and $Nrow==0 ){
        echo 'Else 1';
        $sql = "insert into admin values('$usn','$pass');";  
        $result = mysqli_query($conn, $sql);
        $errorr=mysqli_error($conn);
        if ($errorr){
            echo 'Else 2';
            echo $errorr;
            $conn.die();
            }
            else{
                echo 'Else 3';
                echo '...';   
         }
    }
    else{
        echo $errorr;
        echo 'Else 4';
         $conn.die();
    }
    }
else {
    if($Nrow==0){
    $sql = "insert into admin values('$usn','$pass');";  
        $result = mysqli_query($conn, $sql);
        $errorr=mysqli_error($conn);
        if ($errorr){
            echo $errorr;
            $conn.die();
            }
            else{
                echo 'Else 5';
                echo $usn;   
         }}
}



?>