<?php 

  include 'functions.php';  
  $actual_link = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
  $explodindo = explode('/', $actual_link); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.3/examples/theme/">

    <title>Amanda</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="Just/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Amanda</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li <?php if (in_array("index.php", $explodindo)){echo "class='active'"; }?>><a href="index.php">Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pessoal <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="dieta.php">Dieta</a></li>
                <li><a href="treino.php">Treino</a></li>
                <li><a href="metas.php">Metas</a></li>
                <li><a href="diversao.php">Diversão</a></li>
                <li><a href="diario.php">Diário</a></li>
                <li><a href="estudo.php">Estudo</a></li>
              </ul>
            </li>
            
            <li <?php if (in_array("networking.php", $explodindo)){echo "class='active'"; }?>><a href="networking.php">Networking</a></li>
            <li <?php if (in_array("senhas.php", $explodindo)){echo "class='active'"; }?>><a href="senhas.php">Senhas</a></li>
            <li <?php if (in_array("financeiro.php", $explodindo)){echo "class='active'"; }?>><a href="financeiro.php">Financeiro</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Empresa <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Ponto</a></li>
                <li><a href="#">Projetos</a></li>
                <li><a href="#">Tarefas</a></li>
                <li><a href="#">Reuniões</a></li>
                <li><a href="#">Comercial</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>