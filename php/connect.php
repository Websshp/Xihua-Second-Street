<?php 
$mysqli=new mysqli('localhost','root','','xihua second hand street');
if($mysqli->connect_errno){
	die('数据库连接失败!'.$mysqli->connect_error);
}
?>