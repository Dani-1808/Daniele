<?php       
$hostlocal = "localhost";
$usuario = "root";
$senhalocal = "";
$nomedb = "pessoas";

 $mysqli = new mysqli($hostlocal, $usuario, $senhalocal, $nomedb);
    if ($mysqli->connect_errno) {
       die("Falha na conexão");
    }
else {
    echo "Conexão realizada com sucesso!";
}
?>