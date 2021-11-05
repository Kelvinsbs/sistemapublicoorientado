<?php
//Menu dinâmico
function montaMenu(){
	$query = "SELECT * FROM menu";
	$sql = mysqli_query($con, $query);
	$menu = '';
	while($result = mysqli_fetch_array($sql)){
		$nome = $result['nome'];
		$pagina = $result['pagina'];
		if(empty($menu)){
			$menu = '<a href="'.$pagina.'">'.$nome.'</a>';
		}else{
			$menu .= '&nbsp;|&nbsp;<a href="'.$pagina.'">'.$nome.'</a>';
		}
	}
	return $menu;
}
//Combo dinâmica de categorias
function comboCategorias($c = 0){
	$query = "SELECT * FROM clientes ORDER BY nome";
	$sql = mysqli_query($con, $query);
	$combo = '';
	while($result = mysqli_fetch_array($sql)){
		$id = $result['id_categoria'];
		$nome = $result['nome'];
		if($c == $id){
			$combo .= '<option value="'.$id.'" selected>'.$nome.'</option>';
		}else{
			$combo .= '<option value="'.$id.'">'.$nome.'</option>';
		}
	}
	return $combo;
}
//Retorna o nome de uma categoria sabendo seu id
function nomeCategoria($id){
	$query = "SELECT nome FROM clientes WHERE id_cliente =".$id;
	$sql = mysqli_query($con, $query);
	$result = mysqli_fetch_array($sql);
	$nome = $result['nome'];
	
	return $nome;
}
function comboPermissao($p){
	$vetor_p = array("1" => "Comum", "2" => "Administrador");
	$combo = '<option value="0">Selecione</option>';
	foreach($vetor_p as $indice => $valor){
		if($indice == $p){
			$combo .= '<option value="'.$indice.'" selected>'.$valor.'</option>';
		}else{
			$combo .= '<option value="'.$indice.'">'.$valor.'</option>';
		}
	}
	return $combo;
}
function trataDia($n){
	switch($n){
		case "1": $d = "Segunda";
		break;
		case "2": $d = "Terça";
		break;
		case "3": $d = "Quarta";
		break;
		case "4": $d = "Quinta";
		break;
		case "5": $d = "Sexta";
		break;
	}
	return $d;
}
function trataHora($n){
	switch($n){
		case "1": $d = "09:00";
		break;
		case "2": $d = "10:00";
		break;
		case "3": $d = "11:00";
		break;
		case "4": $d = "12:00";
		break;
		case "5": $d = "13:00";
		break;
		case "6": $d = "14:00";
		break;
		case "7": $d = "15:00";
		break;
		case "8": $d = "16:00";
		break;
	}
	return $d;
}

?>