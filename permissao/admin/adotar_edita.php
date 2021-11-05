<?php
//Controle de sessão
session_start();
//$id = $_SESSION['id'];
$nome = $_SESSION['nome'];
$permissao = $_SESSION['permissao'];
if(!isset($nome)){
	header("location: logar.php");
	exit();
}
if($permissao == 1){
	header("location: ../publico/index.php");
}
require_once("conn.class.php");
require_once("adotar.class.php"); 

$id = $_GET['id'];

$adotar = new Adotar;

$adotar->setId($id);

$adotar->edita();

$raca = $adotar->getRaca();
$idade = $adotar->getIdade();
$descricao = $adotar->getDescricao();
$foto = $adotar->getId().".jpg";
?>
<html>
<head>
   <meta charset='UTF-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <script src="script.js"></script>
   <title>Cãofiança</title>
</head>
	<body>
	<div id="geral">

		<div id='menu'>
<ul>
	<li><a href='index.php'>Home</a></li>
	<li class='active'><a href='#'>Editar</a>
<ul>
	<li class='active'><a href='agenda_consulta.php'><span>Editar Agenda</span></a></li>
	<li class='active'><a href='adotar_cadastro.php'><span>Adotar Cadastro</span></a></li>
	<li class='active'><a href='adotar_consulta.php'><span>Consulta de Adotamento</span></a></li>
	<li class='active'><a href='cliente_consulta.php'><span>Cliente Edita</span></a></li>
</ul>
	<li><a href='galeria.php'>Galeria</a></li>
	<li><a href='deslogar.php'>Deslogar</a></li>
</ul>
</div>
	<h4 align="center">Alteração de Cadastro de Usuários</h4>
	<form method="POST" action="adotar_altera.php" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?=$id?>" />
		<!--<input type="hidden" name="atual" value="<?=$idade?>" />-->
		<table align="center">
			<tr>
				<td colspan="2" align="right">* campo(s) obrigatórios</td>
			</tr>
			<tr>
				<td align="right">*Foto:</td>
				<td><input type="file" name="foto"/></td>
			</tr>
			<tr>
				<td align="right">*Raça:</td>
				<td><input type="text" name="raca" value="<?=$raca?>" /></td>
			</tr>
			<tr>
				<td align="right">*Idade:</td>
				<td><input type="text" name="idade" value="<?=$idade?>" /></td>
			</tr>			
			<tr>
				<td align="right">*Descrição:</td>
				<td><textarea name="descricao" rows="5" cols="23"><?=$descricao?></textarea></td>
			</tr>
			<tr>
				<td colspan="2" align="right">
					<input type="submit" value="Alterar" />
				</td>
			</tr>
		</table>
		<p align="center">
			<img src="fotos/<?=$foto?>" width="100" />
		</p>
	<div id="rodape">
		<b><p>Fale Conosco</p>
		<p>Contatos:(048)3223-5555/(048)98547154</p>
		<p>Rod. Siberio nunes, 9857</p>
		<p>Email: Caofianca@gmail.com</p></b>
	</div>
	</div>
	</form>
</body>
</html>