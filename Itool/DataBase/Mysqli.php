<?php
/**
 * 适配器模式之mysqli
 */
namespace Itool\DataBase;

class Mysqli implements IDataBase{
	
	protected $conn;
	public function connect($host,$user,$pass,$dbname){
		$conn = mysqli_connect($host,$user,$pass,$dbname);
		$this->conn = $conn;
	}

	public function query($sql){
		$res = mysqli_query($this->conn,$sql);
		return $res;
	}

	public function close(){
		unset($this->conn);
	}
}