<?php

include 'connect.php';

 $sql = "select * from candidates ORDER BY id;";  

 $result = mysqli_query($conn, $sql);

 $errorr=mysqli_error($conn);
 if(!$errorr)
 {
    $Nrow=mysqli_num_rows($result);
 }


 if ($errorr || $Nrow==0){
     echo $errorr;
     if(!($errorr) and $Nrow==0 ){
          echo 'No Participates'; 
          $conn.die();

        }
    }
else{
    $table='
    <table class="hover">
    <tr>';
        $i=0;
        while ($i!=$Nrow) 
        {

        $row=mysqli_fetch_assoc($result);
        $vot=$row['usn'];
        $depv=$vot[5].$vot[6];
        // echo $depv;
        if($dep==$depv){
        $table.="<form action='vote' method='POST'><td style='width:50px'>".$row['usn']."<input type='hidden' hidden name='usn' value='".$row['usn']."'></td>
        <td style='width:150px'>".$row['name']."<input type='hidden' name='name' value='".$row['name']."'></td>
        <td style='width:50px'><input type='submit' name='cand' value='".$row['id']."'></td></tr></form>";
        }
        $i=$i+1;  
        }
     }
$table.='</table>';

?>
<style>
.hover tr:hover{
    background-color:black;
    transform: scale(1.01);
}</style>




