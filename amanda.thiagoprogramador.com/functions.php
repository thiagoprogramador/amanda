<?php
date_default_timezone_set('America/Sao_Paulo');
$url = 'http://amanda.thiagoprogramador.com';
//conecta bando de dados
$link = mysqli_connect("localhost", "thiago_amanda", "-^0#c5&zZy9G", "thiago_amanda");
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
//fecha conexao com banco de dados

//inclui feed do instagram

$horaatual = date('Y-m-d G:i:s');