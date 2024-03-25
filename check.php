<?php
    //print_r($_POST);
    $email = $_POST['email'];
    $message = $_POST['message'];

    $error = '';
    //trim удаляет лишные пробелы
    if(trim($email) == '')   
        $error = "Введите email";
    else if(trim($message) == '')   
        $error = "Введите message";

    else if(strlen($message) < 10)   
        $error = "Собщение должно быть более 10 символов";

    if($error != '') {
        echo $error;
        exit;
    }

    $subject = "Письмо от сайта"; 
    $headers .= "From: $email\r\nReply-To: $email\r\nContent-type: text/html;charset=utf-8\r\n"; 


    mail('tikoapotrt@mail.ru', $subject, $message, $headers);

    header('Location: /new_site/index.php')
?>