<?php
    define('ROOT_PATH', 'http://localhost/viora/');
    define('ROOT_DIR', __DIR__);

    include_once path('funcoes/conexao.php');

   

    function path($file)
    {
        return ROOT_DIR . '/' . $file;
    }

    function arquivo($file)
    {
        return ROOT_PATH . $file;
    }