<?php
    include_once '../../config.php';

    $curso           = $_POST['nome'];
    $periodo         = $_POST['periodo'];
    $data            = $_POST['data'];

    // Cria a sql para inserção no banco de dados
    $sql = "INSERT 
                INTO turma 
                    (curso, periodo, data) 
                VALUES 
                    (:curso, :periodo, :data)";

    $res = $conexaoBanco->prepare($sql);

    $res->execute([
        ':curso'         => $curso,
        ':periodo'       => $periodo,
        ':data'          => $data
    ]);

    $id = $conexaoBanco->lastInsertId();

    if(!empty($id)){
        header("Location: visualizar.php?ID=$id");
    }else{
        header("Location: criar.php");
    }
?>