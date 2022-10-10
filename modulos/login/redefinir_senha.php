<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../rp/css/style.css">
    <title>Redefinir Senha</title>
</head>
<body>
    <div class="container" id="inst">
        <h3 id="heaeder">Instruções</h3>
        <h4>A senha deve ter o mínimo de 8 caracteres;</h4>
        <h4>A senha deve ter pelo menos uma letra maiúscula;</h4>
        <h4>A senha deve ter pelo menos uma letra minúscula;</h4>
        <h4>A senha deve ter pelo menos um símbolo. Ex. (!, #, $, %, &, +, -, /, :, ;, =, ?, @, \, | );</h4>
        <h4>A senha deve ter pelo menos um número;</h4>
    </div>
    <div id="rp">
        <h1>Redefina sua senha</h1>
        <form action="#">
            <label for="ns1">Digite uma nova senha:</label>
            <input type="password">
            <label for="nsr">Confirme sua nova senha:</label>
            <input type="password">
            <br>
            <a id="btnsubmit" href="../senha redefinida/index.html">Redefinir</a>
        </form>  
    </div>
</body>
</html>