<?php

require('../includes/databaseConnection.php');





function getDatas(mysqli $conn,$tablename){

    $queryString = "SELECT * FROM $tablename WHERE AccountType = 'Freelancer'";
    $result = mysqli_query($conn,$queryString);
    $resultCheck = mysqli_num_rows($result);
    $data = array();
    $ID1Images;
    $ID2Images ;
    $SnapShotImages;

    if($resultCheck > 0){
       
        while($row = mysqli_fetch_array($result)){
            
            
            //$data[] = $row;



            
           
            $datas = file_get_contents($row['idimage1directory']);
            $ID1Images = 'data:image/image/png;base64,'.base64_encode($datas);
            
            $datasID2 = file_get_contents($row['idimage2directory']);
            $ID2Images = 'data:image/image/png;base64,'.base64_encode($datasID2);

            $datasSnapshot = file_get_contents($row['snapshotdirectory']);
            $SnapShotImages ='data:image/image/png;base64,'.base64_encode($datasSnapshot);
                //echo $row['snapshotdirectory'];

            $row['idimage1directory'] = $ID1Images;
            $row['idimage2directory'] = $ID2Images;
            $row['snapshotdirectory'] = $SnapShotImages;
            


            $data[] = $row;

            
        }

         echo json_encode($data);


        
    } else{
        echo" connection failed";
    }





}

getDatas($conn,'signupverification');



?>


