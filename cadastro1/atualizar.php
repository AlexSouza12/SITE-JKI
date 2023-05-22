<?php include_once"config.php"; ?>
<?php
$id = $_POST['id'];
$nome = $_POST['nome'];
$cnpj = $_POST['cnpj'];
$inscestadual = $_POST['inscestadual'];
$responsavel = $_POST['responsavel'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$endereco = $_POST['endereco'];
$num = $_POST['num'];
$numcomp = $_POST['numcomp'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$obs = $_POST['obs'];

$sql = "UPDATE tbclientes SET nome ='$nome', cnpj='$cnpj', inscestadual='$inscestadual', responsavel='$responsavel', cpf='$cpf', rg='$rg', endereco='$endereco', num='$num', numcomp='$numcomp', bairro='$bairro', cidade='$cidade', estado='$estado', celular='$celular', email='$email', obs='$obs' WHERE id ='$id' ";

if (mysqli_query($conn, $sql)){
	echo "<script>alert('Cadastro salvo com sucesso!');window.location = 'addtbc.php?id=$id';</script>";
}else{
	echo "Dados nao enviados" . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>