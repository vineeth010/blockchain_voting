<?php
session_start();
if(!(isset($_SESSION['voter'])) || ($_SESSION['state']=='stop'))
{
    echo '<meta http-equiv="refresh" content="0; url=index.php">';
}
else{
    sleep(3);

?>

<?php

$voter=$_SESSION['voter'];
if(strlen($voter)>=1){
$dep=$voter[5].$voter[6];


// echo $dep;
include 'participatelist.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>

<link rel="stylesheet" href="vcss.css">
<body>
<a href="logoutuser.php" class="right">Logout</a>
<center><h1 class="header">Vote</h1>


<?php 
echo $table; 
}
else{
    echo '<meta http-equiv="refresh" content="0; url=index.php">';
}
}
?>







</body>
</html>