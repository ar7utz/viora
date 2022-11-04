<?php
    include_once '../../config.php';

    $curso           = $_POST['nome'];
    $periodo         = $_POST['telefone'];

    // Cria a sql para inserção no banco de dados
    $sql = "INSERT 
                INTO turma 
                    (curso, periodo) 
                VALUES 
                    (:curso, :periodo)";

    $res = $conexaoBanco->prepare($sql);

    $res->execute([
        ':curso'         => $nome,
        ':periodo'       => $telefone,
        ':data'          => $data
    ]);

    
    $res = $conexaoBanco->prepare($sql);

    $res->execute([
        ':email'         => $nome,
        ':senha'         => $senha
    ]); 

    $res = $conexaoBanco->prepare($sql);

    $id = $conexaoBanco->lastInsertId();

    if(!empty($id)){
        header("Location: visualizar.php?id=$id");
    }else{
        header("Location: criar.php");
    }
?>