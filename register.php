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
// $name=$_POST['name'];
$name='';
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
$sql = "CREATE TABLE IF NOT EXISTS voters(
	usn varchar(50) NOT NULL,
	status int  DEFAULT 0,
	password varchar(50) DEFAULT 'sit123',
	primary key(usn)
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

$sql = "insert into voters(usn) values('$usn');";  
$result = mysqli_query($conn, $sql);
$errorr=mysqli_error($conn);
$errorr=mysqli_error($conn);
if ($errorr){
	echo '<h1> Student Already Exists</h1><br><meta http-equiv="refresh" content="2 url=logup.php">';
    
	$conn.die();
	}
    else{
        echo '<h1>Successfully Added</h1><br>     <meta http-equiv="refresh" content="2; url=logup.php"> ';   
 }
?>
    <h2><?php echo $mssg;?></h2>

</body>
</html>
