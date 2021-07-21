<?php
session_start();
if(!(isset($_SESSION['admin'])))
{ echo '<meta http-equiv="refresh" content="0; url=index.php">';}
else{
    $_SESSION['state']='stop';
    $_SESSION['show']=2;
}
?>
<meta http-equiv="refresh" content="0 url=admin.php">