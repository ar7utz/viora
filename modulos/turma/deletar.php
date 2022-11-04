<?php
include '../../config.php';
include '../../funcoes/banco.php';

if (!empty($_GET)) {
    $id = $_GET['ID'];
    //Delete do banco:
    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE FROM turma where ID = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    Banco::desconectar();

    header("Location: " . 'listar.php');
}
