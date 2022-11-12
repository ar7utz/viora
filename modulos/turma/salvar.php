<?php
    include_once '../../config.php';

    $curso           = $_POST['nome'];
    $periodo         = $_POST['periodo'];
    $data            = $_POST['data'];
    $professor       = $_POST['professor_id'];

    // Cria a sql para inserção no banco de dados
    $sql = "INSERT 
                INTO turma 
                    (curso, periodo, data, professor_id) 
                VALUES 
                    (:curso, :periodo, :data, :professor_id)";

    $res = $conexaoBanco->prepare($sql);

    $res->execute([
        ':curso'         => $curso,
        ':periodo'       => $periodo,
        ':data'          => $data,
        ':professor_id'  => $professor
    ]);

    $id = $conexaoBanco->lastInsertId();

    if(!empty($id)){
        header("Location: visualizar.php?ID=$id");
    }else{
        header("Location: criar.php");
    }
?>