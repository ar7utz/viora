<?php
    include_once '../../config.php';

    $nome           = $_POST['nome'];
    $telefone       = $_POST['telefone'];
    $telefone_sec   = $_POST['telefone_sec'];
    $email          = $_POST['email'];
    $email_sec      = $_POST['email_sec'];
    $email_inst     = $_POST['email_inst'];
    $senha          = $_POST['senha'];
    $senha_conf     = $_POST['senha_conf'];

    // Cria a sql para inserção no banco de dados
    $sql = "INSERT 
                INTO professor 
                    (nome, telefone, telefone_sec, email, email_sec, email_inst, senha) 
                VALUES 
                    (:nome, :telefone, :telefone_sec, :email, :email_sec, :email_inst, :senha)";

    $res = $conexaoBanco->prepare($sql);

    $res->execute([
        ':nome'         => $nome,
        ':telefone'     => $telefone,
        ':telefone_sec' => $telefone_sec,
        ':email'        => $email,
        ':email_sec'    => $email_sec,
        ':email_inst'   => $email_inst,
        ':senha'        => $senha
    ]);

    $id = $conexaoBanco->lastInsertId();

    if(!empty($id)){
        header("Location: visualizar.php?id=$id");
    }else{
        header("Location: criar.php");
    }
?>