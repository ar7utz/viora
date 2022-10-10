<?php
include_once "../../config.php";
?>
<?php include_once path('templates/head.php') ?>
<?php include_once path('templates/barra_navegacao.php') ?>
<div class="container">
    <h1>Mensagem</h1>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Mensagem</label>
        <textarea class="form-control" rows="5"></textarea>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
        <label class="form-check-label" for="inlineCheckbox1">Email</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
        <label class="form-check-label" for="inlineCheckbox2">Whatsapp</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
        <label class="form-check-label" for="inlineCheckbox3">SMS</label>
    </div>
    <h2>Enviar para:</h2>
    <select class="form-select" aria-label="Default select example">
        <option selected>Tipo</option>
        <option value="1">Professor</option>
        <option value="2">Aluno</option>
    </select>
    <select class="form-select" aria-label="Default select example">
        <option selected>Tipo</option>
        <option value="1">Professor</option>
        <option value="2">Aluno</option>
    </select>


</div>