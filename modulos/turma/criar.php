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
        <form method="POST" action="<?= arquivo('modulos/turma/salvar.php'); ?>">
            <div class="mb-3">
                <label class="form-label">Nome do Curso</label>
                <input type="text" class="form-control" name="nome">
            </div>
            <div class="row">
                <div class="mb-3">
                <label for="periodo">Período:</label>
                    <select class="form-control" name="periodo">
                        <option value="Diurno">Diurno</option>
                        <option value="Vespertino">Vespertino</option>
                        <option value="Noturno">Noturno</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="mb-3">
                    <label for="data">Data de Criação</label>
                    <input type="date" name="data">
                </div>
            </div>
            <div class="row">
                <div class="mb-3">
                    <label for="resp">Professor Representante:</label>
                    <select name="professor_id" class="form-control">
                        <option>Selecione uma opção</option>
                        <?php
                        $sql = "SELECT ID, nome FROM professor";
                        $professores = retornaDados($sql);

                        foreach ($professores as $professor) {
                            echo "<option value={$professor['id']}>{$professor['nome']}</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="text-end">
                <button type="submit" class="btn btn-primary">Criar</button>
            </div>
        </form>
    </div>

</body>

</html>