<!DOCTYPE html>
<html lang="pt-BR">
<title>Turma</title>
<?php
    include_once "../../config.php";

    if(empty($_GET['ID'])){
        header('Location: ' . arquivo('modulos/turma/listar.php'));
    }
?>
<?php include_once path('templates/head.php'); ?>

<body>
    <?php include_once path('templates/barra_navegacao.php'); ?>
    <div class="form-control">
        <form method="POST" action="<?= arquivo('modulos/turma/salvar_adicionar_aluno.php'); ?>">
            <input type="hidden" value="<?= $_GET['ID'] ?>" name="turma_id">

            <div class="modal-body">
                <h2 class="fs-5">Adicionar aluno:</h2>
                <div class="row">
                    <div class="mb-3">
                        <label for="aluno">Selecionar aluno</label>
                        <select name="aluno_id" class="form-control">
                            <option>Selecione uma opção</option>
                            <?php
                            $sql = "SELECT ID, nome FROM aluno";

                            $alunos = retornaDados($sql);
                            foreach ($alunos as $aluno) {
                                echo "<option value={$aluno['ID']}>{$aluno['nome']}</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <hr>
                    <div class="row">
                <div class="mb-3">
                    <label for="data">Data de adição: </label>
                    <input type="date" name="data">
                </div>
            </div>
                </div>
            </div>
            <div class="text-end">
                <button type="submit" class="btn btn-primary">Adicionar a Turma</button>
            </div>
    </div>