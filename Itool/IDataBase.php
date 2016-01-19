<?php
/**
 * 数据库接口定义
 */
namesapce Itool;

interface IDataBase{
	function connect($dbname,$host,$user,$pass);
	function query($sql);
	function close();
}