<?php

	include '../functions.php';
	$hora_registro = $_POST['horaatual'];
	if(mysqli_query($link, 'INSERT INTO ponto (id, data_hora) VALUES (NULL, "'.$hora_registro.'")') == true){
		echo '<script type="text/javascript">alert("Cadastrado com sucesso!");window.location.href="../index.php"</script>';
	}else{
		echo 'Falha no registro do ponto.';
	}
