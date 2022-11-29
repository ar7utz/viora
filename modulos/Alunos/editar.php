<!DOCTYPE html>
<html lang="pt-BR">
<title>Aluno</title>
<?php
include_once "../../config.php";

    // Pega o ID que veio da URL
    if(empty($_GET['ID'])){
        header('Location: visualizar.php');
        exit;
    }else{
        $id = $_GET['ID'];
    }


    // Busca os dados do banco
    $sql = "SELECT * FROM aluno WHERE ID = $id";
    $aluno = retornaDado($sql);
?>
<?php include_once path('templates/head.php'); ?>   



<body>
    <?php include_once path('templates/barra_navegacao.php'); ?>



    <div class="container" id="lateral2">
        <form method="POST" action="<?= arquivo('modulos/Alunos/salvar.php'); ?>">
            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" value="<?= $aluno['nome'] ?>">
            </div>

            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Telefone</label>
                        <input type="text" class="form-control" name="telefone" value="<?= $aluno['telefone'] ?>">
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Telefone Secundário</label>
                        <input type="text" class="form-control" name="telefone_sec" value="<?= $aluno['telefone_sec'] ?>">
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Responsável</label>
                        <input type="text" class="form-control" name="responsavel" value="<?= $aluno['responsavel'] ?>">
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Segundo Responsável</label>
                        <input type="text" class="form-control" name="responsavel_sec" value="<?= $aluno['responsavel_sec']?>">
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" value="<?= $aluno['email'] ?>">
                    </div>
                </div>              

                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="mb-3">
                        <label class="form-label">Email Secundário</label>
                        <input type="email" class="form-control" name="email_sec" value="<?= $aluno['email_sec'] ?>">
                    </div>
                </div>
                
                <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="mb-3">
                        <label class="form-label">Email Institucional</label>
                        <input type="email" class="form-control" name="email_inst" value="<?= $aluno['email_inst'] ?>">
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="mb-3">
                        <label class="form-label">Senha</label>
                        <input type="text" class="form-control" name="senha" value="<?= $aluno['senha'] ?>">
                    </div>
                </div>
                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
        </form>
    </div>

</body>

</html>