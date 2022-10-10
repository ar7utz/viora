<?php
include_once "../../config.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<title>Professor</title>
<?php include_once path('templates/head.php') ?>

<body>
    <?php include_once path('templates/barra_navegacao.php') ?>

    <div class="container" id="lateral2">
        <?php
        $sql = "SELECT * FROM professor";
        $professores = retornaDados($sql);
        ?>

        <table class="table">
            <div class="container" id="lateral2">
                <h2>Contatos</h2>
            </div>
            <div class="container-fluid">
                <table class="table table-bordered ">
                    <thead>
                        <tr class="bg-dark text-white">
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Ver</th>
                        </tr>
                        <tbody>
            
            <?php foreach ($professores as $professor) { ?>
                <tr>
                    <th scope="row"><?= $professor['ID'] ?></th>
                    <td><?= $professor['nome'] ?></td>
                    <td><?= $professor['email'] ?></td>
                    <td><?= $professor['telefone'] ?></td>
                    <td><?= $professor['email'] ?></td>
                    <td>
                        <a class="btn btn-sm btn-primary" href="visualizar.php?id=<?= $professor['ID'] ?>">Ver</a>
                        <a class="btn btn-sm btn-danger" href="deletar.php?id=<?= $aluno['ID'] ?>">Excluir</a>
                        <a class="btn btn-sm btn-success" href="mensagem.php?id=<?= $aluno['ID'] ?>">Mensagem</a>
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