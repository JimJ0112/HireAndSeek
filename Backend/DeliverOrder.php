<?php



require('../Includes/databaseConnection.php');

$TransactionID = $_POST['TransactionID'];
//echo $TransactionID;



if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

   echo $queryString = "UPDATE transactionrecords SET TransactionStatus = 'Delivered' WHERE transactionID = $TransactionID ";
    $result = mysqli_query($conn,$queryString);




/*
    $resultCheck = mysqli_num_rows($result);
    $data = array();
  

    if($resultCheck > 0){
       
        while($row = mysqli_fetch_array($result)){
            
            

            


            $data[] = $row;

            
        }

         echo json_encode($data);


        
    } else{
        echo" connection failed";
    }


*/








?>






