<?php
header("Content-type:application/json;charset=utf-8");
session_start();
if (isset($_SESSION['emailLogin'])) {
	$emailLogin=$_SESSION['emailLogin'];
	$nickname=$_SESSION['nickname'];
    $img=$_SESSION['img'];
    echo json_encode(array('emailLogin' => "$emailLogin",'nickname'=>"$nickname",'img'=>"$img"));
} else {
	echo "0";
}
 ?>