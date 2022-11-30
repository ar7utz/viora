<?php
    // Inclui o arquivo de conexão com o banco
    include_once '../../config.php';

    // Pega os dados que vieram do formulário
    $id = $_POST['ID'];
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $telefone_sec = $_POST['telefone_sec'];
    $email = $_POST['email'];
    $email_sec = $_POST['email_sec'];
    $email_inst = $_POST['email_inst'];
    $senha = $_POST['senha'];

    // Cria a sql para armazenar os valores no banco
    $sql = "UPDATE professor
        SET 
            nome = :nome,
            telefone = :telefone,
            telefone_sec = :telefone_sec,
            email = :email,
            email_sec = :email_sec,
            email_inst = :email_inst,
            senha = :senha,
        WHERE 
            ID = :id";

    // Passa os valores para a SQL
    $peparada = $conexaoBanco->prepare($sql);
    $resultado = $peparada->execute([
        ':nome'  => $nome,
        ':telefone'  => $telefone,
        ':telefone_sec' => $telefone_sec,
        ':email'  => $email,
        ':email_sec' => $email_sec,
        ':email_inst' => $email_inst,
        ':senha' => $senha,
        ':ID' => $id
    ]);

    // funcionario cadastrado com sucessso
    $msg = "Aluno atualizado com sucesso.";
    header("Location: visualizar.php?id=$id&msg=$msg");
