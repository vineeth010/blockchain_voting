<?php
session_start();
if(!(isset($_SESSION['admin'])))
{ echo '<meta http-equiv="refresh" content="0; url=index.php">';}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>

<link rel="stylesheet" href="css.css">
<body>
<a href="logoutadmin.php" class="right">Logout</a>
<center><h1 class="header">Vote</h1>

<table class="table">

<tr><td><a style="margin:10px;" href="logup">Add Voter</a><br></td></tr>
<tr><td><a style="margin:10px;" href="cand">Add Candidate</a><br></td></tr>
<tr><td>
<a style="margin:10px;" href="start">Start Voting</a><br></td></tr>
<tr><td>
<a style="margin:10px;" href="stop">End Voting</a><br></td></tr>
<tr><td><a  style="margin:10px;" href="resultr.php">Review Result</a></td></tr>
<tr><td>
<a style="margin:10px;" href="deletecand">Reset Candidate List</a></td></tr>


<?php 
// echo $_SESSION['show'];
       include 'result.php'; 
       ?>



<p id="demo"></p>

<script>
function myFunction() {
    <?php 
    // if($_SESSION['state']=='stop'){
    // if(isset($_POST['review']))
    // {
    //     $_SESSION['result']=$table;
    // }
    // else{
    //    unset($table);
    // }}
     ?>
 
}
</script>
</table>

<br><br>
<?php
// echo $_SESSION['state'];
if(isset($_SESSION['state']))
{if($_SESSION['state']=='start')
   { 
       echo '<h1 style="color:green"> Voting Started</h1>';
    }

}


?>



</body>
</html>