<?php
session_start();
if(!(isset($_SESSION['admin'])))
{ echo '<meta http-equiv="refresh" content="0; url=index.php">';}
else{
    $_SESSION['state']='start';
    $_SESSION['show']=1;
}
?>
<meta http-equiv="refresh" content="0 url=admin.php">