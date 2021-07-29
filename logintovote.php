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
    <div><a href="adminlogin.php" class="right">Admin</a>
    <!-- <a class="right" href="logup">Logup</a> -->
    <a class="right" href="index">Home</a>
</div>
<center><h1 class="header">Vote</h1>


<style>
</style>
    <br><br><br><br>
        <form action="verifyvoter.php" method="POST">
        <input required type="text" name="usn" placeholder="USN"><br>
        <input requierd type="password" name="pass" placeholder="password"  pattern="sit123" title="Enter Correct Password" ><br><br>
     

        <input type="submit" value="Login">
        </form>

        <br>
      
     </div>
   </div>
</div>
</center>



</body>

</html>