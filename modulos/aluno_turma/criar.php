<!DOCTYPE html>
<html lang="pt-BR">
<title>Aluno</title>
<?php
include_once "../../config.php";
?>
<?php include_once path('templates/head.php'); ?>

<body>
    <?php include_once path('templates/barra_navegacao.php'); ?>

    <div class="container" id="lateral2">
        <form method="POST" action="<?= arquivo('modulos/Alunos/salvar.php'); ?>">
            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome">
            </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
        </form>
    </div>

</body>

</html>