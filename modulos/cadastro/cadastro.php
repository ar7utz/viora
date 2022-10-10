<?php
include_once "../../config.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Docente</title>
</head>
<?= include_once path('templates/head.php') ?>

<body>
    <div class="container" id="lateral2">
        <form method="POST" action="<?= arquivo('modulos/professores/salvar.php'); ?>">
            <select class="select">
                <option selected>Tipo:</option>
                <option value="1">Aluno</option>
                <option value="2">Professor</option>
            </select>
            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome">
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Telefone</label>
                        <input type="text" class="form-control" name="telefone">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Telefone Secundário</label>
                        <input type="text" class="form-control" name="telefone_sec">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="mb-3">
                        <label class="form-label">Email Secundário</label>
                        <input type="email" class="form-control" name="email_sec">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="mb-3">
                        <label class="form-label">Email Institucional</label>
                        <input type="email" class="form-control" name="email_inst">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Senha</label>
                        <input type="password" class="form-control" name="senha">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Senha Confirmação</label>
                        <input type="password" class="form-control" name="senha_conf">
                    </div>
                </div>
            </div>
            <div class="text-end">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>

        </form>
    </div>
</body>

</html>