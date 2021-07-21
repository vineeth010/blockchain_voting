<?php
session_start();
if(!(isset($_SESSION['admin'])))
{ echo '<meta http-equiv="refresh" content="0; url=index.php">';}
//  echo $_SESSION['admin'];
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

    <div>
    <a href="logoutadmin.php" class="right">Logout</a>
 </div>
<center><h1 class="header">Vote</h1>


<style>
</style>
<br><br><br><br>
        <form action="registercand.php" method="POST">
        <input type="text" required name="usn" placeholder="USN"><br>
        <input type="text" required name="name" placeholder="Name"><br>
        <!-- <input type="password" name="pass" placeholder="Re-password"><br> -->
        <!-- <input type="password" name="pass" placeholder="password"><br><br> -->
        <input type="submit" value="Register">     <button><a href="admin.php">Back</a></button>
        </form>
   
     </div>
   </div>
</div>
</center>

</body>

</html>