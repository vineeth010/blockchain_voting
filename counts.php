<?php


include 'connect.php';

$sql = "SELECT COUNT(*)
FROM candidates;"; 


$result = mysqli_query($conn, $sql);
$errorr=mysqli_error($conn);
$N=mysqli_num_rows($result);
if ($errorr){
	echo $errorr;
	$conn.die();
	}
    else{
        $row=mysqli_fetch_assoc($result);
        echo 'Counts is '.$row['COUNT(*)'].'<br>';   
 }

 ?>