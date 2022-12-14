<?php
include_once "../../config.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<title>Aluno</title>
<?php include_once path('templates/head.php') ?>

<body>
    <?php include_once path('templates/barra_navegacao.php') ?>
    <div class="container" id="lateral2">
        <?php
        $id = $_GET['id'];

        $sql = "SELECT * FROM aluno WHERE id = $id";
        $aluno = retornaDado($sql);
        ?>
        <section style="background-color: #eee;">
            <div class="container py-5">

                <div class="row">
                    <div class="col-lg-4">
                        <div class="card mb-4">
                            <div class="card-body text-center">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/User-avatar.svg/1200px-User-avatar.svg.png" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                                <h5 class="my-3"><?= $aluno['nome'] ?></h5>
                            </div>
                        </div>
                        <a class="btn btn-sm btn-primary" href="editar.php?ID=<?= $aluno['ID'] ?>">Editar</a>
                        <a class="btn btn-sm btn-danger" href="deletar.php?ID=<?= $aluno['ID'] ?>">Excluir</a>
                    </div>
                    <div class="col-lg-8">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Nome</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?= $aluno['nome'] ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Respons??vel</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?= $aluno['responsavel'] ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Segundo Respons??vel</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?= $aluno['responsavel_sec'] ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Email</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?= $aluno['email'] ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Email Secund??rio</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?= $aluno['email_sec'] ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Email Institucional</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?= $aluno['email_inst'] ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Telefone</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?= $aluno['telefone'] ?></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Telefone secund??rio</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0"><?= $aluno['telefone_sec'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="">
                <?php
                $sql = "SELECT turma.curso FROM aluno_turma join turma on (aluno_turma.ID_turma = turma.ID) WHERE ID_aluno = {$aluno['ID']}";
                $turmas = retornaDados($sql);
                ?>

                <h3 class="text-center">Lista de alunos</h3>
                <table class="table table-striped my-3">
                    <thead>
                        <tr class="table-primary">
                            <th>Aluno</th>
                            <th>#</th>
                            <th>data</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        foreach ($turmas as $turma) { ?>
                            <tr>
                                <td><?= $turma['curso'] ?></td>
                                <td>
                                    <button class="btn btn-danger btn-sm">X</button>
                                </td>
                            </tr>


                        <?php } ?>
                    </tbody>
                </table>
            </div>
    </div>
    </section>
</body>

</html>