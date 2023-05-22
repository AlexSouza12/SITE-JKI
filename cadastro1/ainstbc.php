<?php include_once"config.php"; ?>
<?php
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

$sql = "INSERT INTO tbclientes(nome,cnpj,inscestadual,responsavel,cpf,rg,endereco,num,numcomp,bairro,cidade,estado,celular,email,obs)VALUES('$nome','$cnpj','$inscestadual','$responsavel','$cpf','$rg','$endereco','$num','$numcomp','$bairro','$cidade','$estado','$celular','$email','$obs')";

if (mysqli_query($conn, $sql)){
	header("Location: addtbc.php");
}else{
	echo "Dados nao enviados" . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>