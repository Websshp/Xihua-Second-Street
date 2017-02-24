<?php
header("Content-type:text/html;charset=utf-8");
include 'connect.php';
$mysqli->set_charset('utf8');
session_start();
$email=$_SESSION['emailLogin'];
$file = $_FILES['file'];
$name = $file['name'];
$type = strtolower(substr($name,strrpos($name,'.')+1));
$allow_type = array('jpg','jpeg','gif','png');
if(!in_array($type, $allow_type)){
  return ;
}
if(!is_uploaded_file($file['tmp_name'])){
  return ;
}
$upload_path = "../userphoto/";
move_uploaded_file($file['tmp_name'],$upload_path.$file['name']);
$src=$upload_path.$file['name'];
$goodsName=$_POST['goodsName'];
$goodsDepict=$_POST['goodsDepict'];
$loco=$_POST['loco'];
$price=$_POST['price'];
$classify=$_POST['classify'];
$radio=$_POST['radio'];
$phone=$_POST['phone'];
$qq=$_POST['qq'];
date_default_timezone_set('PRC');//解决时差问题
$time=date('Y-m-d H:i:s', time());
$sql="insert into 发布商品信息表 values('$email','$goodsName','$goodsDepict','$loco','$price','$classify','$radio','$phone','$qq','$src','$time')";
$req=$mysqli->query($sql);
if ($req) {
	echo "1";
} else {
	echo "0";
}
 ?>
