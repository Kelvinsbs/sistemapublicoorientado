<?php
/*function trataPermissao($n){
	if($n == 1){
		$p = 'Comum';
	}else{
		$p = 'Administrador';
	}
	return $p;
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
//Função que monta o menu dinâmico
function montaMenu($p){
	//$p é a permissão do usuário
	$query = "SELECT * FROM menu";
	$sql = mysqli_query($query);
	$menu = '';
	while($result = mysql_fetch_array($sql)){
		$titulo = $result['titulo'];
		$href = $result['href'];
		$permissao = $result['permissao'];
		//$permissao é permissao do link
		if($p >= $permissao){
			//Se a permissão do usuário for maior ou igual a permissão do link
			if(empty($menu)){
				$menu = '<a href="'.$href.'">'.$titulo.'</a>';
			}else{
				$menu .= '&nbsp;|&nbsp;<a href="'.$href.'">'.$titulo.'</a>';
			}
		}
	}
	return $menu;
}

//Menu dinâmico
function montaMenu(){
	$query = "SELECT * FROM menu";
	$sql = mysqli_query($query);
	$menu = '';
	while($result = mysql_fetch_array($sql)){
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
	$sql = mysqli_query($query);
	$combo = '';
	while($result = mysql_fetch_array($sql)){
		$id = $result['cliente'];
		$nome = $result['nome'];
		if($c == $id){
			$combo .= '<option value="'.$id.'" selected>'.$nome.'</option>';
		}else{
			$combo .= '<option value="'.$id.'">'.$nome.'</option>';
		}
	}
	return $combo;
}*/
//Retorna o nome de uma categoria sabendo seu id
function nomeCategoria($id){
	$query = "SELECT nome FROM clientes WHERE id_cliente =".$id;
	$sql = mysqli_query($query);
	$result = mysql_fetch_array($sql);
	$nome = $result['nome'];
	
	return $nome;
}

?>