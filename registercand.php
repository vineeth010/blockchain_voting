<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registering</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>


<?php 
$mssg='';
$name=$_POST['name'];
// $name='';
$usn=$_POST['usn'];
// $usn=$_POST['id'];
// $pass=$_POST['pass'];
// $passre=$_POST['passre'];
$staus='';
// if($pass!=$passre){
// $mssg='Password Miss Match!!';
// }
// else{
//     $mssg='';
// }

include 'connect.php';


// $sql = "CREATE TABLE IF NOT EXISTS voters(
// 	name varchar(50) ,
// 	usn varchar(50),
// 	status int  DEFAULT 0,
// 	password varchar(50),
// 	primary key(usn)
// 	);"; 
$sql = "CREATE TABLE IF NOT EXISTS candidates(
    id int NOT NULL,
    name varchar(50),
	usn varchar(50),
    counts int default 0,
	status int  DEFAULT 0,
	primary key(id)
	);"; 


$result = mysqli_query($conn, $sql);
$errorr=mysqli_error($conn);
if ($errorr){
	echo $errorr;
	$conn.die();
	}
    else{
        echo '';   
 }

 $sql = "select * from candidates where usn = '$usn';";  

 $result = mysqli_query($conn, $sql);
 $Nrow=mysqli_num_rows($result);
 $errorr=mysqli_error($conn);
 
 if ($errorr || $Nrow==0){
     echo $errorr;
     if(!($errorr) and $Nrow==0 ){

        $sql = "select * from candidates;";  

        $result = mysqli_query($conn, $sql);
        $Nrow=mysqli_num_rows($result);
        $errorr=mysqli_error($conn);
        
        if (!$errorr){
         $id=$Nrow+1;

        $sql = "insert into candidates(usn,name,id) values('$usn','$name','$id');";  
        $result = mysqli_query($conn, $sql);
        $errorr=mysqli_error($conn);

        if ($errorr){
            echo '<h1> Student Already Exists</h1><br><meta http-equiv="refresh" content="2 url=cand.php">';
            echo $errorr;
            $conn.die();
            }
        else{
            echo '<h1>Successfully Addedd</h1><br>     <meta http-equiv="refresh" content="2; url=cand.php"> ';   
             }
         }
     else{
         echo $errorr;
         echo '<br>     <meta http-equiv="refresh" content="2; url=cand.php"> ';   
          $conn.die();
     }
     }
 else {
     echo '<h1> Student Already Exists</h1><br><meta http-equiv="refresh" content="2 url=cand.php">';;
 }
 }

?>
    <h2><?php echo $mssg;?></h2>

</body>
</html>
