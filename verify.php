<?php



$sql = "CREATE TABLE IF NOT EXISTS sta(
    state_var int DEFAULT 0,
    show_var int
	);";  

$result = mysqli_query($conn, $sql);

$errorr=mysqli_error($conn);
if($errorr)
{
        echo 'eror at create';
    echo $errorr;
}
 $sql = "select * from sta;";  
 $result = mysqli_query($conn, $sql);
 $errorr=mysqli_error($conn);
 
 if($errorr){
     
    echo 'eror at fecth';
     echo $errorr;

 }
 else{           
                            $row=mysqli_fetch_assoc($result);

                            $st=$row['state_var'];
                            $sw=$row['show_var'];
                           // echo $st,$sw;
                            // echo 'at';
                            if($st==1){
                                $_SESSION['state']='start';
                                
                                $_SESSION['show']=1;
                                // echo 'started';
                            }
                            if($st==0){

                                $_SESSION['state']='stop';
                                if($sw==2){
                                    
                                $_SESSION['show']=2;
                                }
                                else{
                                    $_SESSION['show']=0;
                                }                                
                                // echo 'stoped';
                            }
                         }
                   
?>