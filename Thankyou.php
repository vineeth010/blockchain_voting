<center>
<input type='hidden' name='formid' value='<?php echo time(); ?>'>
<?php
session_start();

include 'connect.php';
            $voted=$_SESSION['voter'];
            // echo $_SESSION['state'];
            $sql = "delete from voters where usn='$voted';";  
            
            $result = mysqli_query($conn, $sql);
            $errorr=mysqli_error($conn);
            
            if ($errorr){
                echo $errorr;
                    echo '<h1><br>Something Went Wrong</h1>';
                }
           else{ 

            $sql = "insert into voters(usn,password,status) values('$voted','sit123',1);";  
            
            $result = mysqli_query($conn, $sql);
            $errorr=mysqli_error($conn);
            if ($errorr){
                echo $errorr;
                    echo '<h1><br>Something Went Wrong</h1>';
                }
               
            $conn->close();
            $_SESSION['voter']='';
            if($_SESSION['mssg']=='')
            {
                echo '<meta http-equiv="refresh" content="0; url=index.php">';
            }
            else{
                
            echo $_SESSION['mssg'];
            echo '<h1></h1><br>  Data successfully added to BlockChain   <meta http-equiv="refresh" content="5; url=index.php">';   
            }

            $_SESSION['mssg']='';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="css.css">
<body>
    
</body>

</html></center>