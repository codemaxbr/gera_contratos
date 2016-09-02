<!DOCTYPE html>
<html lang="en">
  	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	    <meta name="description" content="">
	    <meta name="author" content="">

	    <title>Gerador de Contratos</title>

	    <!-- Bootstrap core CSS -->
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <!-- Bootstrap theme -->
	    <link href="css/bootstrap-theme.min.css" rel="stylesheet">

	    <!-- Custom styles for this template -->
	    <link href="css/style.css" rel="stylesheet">

	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
  	</head>

<body>

	<header>
		<div class="container">
			<div class="col-md-3 noPadding-left">
				<img class="img-responsive" src="img/logo.png" />
			</div>
		</div>
	</header>

	<form class="conteudo" method="post" action="contrato.php">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
    					<label for="nome">Nome Completo</label>
    					<input type="text" class="form-control" id="nome" name="nome" placeholder="">
  					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
    					<label for="cpf">CPF</label>
    					<input type="text" class="form-control" id="cpf" name="cpf" placeholder="">
  					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
    					<label for="endereco">Endereço</label>
    					<input type="text" class="form-control" id="endereco" name="endereco" placeholder="">
  					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
    					<label for="numero">Numero</label>
    					<input type="text" class="form-control" id="numero" name="numero" placeholder="">
  					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
    					<label for="bairro">Bairro</label>
    					<input type="text" class="form-control" id="bairro" name="bairro" placeholder="">
  					</div>
				</div>

				<div class="row">
					<div class="col-md-12 text-center" style="margin-top:20px;">
						<button type="submit" class="btn btn-primary">Gerar Contrato</button>
					</div>
				</div>
			</div>
		</div>
	</form>

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>