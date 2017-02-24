<?php
header("Content-type:application/json;charset=utf-8");
include 'connect.php';
$mysqli->set_charset('utf8');
$avatar=array("images/avatar0.png",
	          "images/avatar1.png",
	          "images/avatar2.png",
	          "images/avatar3.png",
	          "images/avatar4.png",
	          "images/avatar5.png",
	          "images/avatar6.png" );
$n=rand(0,6);
$img=$avatar[$n];
$nickname=$_POST['nickname'];
$emailReg=$_POST['emailReg'];
$passwordReg=$_POST['passwordReg'];
$sql1="insert into 注册表 values('$emailReg','$nickname','$passwordReg',1)";
$sql2="insert into 个人信息表 values('$emailReg','','','$img')";
$mysqli->query($sql1);
$mysqli->query($sql2);
?>