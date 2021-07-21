<center><?php
session_start();
if(!(isset($_SESSION['admin']) ))
{ 
    echo '<meta http-equiv="refresh" content="0; url=admin.php">';
}
else if ($_SESSION['show']==2){
include 'result.php';
$_SESSION['result']=$table;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<h1>
Result Board</h1><br>
<table >
<th style='width:50px'>Id</th>
<th style='width:150px'>USN</th>
<th style='width:150px'>Name</th>
<th style='width:50px'>votes</th>
<th style='width:50px'>Dep</th>
<table class="result">
<?php 
if($_SESSION['show']==2)
{
echo $_SESSION['result'];
}

?>
</table>
</table>
<br><br>

<button onclick="window.location.href='admin'">Back</button>
</body>
</html>
<link rel="stylesheet" href="css.css"></center>

<?php
}
else{
    echo '<meta http-equiv="refresh" content="0; url=admin.php">';
}
?>