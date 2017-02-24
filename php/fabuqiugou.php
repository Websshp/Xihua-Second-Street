<?php 
header("Content-type:text/html;charset=utf-8");
include 'connect.php';
$mysqli->set_charset('utf8');
session_start();
$email=$_SESSION['emailLogin'];
$goodsName=$_POST['goodsName'];
$goodsDepict=$_POST['goodsDepict'];
$expectedPrice=$_POST['expectedPrice'];
$loco=$_POST['loco'];
$phone=$_POST['phone'];
$qq=$_POST['qq'];
date_default_timezone_set('PRC');//解决时差问题
$time=date('Y-m-d H:i:s', time());
$sql="insert into 求购表 values('$email','$goodsName','$goodsDepict','$expectedPrice','$loco','$phone','$qq','$time')";
$req=$mysqli->query($sql);
if ($req) {
	echo "1";
} else {
	echo "0";
}

 ?>