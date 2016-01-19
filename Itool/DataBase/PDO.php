<?php
/**
 * 适配器模式之PDO
 */
namesapce Itool\DataBase;

class PDO implements IDataBase{

	protected $conn;//链接句柄

	public function connect($dbname,$host,$user,$pass){
		$conn = new \PDO("mysql:host=$host;dbname=$dbname",$user,$pass);
		$this->conn = $conn;
	}

	public function query($sql){
		return $this->conn->query($sql);
	}

	public function close(){
		unset($this->conn);
	}
}