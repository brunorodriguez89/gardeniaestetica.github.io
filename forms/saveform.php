<?php
    $mongo = new MongoClient();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = $mongo->pruebas1;
    $collection=$dbname->users

    if ($_POST)
    {
        $insert=array(
            'name' = $_POST['name'];
            'email' = $_POST['email'];
            'subject' = $_POST['subject'];
            'message' = $_POST['message'];  
        );

        if($collection->insert($insert)){
            echo "Guardado!"
        }else{
            echo "algo paso..."
        }
    else{
        echo "Sin datos para guardar."
    }

    //$conn = new mysqli($servername, $username, $password, $dbname);

    /*if($conn -> connect_error){
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
    $conn->close();*/
?>
