<?php
    include '../../config.php';
    include 'sessao.php';
    session_start();

    unset($_SESSION['usuario']);

    header('Location: ' . arquivo('modulos/login/login.php'));