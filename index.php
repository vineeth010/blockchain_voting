<?php 
include 'connect.php';
include 'verify.php';
session_start();

?>
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
  <a href="adminlogin.php" class="right">Admin</a>
<center><h1 class="header">Vote</h1>
<br><br><br><br>

        <button style="width:350px;"><a href="logintovote" >Login to Vote</a></button>
        <!-- <button><a href="logup">Logup</a></button> -->
     </div>
   </div>
</div>





<?php 
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS vote";
if ($conn->query($sql) === TRUE) {
  echo '<hr style="  border: 1px solid green;width: 20%;">';
} else {
  echo '<hr style="  border: 1px solid red;width: 20%;">' . $conn->error;
}

$conn->close();


?>
<?php


if(!(isset($_SESSION['show']))){
$_SESSION['show']=0;}

$_SESSION['dummy']='<h2 style="color:green">Voting Started</h2>';

if($sw==1)
{
echo $_SESSION['dummy'];
}

?>
<h1>Result Board</h1><br>
<table >
<th style='width:50px'>Id</th>
<th style='width:150px'>USN</th>
<th style='width:150px'>Name</th>
<th style='width:50px'>votes</th>
<th style='width:50px'>Dep</th>
<table class="result">
<?php 
if($sw==2)
{
include 'result.php';
$_SESSION['result']=$table;
  if($_SESSION['result'])
  if($_SESSION['result']!='0' || 0)
  {
echo $_SESSION['result'];
}
}
?>
</table>
</table>
</center>

</body>

</html>
<style>
td,
tr,th {
    border: rgb(179, 172, 172) solid 2px;
}
.result tr:first-of-type{
  color : rgb(205, 72, 152)
}
table {
    width: 80%;
}</style>