<?php
include_once '../../config.php';

$id_turma           = $_POST['turma_id'];
$id_aluno           = $_POST['aluno_id'];

// Cria a sql para inserção no banco de dados
$sql = "INSERT 
                INTO aluno_turma 
                    (ID_turma, ID_aluno, data) 
                VALUES 
                    (:id_turma, :id_aluno, :data)";

$res = $conexaoBanco->prepare($sql);

$res->execute([
    ':id_turma'         => $id_turma,
    ':id_aluno'         => $id_aluno,
    ':data'             => date('Y-m-d H:i:s')
]);

$id = $conexaoBanco->lastInsertId();

if (!empty($id)) {
    header("Location: visualizar.php?ID=$id_turma");
} else {
    header("Location: adicionar_aluno.php");
}
