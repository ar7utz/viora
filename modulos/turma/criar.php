<!DOCTYPE html>
<html lang="pt-BR">
<title>Turma</title>
<?php
include_once "../../config.php";
?>
<?php include_once path('templates/head.php'); ?>

<body>
    <?php include_once path('templates/barra_navegacao.php'); ?>



    <div class="container" id="lateral2">
        <form method="POST" action="<?= arquivo('modulos/turmas/salvar.php'); ?>">
            <div class="mb-3">
                <label class="form-label">Nome do Curso</label>
                <input type="text" class="form-control" name="nome">
            </div>

            <div class="row">
                <div class="mb-3">
                    <select class="form-control">
                        <option selected>Período </option>
                        <option value="1">Diurno </option>
                        <option value="2">Vespertino </option>
                        <option value="3">Noturno </option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="mb-3">
                    <label class="form-label">Professor Responsável</label>
                    <input type="text" class="form-control" name="telefone">
                </div>
                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Criar</button>
                </div>
        </form>
    </div>

</body>

</html>