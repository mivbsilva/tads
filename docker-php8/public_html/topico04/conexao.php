<?php

$db = new mysqli('mariadb', 'root', 'root', 'tads'); //usando o xampp é host localhost

//$query = 'SELECT nome FROM tads.alunos';
$query = 'SELECT * FROM tads.alunos';

$result = $db->query($query);

//var_dump($result);

while($linha = $result->fetch_assoc()){
    //var_dump($linha);
    //echo "<p> {$linha["nome"]} </p>";
    echo "<p> {$linha["id"]} {$linha["matricula"]} {$linha["nome"]} </p>";
}

$db->close();