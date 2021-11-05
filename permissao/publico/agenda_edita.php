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
if($permissao == 2){
	header("location: ../admin/index.php");
}
require_once("conn.class.php");
require_once("agenda.class.php"); 

$id = $_GET['id'];

$agenda = new Agenda;

$agenda->setId($id);

$agenda->edita();

$date = $agenda->getDate();
$hora = $agenda->getHora();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
   <meta charset='UTF-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <script src="script.js"></script>
   <title>Cãofiança</title>
      <!-- link calendar resources -->
	<link rel="stylesheet" type="text/css" href="tcal.css" />
	<script type="text/javascript" src="tcal.js"></script> 
</head>
	<body>
	<div id="geral">

		<div id='menu'>
			<ul>
				<li><a href='index.php'>Home</a></li>
				<li class='active'><a href='#'>Serviços</a>
			<ul>
				<li class='active'><a href='agenda_cadastro.php'><span>Agenda</span></a></li>
				<li class='active'><a href='agenda_consulta.php'><span>Consultar a Agenda</span></a></li>
				<li class='active'><a href='adotar.php'><span>adotar</span></a></li>
			</ul>
				<li><a href='galeria.php'>Galeria</a></li>
				<li><a href='deslogar.php'>Deslogar</a></li>
			</ul>
		</div>
	<h4 align="center">Alteração de Cadastro de Usuários</h4>
	<form method="POST" action="agenda_altera.php">
		<input type="hidden" name="id" value="<?=$id?>" />
		<input type="hidden" name="atual" value="<?=$idade?>" />
		<table align="center">
			<tr>
				<td colspan="2" align="right">*Campo(s) obrigatórios</td>
			</tr>
			<tr>
			<td align="right">*Dia:</td>
			<td>
			<div><input type="text" name="date" class="tcal" value="<?=$date?>" /></div>
			</td>
			</tr>
			<tr>
				<td align="right">*Hora:</td>
			<td>
			<select name="hora">
				<option value="1" <?=($hora == '1')?'selected':''?> >09:00</option>
				<option value="2" <?=($hora == '2')?'selected':''?> >10:00</option>
				<option value="3" <?=($hora == '3')?'selected':''?> >11:00</option>
				<option value="4" <?=($hora == '4')?'selected':''?> >12:00</option>
				<option value="5" <?=($hora == '5')?'selected':''?> >13:00</option>
				<option value="6" <?=($hora == '6')?'selected':''?> >14:00</option>
				<option value="7" <?=($hora == '7')?'selected':''?> >15:00</option>
				<option value="8" <?=($hora == '8')?'selected':''?> >16:00</option>
			</select>
			</td>
			</tr>
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