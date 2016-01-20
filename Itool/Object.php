<?php
/**
 * 对象关系映射模式,ORM
 */
namespace Itool;

class Object{

	protected $id; // 根据id获取内容
	protected $db; // 数据库句柄
	protected $data; // 存储获取到的数据
	protected $change = false; // 状态

	public function __construct($id){
		$this->db = Factory::getDataBase();
		$res = $this->db->query("select * from user where id = $id limit 1");
		$this->id = $id;
		$this->data = $res->fetch_assoc();
	}

	/**
	 * 通过__get魔术方法将字段转换为变量使用
	 * @param  [type] $key [description]
	 * @return [type]      [description]
	 */
	public function __get($key){
		if (isset($this->data[$key])) {
			return $this->data[$key];
		}
	}

	public function __set($key,$value){
		$this->data[$key] = $value;
		// 将状态更改为true,代表需要改变数据内容
		$this->change = true;
	}

	/**
	 * 通过析构函数将值添加给数据库
	 */
	public function __destruct(){
		if ($this->change) {
			foreach ($this->data as $k => $v) {
				$fields[] = "$k = '{$v}'";
			}
			$this->db->query("update user set " . implode(', ', $fields) . "where
            id = {$this->id} limit 1");
		}
	}
}