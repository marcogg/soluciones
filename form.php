<?php

if (isset($_POST['submit'])) {
    $name = $_POST["name"];
    $email= $_POST["email"];
    $phone= $_POST["phone"];

    $errorEmpty=false;
    $errorEmail=false;

if (empty($name) || empty($email)){
    echo "<span class='form-error'>Por favor, llene todos los campos</span>";
    $errorEmpty=true;
}

elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<span class='form-error'>Ingrese un email válido</span>";
    $errorEmail=true;
}
else{
    echo "<span class='form-success'>Envío correcto</span>";
}
}
else{
    echo "<span class='form-error'>Ha ocurrido un error</span>";
}
    $to = 'marcogarcia.gon@gmail.com';
    $name = $_POST["name"];
    $email= $_POST["email"];
    $phone= $_POST["phone"];
    
/*

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
*/
?>

<script type="text/javascript">
$("#mail-name", "#mail-email", "#mail-phone").removeClass("input-error");

    var errorEmpty="<?php echo $errorEmpty; ?>";
    var errorEmail="<?php echo $errorEmail; ?>";

    if (errorEmpty == true){
        $("#mail-name", "#mail-email", "#mail-phone").addClass("input-error");
    }
    if (errorEmail ==true){
         $("#mail-email").addClass("input-error");
    }
    if (errorEmpty==false &&errorMail ==false){
        $("#mail-name", "#mail-email", "#mail-phone").val("");
    }
</script>
