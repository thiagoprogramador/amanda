<?php
//mostar data em portugues
//nova alteracao do git

setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');


$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$pagina = explode('/', $actual_link);
