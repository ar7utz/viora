<?php
include_once "../../config.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<title>Turmas</title>
<?php include_once path('templates/head.php') ?>

<body>
    <?php include_once path('templates/barra_navegacao.php') ?>

    <div class="container" id="lateral2">
        <?php
        $sql = "SELECT * FROM turma";
        $turma = retornaDados($sql);
        ?>

        <table class="table">
            <div class="container" id="lateral2">
                <h2>Turmas</h2>
            </div>
            <div class="container-fluid">
                <table class="table table-bordered ">
                    <thead>
                        <tr class="bg-dark text-white">
                            <th scope="col">#</th>
                            <th scope="col">Curso</th>
                            <th scope="col">Período</th>
                            <th scope="col">Data de criação</th>
                            <th scope="col"> </th>
                        </tr>
                        <tbody>
            
            <?php foreach ($turma as $turma) { ?>
                <tr>
                    <th scope="row"><?= $turma['ID'] ?></th>
                    <td><?= $turma['curso'] ?></td>
                    <td><?= $turma['periodo'] ?></td>
                    <td><?= $turma['data'] ?></td>
                    <td>
                        <a class="btn btn-sm btn-primary" href="visualizar.php?ID=<?= $turma['ID'] ?>">Ver</a>
                        <a class="btn btn-sm btn-danger" href="deletar.php?ID=<?= $turma['ID'] ?>">Excluir</a>
                        <a class="btn btn-sm btn-success" href="mensagem.php?ID=<?= $turma['ID'] ?>">Mensagem</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
                </table>
            </div>
        </table>
        <?= include_once path('templates/footer.php'); ?>
    </div>

</body>

</html>