<?php
include 'functions.php';

if(isset($_POST['enviar_objetivoparaouniverso'])){
    $nome_objetivo = $_POST['nome_objetivo'];
    $imagem_objetivo = $_POST['imagem_objetivo'];
    $categoria = $_POST['categoria'];
    $afirmacao = $_POST['descricao_objetivo'];

    $data_hora = date('Y-m-d');

    if(mysqli_query($link, "INSERT INTO `metas` (`id`, `meta`, `categoria`, `descricao`, `data`,`imagem`) VALUES (NULL, '$nome_objetivo', '$categoria', '$afirmacao', '$data_hora', '$imagem_objetivo')") == true){
		echo '<script type="text/javascript">alert("Trabalhe! O universo já começou a trabalhar para te ajudar com isso!");window.location.href="http://localhost:8080/amanda/metas.php";</script>';
	}else{
		echo 'erro';
	}

}

if(isset($_GET['remover'])){
    $id = $_GET['id'];
    if($_GET['remover'] == 1){
        if(mysqli_query($link, "UPDATE `metas` SET `apagar` = '1' WHERE `metas`.`id` = $id;") == true){
            echo '<script type="text/javascript">alert("Removido com sucesso.");window.location.href="http://localhost:8080/amanda/metas.php";</script>';
        }else{
            echo 'erro';
        }
    }
}