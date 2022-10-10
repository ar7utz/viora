<?php
session_start();
    if (empty($_SESSION['usuario'])) {
        header('Location: ' . arquivo('modulos/login/login.php'));
        exit;
    }