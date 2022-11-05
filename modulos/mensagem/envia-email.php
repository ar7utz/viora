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
