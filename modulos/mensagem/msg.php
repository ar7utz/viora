<?php
    include_once "../../config.php";

    include_once path('templates/head.php');
    include_once path('templates/barra_navegacao.php');

    if(empty($_GET['id_turma']))
        exit;
        
    $id_turma = $_GET['id_turma'];
?>

<body>
    <form method="POST" action="<?= arquivo('modulos/mensagem/manda-mensagem.php'); ?>">
        <input type="hidden" name="id_turma" value="<?= $id_turma ?>">

        <div class="container">
            <h1>Mensagem</h1>
            <div class="mb-3">
                <label class="form-label">Assunto</label>
                <input type="text" class="form-control" name="assunto">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Mensagem</label>
                <textarea class="form-control" rows="5" name="mensagem"></textarea>
            </div>
            <h2>Enviar para:</h2>
            <div class="mb-3">
                <label class="form-label">Email do destinatário:</label>
                <input type="text" class="form-control" name="destinatario">
            </div>
            <br>
            <div class="text-end">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>

        </div>
</body>