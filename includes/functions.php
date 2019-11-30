<?php
$mysqli = new mysqli("localhost", "root", "", "amanda");
if ($mysqli->connect_errno) {
    printf("Erro de conexão: %s\n", $mysqli->connect_error);
    exit();
}
//mostar data em portugues
//git


setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');


$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$pagina = explode('/', $actual_link);
