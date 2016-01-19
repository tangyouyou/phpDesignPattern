<?php
/**
 * 适配器模式
 */
namespace Itool\DataBase;

class Mysql implements IDataBase{

	protected $conn;

	public function connect($dbname,$host,$user,$pass){
		$conn = mysql_connect($host,$user,$pass);
		mysql_select_db($dbname,$conn);
		$this->conn = $conn;
	}

	public function query($sql){
		$res = mysql_query($sql,$this->conn);
		return $res;
	}

	public function close(){
		mysql_close($this->conn);
	}
}