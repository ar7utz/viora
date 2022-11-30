<?php
    // Importa as classes do PHPMailer como globais
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    // Pega os arquivos da biblioteca
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    function enviarEmail($destinatarios, $assunto, $mensagem)
    {
        // Criar uma instancia da classe PHPMailer
        $email = new PHPMailer;

        // Configurações do Servidor
        $email->isSMTP(); // Define que o e-mail vai ser do tipo SMTP
        $email->Host = "smtp.office365.com"; // Define o Host para envio de email
        $email->SMTPAuth = true; // Habilita a autenticacao com SMTP

        // Usuarios do e-mail
        $email->Username =  'envioviorapp@hotmail.com';
        $email->Password = 'vioraapp2022';
        $email->SMTPSecure = 'tls';
        $email->Port = 587;

        // Informaçõs de quem vai enviar o e-mail
        $email->setFrom('envioviorapp@hotmail.com', 'Viora Website');
        $email->addReplyTo('envioviorapp@hotmail.com', 'Viora Website');

        // Informações de quem vai receber o e=mail

        foreach ($destinatarios as $destinatario) {
            $email->addAddress($destinatario['email'], $destinatario['nome']);
        }

        // Dados para corpo do email
        $email->isHTML(true); // Define que vamos enviar um HTML como email

        $email->Subject = $assunto; // Aqui definimos o assunto do email

        // Corpo do e-mail
        $email->Body = $mensagem;

        // Envia o email
        if ($email->send()) {
            return true;
        } else {
            return false;
        }
    }