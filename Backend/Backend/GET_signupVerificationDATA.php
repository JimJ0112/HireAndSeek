<?php

require('../includes/databaseConnection.php');





function getDatas(mysqli $conn,$tablename){

    $queryString = "SELECT * FROM $tablename";
    $result = mysqli_query($conn,$queryString);
    $resultCheck = mysqli_num_rows($result);
    $data = array();
    $ID1Images = array();
    $ID2Images = array();
    $SnapShotImages = array();

    if($resultCheck > 0){
       
        while($row = mysqli_fetch_array($result)){
            
            
            $data[] = $row;

           // echo $data['idimage1directory'];

           /*
           foreach($row as $row){
            $image = $row['idimage1directory'];
            $type = pathinfo($image, PATHINFO_EXTENSION);
            $data = file_get_contents($image);
            $dataUri = 'data:image/' . $type . ';base64,' . base64_encode($data);
            echo $dataUri ;
            
           }

            */
            
            $datas = $row['idimage1directory'];
            echo file_get_contents($datas);
        }

         //echo json_encode($data);


        
    } else{
        echo" connection failed";
    }





}

getDatas($conn,'signupverification');



?>


