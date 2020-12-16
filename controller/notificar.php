<?php



if (isset($_POST['enviar'])){
    if (!empty($_POST['nombre']) && !empty($_POST['email']) 
        &&!empty($_POST['asunto']) && !empty($_POST['mensaje'])){
        
        $name = $_POST["nombre"];
        $email = $_POST["email"];            
        $asunto = $_POST["asunto"];            
        $mensaje = $_POST["mensaje"];
        $contenido = "Nombre: " . $name . "\n" . "Correo: " . $email . "\n" . "mensaje : " . $mensaje;
        $destino = "carlos.sepulvedahe@gmail.com";

        
        $header = "From: noreply@example.com" . "\r\n";
        $header .= "Reply-to: noreply@example.com" ."\r\n";
        $header = "X-Mailer: PHP/" . phpversion(); 
        $mail = mail($destino,$asunto,$contenido,$header);


        if ($mail){
            echo "done";
        }
        

        

    }

}

?>