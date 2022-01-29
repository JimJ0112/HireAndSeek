<?php

require('Includes/databaseConnection.php');


            $OwnerEmail=$_POST['OwnerEmail'];
            $ClientEmail=$_POST['ClientEmail'];
            $ServiceID =$_POST['ServiceID'];  
            $Category =$_POST['Category'];  
            $ServiceTitle =$_POST['ServiceTitleForm'];
            $clientNotes =$_POST['clientNotes'];
            $startDate =$_POST['startDate']; 
            $finishDate =$_POST['finishDate'];
            $availedPlan =$_POST['availedPlan'];
            $Price       =$_POST['Price'];
            $AgreementContract =$_POST['AgreedToContract'];
            $FileMailing = $_POST['MailingAddress'];
            $GCASH = $_POST['GcashNumber'];
            //$Agree   =$_POST['Agree '];
           // $Decline =$_POST['Decline'];




         $queryString = "INSERT INTO transactionrecords (transactionID,OwnerEmail,ClientEmail,ServiceID,ServiceTitle,Category,clientNotes,transactionstartDate,transactionFinishedDate,availedPlan,Price,TransactionStatus,AgreementContract,FileMailingAddress,Gcash) VALUES (0,'$OwnerEmail','$ClientEmail','$ServiceID','$ServiceTitle','$Category','$clientNotes','$startDate','$finishDate','$availedPlan','$Price','Pending','$AgreementContract','$FileMailing','$GCASH');";
         echo $queryString;
         $result = mysqli_query($conn,$queryString);


         header('location:../AvailService.php?data=Success');
         

?>