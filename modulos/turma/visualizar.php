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

      $sql = "SELECT 
                * 
              FROM 
                turma 
                left join professor on (turma.professor_id = professor.ID)
              WHERE turma.ID = $id";
              
      $turma = retornaDado($sql);
    ?>
    <section style="background-color: #eee;">
      <div class="container py-5">
        <div class="row">
          <div class="col-lg-4">
            <div class="card mb-4">
              <div class="card-body text-center">
                <img src="https://cdn-icons-png.flaticon.com/512/69/69589.png" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                <h5 class="my-3"><?= $turma['curso'] ?></h5>
              </div>
            </div>
            <a class="btn btn-sm btn-primary"  href="editar.php?ID=<?=    $turma['ID'] ?>">Editar</a>
            <a class="btn btn-sm btn-danger"   href="deletar.php?ID=<?=   $turma['ID'] ?>">Excluir</a>
            <a class="btn btn-sm btn-success"  href="adicionar_aluno.php?ID=<?=   $turma['ID'] ?>">Adicionar Aluno</a>
          </div>
          <div class="col-lg-8">
            <div class="card mb-4">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Curso</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0"><?= $turma['curso'] ?></p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Período</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0"><?= $turma['periodo'] ?></p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Professor Representante</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0">
                      <a href="<?= arquivo('modulos/professores/visualizar.php?ID=' . $turma['professor_id']) ?>">
                        <?= $turma['nome'] ?>
                      </a>
                    </p>
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