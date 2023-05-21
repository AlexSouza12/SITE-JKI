<?php include_once"config.php"; ?>
<?php include_once"top.php"; ?>
<?php
$id = $_GET['id'];
$conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
mysqli_set_charset($conn, "utf8");
$result_nomes = "SELECT * FROM tbclientes WHERE id = '$id' LIMIT 1";
$resultado_nomes = mysqli_query($conn, $result_nomes);
while($linha = mysqli_fetch_array($resultado_nomes)){
	$id = $linha['id'];
	$nome = $linha['nome'];
	$cnpj = $linha['cnpj'];
	$inscestadual = $linha['inscestadual'];	
	$responsavel = $linha['responsavel'];
	$cpf = $linha['cpf'];
	$rg = $linha['rg'];
	$endereco = $linha['endereco'];
	$num = $linha['num'];
	$numcomp = $linha['numcomp'];
	$bairro = $linha['bairro'];
	$cidade = $linha['cidade'];
	$estado = $linha['estado'];
	$celular = $linha['celular'];
	$email = $linha['email'];
	$obs = $linha['obs'];
};
?>
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

<form method="post" name="cliente" action="atualizar.php">

<div class="form col-md-2">	
	<label>Nome</label>	
	<input class="form-control" type="text" name="nome" maxlength="40" value="<?php echo $nome;?>"	required>
	</div>
	<input type="hidden" name="id" value="<?php echo $id;?>">
	<div class="form col-md-2">
	<label>CNPJ</label>	
	<input class="form-control" type="text" id="cnpj"  name="cnpj" value="<?php echo $cnpj;?>" required>
	</div>
	<div class="form col-md-2">
	<label>Inscrição Estadual</label>	
	<input class="form-control" type="text" name="inscestadual" id="inscestadual" value="<?php echo $inscestadual;?>" required>
	</div>
	<div class="form col-md-2">
	<label>Responsável</label>	
	<input class="form-control" type="text" name="responsavel" maxlength="40" value="<?php echo $responsavel;?>" required>
	</div>
	<div class="form col-md-2">
	<label>CPF</label>	
	<input class="form-control" type="text" id="cpf" name="cpf" value="<?php echo $cpf;?>" required>
	</div>
	<div class="form col-md-2">
	<label>RG</label>	
	<input class="form-control" type="text" name="rg" id="rg" value="<?php echo $rg;?>">
	</div>
	<div class="form col-md-2">
	<label>Endereço</label>	
	<input class="form-control" type="text" name="endereco" maxlength="50" value="<?php echo $endereco;?>" required>
	</div>
	<div class="form col-md-2">
	<label>Numero</label>	
	<input class="form-control" type="text" name="num" maxlength="4" value="<?php echo $num;?>" required>
	</div>
	<div class="form col-md-2">
	<label>Complemento</label>	
	<input class="form-control" type="text" name="numcomp" value="<?php echo $numcomp;?>" maxlength="30">
	</div>
	<div class="form col-md-2">
	<label>Bairro</label>	
	<input class="form-control" type="text" name="bairro" maxlength="30" value="<?php echo $bairro;?>" required>
	</div>
	<div class="form col-md-2">
	<label>Cidade</label>	
	<input class="form-control" type="text" name="cidade" maxlength="30" value="<?php echo $cidade;?>" required>
	</div>
	<div class="form col-md-2">
	<label>Estado</label>	
	<input class="form-control" type="text" name="estado" maxlength="30" value="<?php echo $estado;?>" required>
	</div>
	<div class="form col-md-2">
	<label>Celular</label>	
	<input class="form-control" id="celular" type="text" name="celular" maxlength="15" value="<?php echo $celular;?>" required>
	</div>
	<div class="form col-md-2">
	<label>E-mail</label>	
	<input class="form-control" type="text" name="email" maxlength="50" value="<?php echo $email;?>" required>
	</div>
	<div class="form col-md-1">
	<label>Observações</label>	
	<input class="form-control" type="text" name="obs" maxlength="50" value="<?php echo $obs;?>">
	</div>
	<input type="submit" name="enviar" value="Salvar">

	</form></div>
</div>
	<br>
</body>
</html>

