<?php
    include_once 'envia-email.php';

    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];
    
    $destinatarios = [
        [
            'nome' => '',
            'email' => $_POST['destinatario']
        ]
    ];

    $email = enviarEmail($destinatarios, $assunto, $mensagem);

    if ($email) {
        header('Location: msg.php?mensagem=Email enviado com sucesso');
    } else {
        header('Location: msg.php?mensagem=Erro ao enviar email');
    }
