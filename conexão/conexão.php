<?php       
$hostlocal = "localhost";
$usuario = "root";
$senhalocal = "";
$nomedobanco = "bancoemti";

 $mysqli = new mysqli($hostlocal, $usuario, $senhalocal, $nomedobanco);
    if ($mysqli->connect_errno) {
       die("Falha na conexão");
    }
else {
    echo "Conexão realizada com sucesso!";
}
?>