<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "steph";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn -> connect_error){
        die("connection failed: ". $conn-> connect_error);
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


    $sql = "INSERT INTO mensajes (nombreMensaje, emailMensaje, asuntoMensaje, textoMensaje) 
            VALUES ('". $name ."', '". $email ."', '". $subject . "', '" . $message . "')";

    if($conn->query($sql)===TRUE)    {
        echo "!Mensaje Enviado! Pronto nos pondremos en contacto.";
    }else{
        echo "Error: " . $sql. "<br>" . $conn-> error;
    }
    $conn->close();
?>
