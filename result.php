<?php

include 'connect.php';

 $sql = "select * from candidates ORDER BY counts DESC;";  

 $result = mysqli_query($conn, $sql);

 $errorr=mysqli_error($conn);
 if(!$errorr)
 {
    //  echo 'Empty Candidates';
    $Nrow=mysqli_num_rows($result);
 }

 if ($errorr || $Nrow==0){
     echo $errorr;
     
     if(($errorr)){
         echo $errorr;
          echo 'Some thing is wrong'; 
          $conn.die();

        }
        else if($Nrow==0 ){
            $conn.die();
        }
    }
else{
    $table='<tr>';
        $i=0;
        while ($i!=$Nrow) 
        {
            $row=mysqli_fetch_assoc($result);
            $vot=$row['usn'];
            if(strlen($vot)>6){
        
                $depv=$vot[5].$vot[6];
        }
            $table.="
            <td style='width:50px'>".$row['id']."</td>
            <td style='width:150px'>".$row['usn']."</td>     
            <td style='width:150px'>".$row['name']."</td>
            <td style='width:50px'>".$row['counts']."</td>
            <td style='width:50px'>".$depv."</td></tr>";
        $i=$i+1;  
        }
     }


?>
