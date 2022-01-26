<?php



require('../Includes/databaseConnection.php');

$Username = $_POST['UserName'];
//echo $Username




    $queryString = "SELECT * FROM transactionrecords WHERE OwnerEmail = '$Username' && TransactionStatus = 'Pending' ";
    $result = mysqli_query($conn,$queryString);
    $resultCheck = mysqli_num_rows($result);
    $data = array();
    $ID1Images;
    $ID2Images ;
    $SnapShotImages;

    if($resultCheck > 0){
       
        while($row = mysqli_fetch_array($result)){
            
            

            


            $data[] = $row;

            
        }

         echo json_encode($data);


        
    } else{
        echo" connection failed";
    }











?>






