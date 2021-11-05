<?php

require_once("conn.class.php");
require_once("cliente.class.php");

$nome = $_POST['nome'];
$username = $_POST['username'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$renda = $_POST['renda'];
$nascimento = $_POST['nascimento'];

$cliente = new Cliente;


//empty -> função nativa do PHP que verifica se a variável colocada no parâmetro está vazia
if(empty($nome) || empty($username) || empty($senha) || empty($email) || empty($endereco) || empty($telefone) || empty($celular) || empty($renda) || empty($nascimento)){
	$texto = "Campo(s) obrigatório(s) não preenchido(s).";
}else{
	$cliente->setNome($nome);
	$cliente->setUsername($username);
	$cliente->setSenha($senha);
	$cliente->setEmail($email);
	$cliente->setEndereco($endereco);
	$cliente->setTelefone($telefone);
	$cliente->setCelular($celular);
	$cliente->setRenda($renda);
	$cliente->setNascimento($nascimento);
	
	$sql = $cliente->cadastra();
	//mysqli_query -> função nativa do php que executa a query colocada no seu parâmetro
	$id = mysqli_insert_id();
	if($sql){
		$texto = "Cadastro realizado com sucesso.";
	}else{
		$texto = "Erro ao cadastrar".$query;
	}
}
?>
<!doctype html>
<html lang=''>
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
	<li class='active'><a href='logar.php'>Serviços</a>
	<li><a href='galeria.php'>Galeria</a></li>
	<li><a href='logar.php'>Logar</a></li>
</ul>
</div>

		<p align="center"> <?=$texto?></p>
	<div id="rodape">
		<b><p>Fale Conosco</p>
		<p>Contatos:(048)3223-5555/(048)98547154</p>
		<p>Rod. Siberio nunes, 9857</p>
		<p>Email: Caofianca@gmail.com</p></b>
	</div>
</div>
		</body>
<html>