<?php include_once"top.php"; ?>
<?php include_once"config.php"; ?>
<script>
function deletar() {
	if (confirm("Deseja realmente deletar esse cadastro?")) 
		document.forms[0].submit();
	else
		return false}
</script>
<div class="container-fluid">
	<table class="table table-hover" style="width:auto;">
		<thead>
			<tr>
				<th width="5%" style="text-align:left">ID</th>
				<th width="20%" style="text-align:left">Nome</th>
				<th width="10%" style="text-align:left">Celular</th>
				<th width="10%" style="text-align:left">CPF</th>
				<th width="10%" style="text-align:left">Opção</th>
		   </tr>
  	   </thead>
<?php 
$result_nomes = "SELECT * FROM tbclientes";
$resultado = mysqli_query($conn, $result_nomes);
while($linha = mysqli_fetch_array($resultado)){
echo '<thead>
	<tr>
	<th width="5%" style="text-align:left">'.$linha['id'].'</th>
	<th width="20%" style="text-align:left">'.$linha['nome'].'</th>
	<th width="10%" style="text-align:left">'.$linha['celular'].'</th>
	<th width="10%" style="text-align:left">'.$linha['cpf'].'</th>
	<th width="10%" style="text-align:left"><a href="deletar.php?id='.$linha['id'].'" onclick="return deletar();"><input type="button" value="Excluir">    |   <a href="editar.php?id='.$linha['id'].'"><input type="button" value="Editar">
	</th>
</tr>
</thead>';
}
echo '</table>'
?>
   </table>
</div>