<?php
    $to = 'marcogarcia.gon@gmail.com';
    $name = $_POST["name"];
    $email= $_POST["email"];
    $phone= $_POST["phone"];
    


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr>
            <td>'.$name.'</td>
        </tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>phone: '.$phone.'</td></tr>
        
    </table>';

    if (@mail($to, $email, $message, $headers))
    {
        echo 'Mensaje enviado.';
    }else{
        echo 'Error';
    }

?>
