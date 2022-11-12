<?php
    $base_dados = "bdviora";
    $usuario = "root";
    $senha = "";
    $host = "localhost";

    $conexaoBanco = new PDO("mysql:host={$host};dbname={$base_dados};charset=utf8", $usuario, $senha);
    $GLOBALS['conexaoBanco'] = $conexaoBanco;

    //
    // Busca e retorna um dado do banco
    //

    function retornaDado($sql)
    {
        $conexao = $GLOBALS['conexaoBanco'];
        $resposta = $conexao->query($sql);

        return $resposta->fetch();
    }

    //
    // Busca e retorna os dados do banco
    //

    function retornaDados($sql)
    {
        $conexao = $GLOBALS['conexaoBanco'];
        $resposta = $conexao->query($sql);

        return $resposta->fetchAll();
    }

    function criarUsuario($email, $senha){
        $conexao = $GLOBALS['conexaoBanco']; 

        $sql = "INSERT 
                    INTO usuario 
                        (email, senha) 
                    VALUES 
                        (:email, :senha)";
    
        $res = $conexao->prepare($sql);
    
        $res->execute([
            ':email'            => $email,
            ':senha'            => $senha
        ]);
    
        $res = $conexao->prepare($sql);
    }