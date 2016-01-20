<?php
/**
 * 数据库接口定义
 */
namespace Itool\DataBase;

interface IDataBase{
	function connect($dbname,$host,$user,$pass);
	function query($sql);
	function close();
}