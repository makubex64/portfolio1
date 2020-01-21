<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

        # FIX: Replace this email with recipient email
        $mail_to = "jorgeluismakubex@gmail.com";
        
        # Sender Data
        $subject = trim($_POST["asunto"]);
        $email = filter_var(trim($_POST["correo"]), FILTER_SANITIZE_EMAIL);
        $message = trim($_POST["mensaje"]);
        
        if (empty($subject) OR empty($message)) {
            # Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "complete el formulario";
            exit;
        }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL) 
            OR !preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)){
            
            http_response_code(400);
            echo "agrega un email válido";
            exit;

        }
        
        # Mail Content
        $content = "Email: $email\n";
        $content .= "Asunto: $subject\n";
        $content .= "Message:\n$message\n";

        # email headers.
        $headers = "From: $email";

        # Send the email.
        $success = mail($mail_to, $subject, $content, $headers);
        if ($success) {
            # Set a 200 (okay) response code.
            http_response_code(200);
            echo "mensaje enviado";
        } else {
            # Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "problemas al enviar el mensaje, intenta mas tarde";
        }

        } else {
            # Not a POST request, set a 403 (forbidden) response code.
            http_response_code(403);
            echo "There was a problem with your submission, please try again.";
        }