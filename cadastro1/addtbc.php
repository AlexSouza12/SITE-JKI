<?php include_once"top.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro de Cliente</title>
	
</head>
<body>

	<br>
	<div class="container-fluid">

<?php include_once"form_busca.php"; ?>
<form method="post" name="cliente" action="index.html">

<div class="form col-md-2">	
	<label>Nome</label>	
	<input class="form-control" type="text" name="nome" maxlength="40" required>
	</div>
	<div class="form col-md-2">
	<label>CNPJ</label>	
	<input class="form-control" type="text" id="cnpj"  name="cnpj" required>
	</div>
	<div class="form col-md-2">
	<label>Inscrição Estadual</label>	
	<input class="form-control" type="text" name="inscestadual" id="inscestadual" required>
	</div>
	<div class="form col-md-2">
	<label>Responsável</label>	
	<input class="form-control" type="text" name="responsavel" maxlength="40" required>
	</div>
	<div class="form col-md-2">
	<label>CPF</label>	
	<input class="form-control" type="text" id="cpf" name="cpf" required>
	</div>
	<div class="form col-md-2">
	<label>RG</label>	
	<input class="form-control" type="text" name="rg" id="rg">
	</div>
	<div class="form col-md-2">
	<label>Endereço</label>	
	<input class="form-control" type="text" name="endereco" maxlength="50" required>
	</div>
	<div class="form col-md-2">
	<label>Numero</label>	
	<input class="form-control" type="text" name="num" maxlength="4" required>
	</div>
	<div class="form col-md-2">
	<label>Complemento</label>	
	<input class="form-control" type="text" name="numcomp" maxlength="30">
	</div>
	<div class="form col-md-2">
	<label>Bairro</label>	
	<input class="form-control" type="text" name="bairro" maxlength="30" required>
	</div>
	<div class="form col-md-2">
	<label>Cidade</label>	
	<input class="form-control" type="text" name="cidade" maxlength="30" required>
	</div>
	<div class="form col-md-2">
	<label>Estado</label>	
	<input class="form-control" type="text" name="estado" maxlength="30" required>
	</div>
	<div class="form col-md-2">
	<label>Celular</label>	
	<input class="form-control" id="celular" type="text" name="celular" maxlength="15" required>
	</div>
	<div class="form col-md-2">
	<label>E-mail</label>	
	<input class="form-control" type="text" name="email" maxlength="50" required>
	</div>
	<div class="form col-md-1">
	<label>Observações</label>	
	<input class="form-control" type="text" name="obs" maxlength="50">
	</div>
	<input type="submit" name="enviar" value="Enviar">

	</form></div>
</div>
	<br>
</body>
</html>