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

$query = "SELECT id_animal, raca, idade, descricao FROM adotar ORDER BY id_animal";
$sql = mysqli_query($con, $query);
$tabela = '';

$adotar = new Adotar;
$tabela = $adotar->consulta();
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
		<h4 align="center">Consulta de Usuários</h4>
		<div id="cadastro">
			<table border="1" cellspacing="0" align="center">
				<tr>
					<th>Fotos</th>
					<th>Raça</th>
					<th>Idade</th>
					<th>Descrição</th>
					<th>Editar</th>
					<th>Excluir</th>
				</tr>
				<?=$tabela?>
			</table>
		</div>	
	<div id="rodape">
		<b><p>Fale Conosco</p>
		<p>Contatos:(048)3223-5555/(048)98547154</p>
		<p>Rod. Siberio nunes, 9857</p>
		<p>Email: Caofianca@gmail.com</p></b>
	</div>
	</div>
</body>
</html>