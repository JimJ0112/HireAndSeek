<?php



    $email = $_POST['Email'];
    $code = $_POST['code'];
    mail($email,'Confirmation','Hello, to confirm the validity of the email address you have submitted to hire and seek, please enter this code to the registration page: '.$code,'From: hireandseekdemo@gmail.com');
    echo"email sent";



?>