<?php
include 'functions.php';

if(isset($_POST['enviar_inserepessoa'])){
    $nome = $_POST['nome'];
    $imagem = $_POST['imagem'];
    $data_hora = date('Y-m-d');

    //upload do arquivo
    $uploaddir = '/img/usuarios/';
    
    
    $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
        echo "Arquivo válido e enviado com sucesso.\n";
    } else {
        echo "Possível ataque de upload de arquivo!\n";
    }
    echo 'Aqui está mais informações de debug:';
    print_r($_FILES);
    
    if(mysqli_query($link, "INSERT INTO `networking` (`id`, `nome`, `imagem`, `ponto`, `data`) VALUES (NULL, '$nome', '$uploadfile', '1', '$data_hora')") == true){
		echo '<script type="text/javascript">window.location.href="'.$url.'/networking.php";</script>';
	}else{
		echo 'erro';
	}
        
    

}


if(isset($_GET['ponto'])){
	$ponto = $_GET['ponto'];
        $id = $_GET['id'];
        if(mysqli_query($link, "UPDATE `networking` SET `ponto` = '$ponto' WHERE `networking`.`id` = $id") == true){
            echo '<script type="text/javascript">window.location.href="'.$url.'/networking.php";</script>';
        }else{
            echo 'erro';
        }
   
}

if(isset($_GET['excluir'])){
    $id = $_GET['id'];
    if(mysqli_query($link, "DELETE FROM `networking` WHERE `networking`.`id` = $id") == true){
            echo '<script type="text/javascript">window.location.href="'.$url.'/networking.php";</script>';
        }else{
            echo 'erro';
        }
}

