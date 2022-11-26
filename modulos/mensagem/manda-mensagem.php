<?php
    include_once "../../config.php";
    include_once 'envia-email.php';

    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];
    $id_turma = $_POST['id_turma'];
    

    $sql = "SELECT * FROM aluno_turma join aluno on (aluno.ID = aluno_turma.ID_aluno) WHERE ID_turma = $id_turma";
    $alunos = retornaDados($sql);

    $destinatarios = [];

    foreach($alunos as $aluno){
        $destinatarios[] = ['nome' => $aluno['nome'], 'email' => $aluno['email']];
    }

    $email = enviarEmail($destinatarios, $assunto, $mensagem);

    if ($email) {
        header('Location: msg.php?mensagem=Email enviado com sucesso');
    } else {
        header('Location: msg.php?mensagem=Erro ao enviar email');
    }



    // $sql = "SELECT * FROM aluno_turma join aluno on (aluno.ID = aluno_turma.ID_aluno) WHERE ID_turma = $id_turma";
    // $alunos = retornaDados($sql);