<?php

if(isset($_POST['enviar'])){
    if(!empty($_POST[name]) && !empty($_POST[email]) && !empty($_POST[message])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $to = 'niggzell@gmail.com';
        $subject = 'Mensaje desde el formulario de contacto';
        $message = "Nombre: $name\nEmail: $email\nMensaje:\n$message";
        $headers = "From: $email\nReply-To: $email\n";
        $mail = @mail($to, $subject, $message, $headers);
        if($mail){
            echo 'Gracias por su mensaje. Nos pondremos en contacto con usted pronto.';

        }

    }
}

?>