<?php
require_once 'conexao.php';

$nome = $_GET['nome'] ?? "sem nome";
$sobrenome = $_GET['sobrenome'] ?? "sem sobrenome";  

if($nome && $sobrenome){
    $stmt = $mysqli->prepare("INSERT INTO usuario (nome, sobrenome) VALUES (?, ?)");

    $stmt->bind_param("ss", $nome, $sobrenome);

    if($stmt-> execute()){
        $mensagem = "enviado com sucesso!";
    } else {
        $mensagem = "Falha ao enviar!";
    }    
        $stmt->close();



}
else {
    $mensagem = "Dado invalido!";
}
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <section>
        
        <?php
$mensagem;


   
        ?>
<p>
    <a href="javascript:history.go(-1)">
        Voltar</a>
</p>



    </section>

    

</body>
</html>