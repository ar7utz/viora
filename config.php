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

    function pessoa()
    {
        $usuario = "user"();

        if($usuario['tipo_aluno'] == 'aluno')
        {
            $sql = "SELECT * FROM usuario WHERE ID = {$usuario['tipo_aluno']}";
            return retornaDado($sql);
        }else if($usuario['tipo_prof'] == 'professor'){
            $sql = "SELECT * FROM usuario WHERE ID = {$usuario['tipo_prof']}";
            return retornaDado($sql);
        }else{
            return [];
        }
    }