<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clear</title>
</head>
<body>
    
</body>
</html>
<center>
<?php
include 'connect.php';
$sql = "drop table candidates;";  


$result = mysqli_query($conn, $sql);
$errorr=mysqli_error($conn);

if ($errorr){
    echo $errorr;
        echo '<h1><br>Something Went Wrong</h1> <meta http-equiv="refresh" content="2; url=admin.php">';
    }

$sql = "drop table voters;";  

$result = mysqli_query($conn, $sql);
$errorr=mysqli_error($conn);

if ($errorr){
    echo $errorr;
        echo '<h1><br>Something Went Wrong</h1> <meta http-equiv="refresh" content="2; url=admin.php">';
    }
    else{
        $sql = "CREATE TABLE IF NOT EXISTS candidates(
            id int NOT NULL,
            name varchar(50),
            usn varchar(50),
            counts int default 0,
            status int  DEFAULT 0,
            primary key(id)
            );"; 
        
        
        $result = mysqli_query($conn, $sql);
        $errorr=mysqli_error($conn);
        if ($errorr){
            echo $errorr;
            $conn.die();
            }
            else{
                echo '';   
                $sql = "CREATE TABLE IF NOT EXISTS voters(
                    usn varchar(50) NOT NULL,
                    status int  DEFAULT 0,
                    password varchar(50) DEFAULT 'sit123',
                    primary key(usn)
                    );"; 
                
                
                $result = mysqli_query($conn, $sql);
                $errorr=mysqli_error($conn);
                if ($errorr){
                    echo $errorr;
                    $conn.die();
                    }

					
					session_start();
					unset($_SESSION['result']);
					$_SESSION['result']=0;

           
                           

?>

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
          
            } else {
                console.log('No Web3 Detected... using HTTP Provider')
                web3 = new Web3(new Web3.providers.HttpProvider('http://localhost:8545'));
          
                if (typeof web3 != 'undefined') {
                    console.log('Web3 Detected! ' + web3.currentProvider.constructor.name)
                }
            }

            var abi =[
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
        var add = '0xE37D1eB8A100F11166C5a9beD974d9444Dc42DA0';
        l = console.log;

        let c = new web3.eth.Contract(abi, add);     

		for (let i = 0; i < 10; i++) {
			c.methods.vote_reset(i).send({
					from: '0x200669e927C99876f2Ae108D961DB773c5955c98'
				}).then(result => {});;
			}

		

	
        }       
        );
		</script><?php
    
        echo '<h1><br>Cleared</h1> <meta http-equiv="refresh" content="1; url=admin.php">';
         }

    }?>
	
</center>
<link rel="stylesheet" href="css.css">
