<?php
    include_once "../../config.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Docente</title>
    <link rel="stylesheet" href="<?= arquivo('css/cadastro_professor.css') ?>">
</head>
<body>
        <div id="head">
        <h1>Cadastro de Docente</h1>
        </div>
        <div id="cadastro"> 
        <form action="tela1">
            <div>
            <label for="nome" ></label> Nome:
            <input type="nome" id="nome" name="nome" placeholder="Digite seu nome"> 
            </div>
            <div>
            <label for="email"></label> Email:
            <input type="email" id="email" name="email" placeholder="Digite seu email">
            </div>
            <div>
            <label for="2email"></label> Segundo email:
            <input type="email" id="2email" name="2email" placeholder="Digite um email secundário">
            </div>
            <div>
            <label for="email institucional"></label> Email Institucional:
            <input type="email" id="institucional" name="institucional" placeholder="Email institucional">
            </div>
            <div>
            <label for="telefone"></label> Telefone:
            <input type="number" id="telefone" name="telefone" placeholder="Digite seu telefone">
            </div>
            <div>
            <label for="telefone2"></label> Segundo telefone:
            <input type="number" id="tel2" name="tel2" placeholder="Segundo telefone">
            </div>
            <div>
            <label for="senha"></label> Senha:
            <input type="password" name="senha" id="senha" placeholder="Digite sua senha">
            </div>
            <div>
            <label for="senhacf"></label> Confirmação de senha:
            <input type="password" name="senhacf" id="senhacf" placeholder="Confirme sua senha">
            <h3>Curso</h3>
            <select name="curso" id="curso">
            <option value="ti">Técnico em Informática</option>
            <option value="farma">Farmácia</option>
            <option value="quimi">Química</option>
            <option value="log">Logística</option>    
            <option value="ads">Análise e Desenvolvimento de Sistemas</option>    
            </select>
            <div id="cbperm">
                <input type="checkbox" name="periodo1" id="periodo1">
                <label for="period1">Manhã</label> 
                </div>
                <div id="cbpert">
                <input type="checkbox" name="periodo2" id="periodo3">
                <label for="period2">Tarde</label> 
                </div>
                <div id="cbpern">
                <input type="checkbox" name="periodo3" id="periodo3">
                <label for="period3">Noite</label> 
                </div>
                <h3>Segunda opção de curso</h3>
                <select name="curso" id="curso">
                <option value="ti">Técnico em Informática</option>
                <option value="farma">Farmácia</option>
                <option value="quimi">Química</option>
                <option value="log">Logística</option>    
                <option value="ads">Análise e Desenvolvimento de Sistemas</option>    
                </select>
                <div id="cbperm">
                    <input type="checkbox" name="periodo1" id="periodo1">
                    <label for="period1">Manhã</label> 
                    </div>
                    <div id="cbpert">
                    <input type="checkbox" name="periodo2" id="periodo3">
                    <label for="period2">Tarde</label> 
                    </div>
                    <div id="cbpern">
                    <input type="checkbox" name="periodo3" id="periodo3">
                    <label for="period3">Noite</label> 
                    </div>
            <h3>Turma</h3>
            <select name="turma" id="turma">
            <option value="A">Turma A (1)</option>
            <option value="B">Turma B (2)</option>
            <option value="C">Turma C (3)</option>
            <option value="D">Turma D (4)</option>
            <option value="E">Turma E (5)</option>
            </select>
            </div>
            <a id="button" href="">CADASTRAR
            </a>
            
        </form>
    </div>

</body>
</html>