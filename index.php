<!DOCTYPE html>
<html>
	<head>
		<title>Projeto 2019</title>

		<meta charset="utf-8">
		<script src="./js/popper.min.js"></script>
    	<script src="./js/jquery-3.3.3.1.slim.min.js"></script>

		<link rel="stylesheet" type="text/css" href="./css/bootstrap_css/bootstrap.min.css">

		<script type="text/javascript" src="./js/bootstrap_js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="./css/estilo.css">

	</head>
	<body>

	<div class="container">

		<div class="jumbotron">

		<h1>Bem-vindo(a) ao site</h1>

		<p>Olá !</p>

		<ul class="menu">
		<a href="?pg=home" class="btn btn-primary" role="button">Início</a>
		<a href="?pg=sobre" class="btn btn-primary" role="button">Sobre</a>
		<a href="?pg=cadastro" class="btn btn-primary" role="button">Cadastro</a>
		</ul>

		</div>

	</div>

	<div class="container" id="corpo">

		<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item active" aria-current="page"><a href="?pg=sobre">Home</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Sobre</li>
		    <li class="breadcrumb-item active" aria-current="page">Cadastro</li>
		  </ol>
		</nav>
		
		<?php
		if (isset($_GET["pg"])) {
			$pagina = $_GET["pg"];
		}
		else{
			$pagina = "inicio";
		}

		include ("paginas/".$pagina.".php");

		?>
	</div>

	<div class="container" id="rodape">
		
		<div class="row">
    		<div class="col-sm">

      		<h4>Todos os direitos reservados a Diego.</h4>

    		</div>
		
    	</div>
	</div>

	</body>
</html>