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

$adotar = new Adotar;

$id = $_POST['id'];
$raca = $_POST['raca'];
$idade = $_POST['idade'];
$descricao = $_POST['descricao'];

$temp = $_FILES['foto']['tmp_name'];
$tamanho = $_FILES['foto']['size'];
$maximo = 1000*1024;
$caminho = "./fotos/";

if(empty($raca) || empty($idade) || empty($descricao)){
	$texto = "Campo(s) obrigatório(s) não preenchido(s).";
}else{
	/*$adotar->setRaca($raca);
	$adotar->setIdade($idade);
	$adotar->setDescricao($descricao);*/
	//Atualização dos dados na tabela de produtos do banco sgp
	$query = "UPDATE adotar SET raca = '".$raca."', idade = '".$idade."', descricao = '".$descricao."' WHERE id_animal = ".$id;
	$sql = $adotar->altera($query);
	//mysqli_query -> função nativa do php que executa a query colocada no seu parâmetro
	if($sql){
		$texto = "Cadastro alterado com sucesso.";
	}else{
		$texto = "Erro ao alterar".$query." -> ".mysqli_error();
	}
}
if(!empty($temp)){
if($tamanho > $maximo){
		$texto = "Você não pode fazer upload de arquivo com mais de 1 Mbyte. Seu arquivo atual possui ".round($tamanho/1024)." Kbytes.";
	}else{
		if(move_uploaded_file($temp, $caminho.$id.".jpg")){
			$texto .= "<br />Upload realizado com sucesso";
		}else{
			$texto .= "<br />Não foi possível realizar o upload.";
		}
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

	
	<p align="center"><?=$texto?></p>
			
	<div id="rodape">
		<b><p>Fale Conosco</p>
		<p>Contatos:(048)3223-5555/(048)98547154</p>
		<p>Rod. Siberio nunes, 9857</p>
		<p>Email: Caofianca@gmail.com</p></b>
	</div>
</div>
</body>
<html>
