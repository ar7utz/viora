<?php
    // Inclui o arquivo de conexão com o banco
    include_once '../../config.php';

    // Pega os dados que vieram do formulário
    $id = $_POST['ID'];
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $responsavel = $_POST['responsavel'];

    // Cria a sql para armazenar os valores no banco
    $sql = "UPDATE aluno
        SET 
            nome = :nome, 
            telefone = :telefone, 
            telefone_sec = :telefone_sec,
            email = :email, 
            email_inst = :email_inst,
            email_sec = :email_sec,
            responsavel = :responsavel,
            responsavel_sec = :responsavel_sec,
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
        ':responsavel'  => $responsavel,
        ':responsavel_sec' => $responsavel_sec,
        ':senha' => $senha,
        ':ID' => $id
    ]);

    // funcionario cadastrado com sucessso
    $msg = "Aluno atualizado com sucesso.";
    header("Location: visualizar.php?id=$id&msg=$msg");
