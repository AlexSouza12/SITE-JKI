<?php include_once"config.php"; ?>
<?php
$id = $_GET['id'];
$sql = "DELETE FROM tbclientes WHERE id ='$id'";
if (mysqli_query($conn, $sql)) {echo "<script>alert('Cadastro deletado com sucesso!');window.location = 'addtbc.php?id=$id';</script>";
}else{
	echo 'Falha ao excluir';	
}
?>