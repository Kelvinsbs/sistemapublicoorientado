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
require_once("cliente.class.php"); 

$id = $_GET['id'];

$cliente = new Cliente;

$cliente->setId($id);

$cliente->edita();

$nome = $cliente->getNome();
$username = $cliente->getUsername();
$senha = $cliente->getSenha();
$email = $cliente->getEmail();
$endereco = $cliente->getEndereco();
$telefone = $cliente->getTelefone();
$celular = $cliente->getCelular();
$renda = $cliente->getRenda();
$nascimento = $cliente->getNascimento();
$permissao = $cliente->getPermissao();

$combo = $cliente->comboPermissao($permissao);
?>
<html>
<head>
   <meta charget='UTF-8'>
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
	<form method="POST" action="cliente_altera.php">
		<input type="hidden" name="id" value="<?=$id?>" />
		<input type="hidden" name="atual" value="<?=$username?>" />
		<table align="center">
			<tr>
				<td colspan="2" align="right">* campo(s) obrigatórios</td>
			</tr>
			<tr>
				<td align="right">*Nome:</td>
				<td><input type="text" name="nome" value="<?=$nome?>" /></td>
			</tr>
			<tr>
				<td align="right">*Usuário:</td>
				<td><input type="text" name="username" value="<?=$username?>" /></td>
			</tr>			
			<tr>
				<td align="right">*Senha:</td>
				<td><input type="password" name="senha" value="<?=$senha?>" /></td>
			</tr>
			<tr>
				<td align="right">*Email:</td>
				<td><input type="text" name="email" value="<?=$email?>" /></td>
			</tr>
			<tr>
				<td align="right">*Endereço:</td>
				<td><input type="text" name="endereco" value="<?=$endereco?>" /></td>
			</tr>
			<tr>
				<td align="right">*Telefone:</td>
				<td><input type="text" name="telefone" value="<?=$telefone?>" /></td>
			</tr>
			<tr>
				<td align="right">*Celular:</td>
				<td><input type="text" name="celular" value="<?=$celular?>" /></td>
			</tr>
			<tr>
				<td align="right">*Renda:</td>
				<td><input type="text" name="renda" value="<?=$renda?>" /></td>
			</tr>
			<tr>
				<td align="right">*Nascimento:</td>
				<td><input type="text" name="nascimento" value="<?=$nascimento?>" /></td>
			</tr>
			<tr>
				<td align="right">*Permissão:</td>
				<td>
					<select name="permissao"><?=$combo?></select>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="right">
					<input type="submit" value="Alterar" />
				</td>
			</tr>
		</table>
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