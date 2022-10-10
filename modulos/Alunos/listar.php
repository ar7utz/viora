<?php
include_once "../../config.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<?php include_once path('templates/head.php') ?>

<body>
    <?php include_once path('templates/barra_navegacao.php') ?>
    <?php include_once path('templates/barra_lateral.php') ?>

    <div class="container" id="lateral2">
        <?php
        $sql = "SELECT * FROM aluno";
        $aluno = retornaDados($sql);
        ?>

        <table class="table">
            <div class="container" id="lateral2">
            <h2>Bem Vindo!</h2>
            </div>
            <div class="container-fluid">
                <table class="table table-bordered ">
                    <thead>
                        <tr class="bg-dark text-white">
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Responsável</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                <?php foreach ($aluno as $aluno) { ?>
                    <tr>
                        <th scope="row"><?= $aluno['ID'] ?></th>
                        <td><?= $aluno['nome'] ?></td>
                        <td><?= $aluno['email'] ?></td>
                        <td><?= $aluno['telefone'] ?></td>
                        <td><?= $aluno['responsavel'] ?></td>
                        <td>
                        <a class="btn btn-sm btn-primary" href="visualizar.php?id=<?= $aluno['ID'] ?>">Ver</a>
                        <a class="btn btn-sm btn-danger" href="deletar.php?ID=<?= $aluno['ID'] ?>">Excluir</a>
                    </td>
                    </tr>
                <?php } ?>
            </tbody>
                    </tbody>
                </table>
            </div>
            <?= include_once path('templates/footer.php'); ?>
        </table>
    </div>

</body>

</html>