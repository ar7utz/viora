<?php
$nome = utf8_decode($_POST['nome']);
$email = utf8_decode($_POST['email']);
$mensagem = utf8_decode($_POST['mensagem']);

require 'PHPMailer/PHPMailerAutoload.php';

$email = new PHPMailer;
$email->isSMTP();

//Configuração de servidor de e-mail
$email->Host = "smtp.gmail.com";
$email->Port = "587";
$email->SMTPSecure = "tls";
$email->SMTPAuth = "true";
$email->Username = "agendaviora@gmail.com";
$email->Password = "AgendaViora2022";

//Configuração da Mensagem
$email->setFrom($email->username,"Seu Nome"); //remetende
$email->addAddress(''); //destinatario
$email->Subject = "Agenda Viora"; //Assunto do email

$conteudo_email = "
Você recebeu uma mensagem de $nome, ($email)
<br><br>

Mensagem <br>
$mensagem
";

$email->IsHTML(true);
$email->Body = $conteudo_email;

if ( $email->send()){

    echo "E-mail enviado com Sucesso!";

} else {

    echo "Falha ao enviar o e-mail: " . $email->ErrorInfo;
} ?>








<?php

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$email = new PHPMailer();
$email->isSMTP();
$email->Host = "smtp.gmail.com";
$email->SMTPAuth = "true";
$email->SMTPSecure = "tls";
$email->Port ="587";
$email->Username = "agendaviora@gmail.com";
$email->Password = "AgendaViora2022";
$email->Subject = "Email de teste from localhost";
$email->setFrom("a28032003@hotmail.com");
$email->addStringAttachment(file_get_contents("https://quickchart.io/qr?text=Here%27s%20my%20text"), "qr.jpg");
$email->Body = 'Este e um email de teste pelo localhost ';
$email->addAddress("xxxx@gmail.com");
if($email->Send()){
    echo"Email envidado";
}else{
    echo "nao enviado";
}
$email->smtpClose();