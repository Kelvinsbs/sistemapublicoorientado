<?php
require_once("conn.class.php");
class Agenda{
	private $conn;
	private $id;
	private $date;
	private $hora;
	
	public function __construct(){
		$this->conn = new Conn;
	}
	//Métodos Set
	function setId($id){
		$this->id = $id;
	}
	function setDate($date){
		$this->date = $date;
	}
	function setHora($hora){
		$this->hora = $hora;
	}
	
	//Métodos Get
	
	function getId(){
		return $this->id;
	}
	function getDate(){
		return $this->date;
	}
	function getHora(){
		return $this->hora;
	}
	/*
		bagulho de logar 
	*/
	public function cadastra(){
		$query = "INSERT INTO agenda VALUES(0, '".$this->date."', '".$this->hora."')";
		$sql = $this->conn->query($query);
			
		return $sql;
	}
	/*function trataPermissao($n){
		if($n == 1){
			$p = 'Comum';
		}else{
			$p = 'Administrador';
		}
		return $p;
	}*/
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
	public function consulta(){
		$query = "SELECT id_cliente, date, hora FROM agenda ORDER BY date";
		$sql = $this->conn->query($query);
		$tabela = '';
		while($result = $this->conn->fetch($sql)){
			$this->setId($result->id_cliente);
			$this->setDate($result->date);
			$this->setHora($result->hora);
			//$this->hora = trataHora($result['hora']);
			

			$tabela .= '<tr align="center">
							<td>'.$this->date.'</td>
							<td>'.$this->trataHora($this->hora).'</td>
							<td><a href="agenda_edita.php?id='.$this->id.'">Editar</a></td>
							<td><a href="agenda_exclui.php?id='.$this->id.'">Excluir</a></td>
						</tr>';
			}
		return $tabela;
	}


	public function edita(){
		$query = "SELECT * FROM agenda WHERE id_cliente = ".$this->id;
		$sql = $this->conn->query($query);
		$result = $this->conn->fetch($sql);

		$this->setId($result->id_cliente);
		$this->setDate($result->date);
		$this->setHora($result->hora);
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

	public function altera($query){
		$sql = $this->conn->query($query);
		return $sql;
	}
	public function exclui(){
		$query = "DELETE FROM agenda WHERE id_cliente = ".$this->id;
		$sql = $this->conn->query($query);
		
		return $sql;
	}
}
?>