
  <?php
  if(isset($_POST['randcheck'])){
      echo '<meta http-equiv="refresh" content="0; url=index">';
  }
  else
  {
   $rand=rand();
   $_SESSION['rand']=$rand;
  ?>
  <form action="#" method="post">
 <input type="hidden" value="1259" name="randcheck" />
 <input type="submit"  hidden  name="submitbtn" value="submit" />
</form>


<?php

$v=$_POST['cand'];
$n=$_POST['name'];
$u=$_POST['usn'];

session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Completed</title>
    <link rel="stylesheet" href="css.css">
    <!-- <meta http-equiv="refresh" content="3; url=index"> -->
</head>
<body>

    <input hidden type="text" size="50" id="address" value ="<?php echo $v;?>" placeholder="<?php echo $v;?>"/>
    <button hidden  type="button" onload="getBalance();">Vote</button>

    <br />
    <br />
    <div>
        <table hidden>
            <tr>
                <td>Candidate</td>
                <td>Votes</td>
            </tr>
            <tr>
                <td id="Candidate"><?php echo $v;?></td>
                <td id="output"></td>
            </tr>
        </table>

    </div>
</body>
</html>



<!-- For PHP  -->
<?php 

include 'connect.php';
$sql = "select counts from candidates where id='$v' ;"; 

$result = mysqli_query($conn, $sql);
$errorr=mysqli_error($conn);
if ($errorr)
{
    echo 'Something wrong :',$errorr;
	$conn.die();
	}
    else{
        $num=mysqli_num_rows($result);
        // echo $num;
        
        $row=mysqli_fetch_assoc($result);

        // echo 'Counts = ',$row['counts'];
        $count=$row['counts'];
        $count=$count+1;
    

        // include 'connect.php';

        $sql = "delete from candidates where usn='$u';"; 
        $result = mysqli_query($conn, $sql);
        $errorr=mysqli_error($conn);

        $sql = "insert into candidates(usn,counts,id,name) values('$u','$count','$v','$n');";  
        // echo $count;
        $result = mysqli_query($conn, $sql);
        $errorr=mysqli_error($conn);
        $errorr=mysqli_error($conn);
        if ($errorr){
	        $_SESSION['mssg']= '<h1>Error while Voting please vote again by re-logging in</h1>'.$errorr;
            echo '<meta http-equiv="refresh" content="0; url=Thankyou.php">';
	    $conn.die();
	    }
         else{
             $temp='';
             $temp.='<br><h1>Thank You For Voting</h1><br>You Voted for ';
             $temp.=$v.' ';
             $temp.=$u.' ';
             $temp.=$n.' ';
           
     $_SESSION['mssg']=$temp;       
     $refresh=$v.'vote.js';
    

# Change to 0 Sec Here

// echo '<meta http-equiv="refresh" content="100; url=js/'.$refresh.'">';


?>

<!-- For Block Chain  -->
</center>

<script>
var x=<?php echo $v;?>;

</script>
    <meta charset="UTF-8">
    <script src="https://cdn.jsdelivr.net/npm/web3@latest/dist/web3.min.js"></script>
    <script type="text/javascript">
        window.addEventListener('load', function() 
        {
            if (typeof web3 !== 'undefined') {
                console.log('Web3 Detected! ' + web3.currentProvider.constructor.name)
                if(web3.currentProvider.constructor.name !='s'){
                    web3 = new Web3(new Web3.providers.HttpProvider('http://localhost:8545'));
                    console.log('Web3 Detected! ' + web3.currentProvider.constructor.name)
                }
               else{
                    window.web3 = new Web3(web3.currentProvider);
               }
            } else {
                console.log('No Web3 Detected... using HTTP Provider')
                web3 = new Web3(new Web3.providers.HttpProvider('http://localhost:8545'));
          
                if (typeof web3 !== 'undefined') {
                    console.log('Web3 Detected! ' + web3.currentProvider.constructor.name)
                }
            }

            var abi = [
	{
		"constant": false,
		"inputs": [
			{
				"internalType": "uint256",
				"name": "_cand",
				"type": "uint256"
			}
		],
		"name": "vote",
		"outputs": [],
		"payable": false,
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"constant": false,
		"inputs": [
			{
				"internalType": "uint256",
				"name": "_cand",
				"type": "uint256"
			}
		],
		"name": "vote_reset",
		"outputs": [],
		"payable": false,
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"constant": false,
		"inputs": [
			{
				"internalType": "uint256",
				"name": "_i",
				"type": "uint256"
			}
		],
		"name": "winner",
		"outputs": [],
		"payable": false,
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [
			{
				"internalType": "uint256",
				"name": "",
				"type": "uint256"
			}
		],
		"name": "votelist",
		"outputs": [
			{
				"internalType": "uint256",
				"name": "",
				"type": "uint256"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [],
		"name": "win",
		"outputs": [
			{
				"internalType": "uint256",
				"name": "",
				"type": "uint256"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [],
		"name": "win_votes",
		"outputs": [
			{
				"internalType": "uint256",
				"name": "",
				"type": "uint256"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	}
];
        var add = '0xD6f237cC1E584bF2842ac89199f25dE3AC1Fea93';//contract address
        l = console.log;

        let c = new web3.eth.Contract(abi, add);

            // let address = document.getElementById("address").value;
       
            let address =parseInt(<?php echo $v ?>);
l(address);
            c.methods.vote(address).send({
                from: "0xeDCD10B48e637D3077B69b44F3fE48706220cbAA"
            }).then(result => {});;


            c.methods.votelist(address).call()
                .then(result => {
                    return result;
                }).then(result => {
                    document.getElementById("output").innerHTML = result;
                });;
        }       
        );
    
    </script>
</head>
<?php //echo $v;?>



<?php 

echo '<meta http-equiv="refresh" content="1; url=Thankyou">';
        }
    }
} ?>