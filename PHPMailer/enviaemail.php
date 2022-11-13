

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
$email->setFrom("agendaviora@gmail.com");
$email->addStringAttachment(file_get_contents("https://quickchart.io/qr?text=Here%27s%20my%20text"), "qr.jpg");
$email->Body = 'Este e um email de teste pelo localhost ';
$email->addAddress("agendaviora@gmail.com");
if($email->Send()){
    echo"Email envidado";
}else{
    echo "nao enviado";
}
$email->smtpClose();