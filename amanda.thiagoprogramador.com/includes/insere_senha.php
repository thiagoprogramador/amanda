<?php
include 'functions.php';

if($_POST['enviar']){
    $nome_cliente = $_POST['nome_cliente'];
    $nome_projeto = $_POST['nome_projeto'];
    $servico = $_POST['servico'];
    $link_acesso = $_POST['link_acesso'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $data_hora = date('Y-m-d H:i:s');

    if(mysqli_query($link, "INSERT INTO `senhas` (`id`, `nome_cliente`, `nome_projeto`, `servico`, `link_acesso`, `login`, `senha`, `data_hora`) VALUES (NULL, '$nome_cliente', '$nome_projeto', '$servico', '$link_acesso', '$login', '$senha', '$data_hora')") == true){
		echo '<script type="text/javascript">alert("Cadastrado com sucesso!");</script>';
	}else{
		echo 'erro';
	}

}