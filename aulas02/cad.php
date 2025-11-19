<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <section>
        
        <?php
    $nome = $_GET['nome'] ?? 'Sem nome';
    $sobrenome = $_GET['sobrenome'] ?? 'Desconhecido';
    echo "Seja bem-vindo(a) <strong>$nome $sobrenome</strong> ao meu site!";
        ?>
<p>
    <a href="javascript:history.go(-1)">
        Voltar</a>
</p>



    </section>

    

</body>
</html>