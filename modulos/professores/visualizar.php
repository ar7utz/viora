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
    $id = $_GET['ID'];

    $sql = "SELECT * FROM professor WHERE ID = $id";
    $professor = retornaDado($sql);
    ?>
    <section style="background-color: #eee;">
      <div class="container py-5">
        <div class="row">
          <div class="col-lg-4">
            <div class="card mb-4">
              <div class="card-body text-center">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/User-avatar.svg/1200px-User-avatar.svg.png" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                <h5 class="my-3"><?= $professor['nome'] ?></h5>
              </div>
            </div>
            <a class="btn btn-sm btn-primary" href="editar.php?ID=<?= $professor['ID'] ?>">Editar</a>
            <a class="btn btn-sm btn-danger" href="deletar.php?ID=<?= $professor['ID'] ?>">Excluir</a>
          </div>
          <div class="col-lg-8">
            <div class="card mb-4">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Nome</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0"><?= $professor['nome'] ?></p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Email</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0"><?= $professor['email'] ?></p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Email Secund??rio</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0"><?= $professor['email_sec'] ?></p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Email Institucional</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0"><?= $professor['email_inst'] ?></p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Telefone</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0"><?= $professor['telefone'] ?></p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Telefone secund??rio</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0"><?= $professor['telefone_sec'] ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

</body>

</html>