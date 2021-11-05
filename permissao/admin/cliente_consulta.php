<?php
//Controle de sessão
session_start();
//$id_cliente = $_SESSION['id_cliente'];
$nome = $_SESSION['nome'];
if(!isset($nome)){
	header("location: logar.php");
	exit();
}
//Só acessa essa página quem tem permissão superior a 1
require("conn.class.php");
require("cliente.class.php");

$cliente = new Cliente;

$tabela = $cliente->consulta();
/*
$query = "SELECT id_cliente, nome, username, senha, email, endereco, telefone, celular, renda, nascimento, permissao FROM clientes ORDER BY nome";
$sql = mysqli_query($query);

while($result = mysql_fetch_array($sql)){
	$id = $result['id_cliente'];
	$nome = $result['nome'];
	$username = $result['username'];
	$senha = $result['senha'];
	$email = $result['email'];
	$endereco = $result['endereco'];
	$telefone = $result['telefone'];
	$celular = $result['celular'];
	$renda = $result['renda'];
	$nascimento = $result['nascimento'];
	$permissao = $result['permissao'];

	
	$tabela .= '<tr align="center">
					<td>'.$nome.'</td>
					<td>'.$username.'</td>
					<td>'.$senha.'</td>
					<td>'.$email.'</td>
					<td>'.$endereco.'</td>
					<td>'.$telefone.'</td>
					<td>'.$celular.'</td>
					<td>'.$renda.'</td>
					<td>'.$nascimento.'</td>
					<td>'.$permissao.'</td>
					<td><a href="cliente_edita.php?id='.$id.'">Editar</a></td>
					<td><a href="cliente_exclui.php?id='.$id.'">Excluir</a></td>
				</tr>';
} 
*/
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
		<h4 align="center">Consulta de Usuários</h4>
		<div id="cadastro">
			<table border="1" cellspacing="0" align="center">
				<tr>
					<th>Nome</th>
					<th>Usuário</th>
					<th>Senha</th>
					<th>Email</th>
					<th>Endereço</th>
					<th>Telefone</th>
					<th>Celular</th>
					<th>Renda</th>
					<th>Nascimento</th>
					<th>Permissão</th>
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