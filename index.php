<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>西华二手街--最安全方便的二手市场</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<!-- <script type="text/javascript" src="js/index.js"></script> -->
	<script type="text/javascript" src="js/common.js"></script>
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
</head>
<body>
	<div class="header">
		<a href="/xihua Second hand Street/" class="logo-a"><img class="logo" src="images/logo.png" alt="西华二手街"></a>
		<div class="header-title">
			<h1><b>西华二手街</b></h1>
			<p>最安全方便的二手市场</p>
		</div>
		<form action="#" method="post" class="search">
			<div class="search-text">
				<img src="images/search-icon.png" alt="" />
				<div class="search-input">
					<input type="text" placeholder="搜索你想要的二货">
				</div>
			</div>
			<button class="search-submit" type="submit">搜索</button>
		</form>
		<div class="log-reg">
		    <div id="logReg">
				<div class="button" id="loginButton">登录</div>
				<div class="button" id=regButton>注册</div>
			</div>
			<div id="user">
				<div class="user-img">
					<img src="">
				</div>
				<h4 id="username"></h4>
				<div class="usermain">
					<h3 id="hiusername"></h3>
					<ul>
						<li id="personal">个人中心</li>
						<li id="quit">退出登录</li>
					</ul>
				</div>
		    </div>
		</div>
		<div class="search-hots">
			<span>热门：</span>
			<a class="hots" href="/category2" target="_blank">自行车</a>
			<a class="hots" href="/category3" target="_blank">电动车</a>
			<a class="hots" href="/category6" target="_blank">笔记本</a>
			<a class="hots" href="/category40" target="_blank">教材</a>
		</div>
	</div><!-- header结束 -->
	<div class="sidebar">
		<ul>
		    <li class="li-title">商品分类</li>
			<li class="side-li"><a href="#"><i class="li-icon"><img src="images/1.png" alt=""></i><h5>校园代步</h5></a></li>
			<li class="side-li"><a href="#"><i class="li-icon"><img src="images/2.png" alt=""></i><h5>手机</h5></a></li>
			<li class="side-li"><a href="#"><i class="li-icon"><img src="images/3.png" alt=""></i><h5>电脑</h5></a></li>
			<li class="side-li"><a href="#"><i class="li-icon"><img src="images/4.png" alt=""></i><h5>数码配件</h5></a></li>
			<li class="side-li"><a href="#"><i class="li-icon"><img src="images/5.png" alt=""></i><h5>数码</h5></a></li>
			<li class="side-li"><a href="#"><i class="li-icon"><img src="images/6.png" alt=""></i><h5>电器</h5></a></li>
			<li class="side-li"><a href="#"><i class="li-icon"><img src="images/7.png" alt=""></i><h5>运动健身</h5></a></li>
			<li class="side-li"><a href="#"><i class="li-icon"><img src="images/8.png" alt=""></i><h5>衣物伞帽</h5></a></li>
			<li class="side-li"><a href="#"><i class="li-icon"><img src="images/9.png" alt=""></i><h5>图书教材</h5></a></li>
			<li class="side-li"><a href="#"><i class="li-icon"><img src="images/10.png" alt=""></i><h5>租赁</h5></a></li>
			<li class="side-li"><a href="#"><i class="li-icon"><img src="images/11.png" alt=""></i><h5>生活娱乐</h5></a></li>
			<li class="side-li"><a href="#"><i class="li-icon"><img src="images/12.png" alt=""></i><h5>其他</h5></a></li>
		</ul>
	</div><!-- sidebar结束 -->
	<div class="main">
		<div class="container">
			<div class="container-title">
				<a href="#">最新发布</a>
				<p>-----------------------------------------------------------------------------------------------------</p>
				<h3 id="pubWant">求购专区</h3>
			</div>
			<div class="container-main">
<?php
include 'php/connect.php';
$mysqli->set_charset('utf8');
 $sql="select 个人信息表.头像,发布商品信息表.商品名称,发布商品信息表.价格,发布商品信息表.发布时间,注册表.昵称,发布商品信息表.商品图片 from 注册表 join 发布商品信息表 on 注册表.邮箱号=发布商品信息表.邮箱号 join 个人信息表 on 发布商品信息表.邮箱号=个人信息表.邮箱号";
if($mysqli->multi_query($sql)){
	do{
	    if($mysqli_result=$mysqli->store_result()){
	        $rows[]=$mysqli_result->fetch_all(MYSQL_ASSOC);
	    }
	  }
	while($mysqli->more_results() && $mysqli->next_result());
}
?>
<?php
 foreach ($rows[0] as $goods):
 ?>
				<div class="Goods">
					<div class="Goodsimg">
						<img src="<?php echo substr($goods['商品图片'], 3); ?>">
					</div>
					<span class="Goodsprice">¥<?php echo $goods['价格']; ?></span>
					<div class="Goodsname"><?php echo $goods['商品名称']; ?></div>
					<div class="User">
						<div class="Userimg"><img src="<?php echo $goods['头像']; ?>" alt="" /></div>
						<span class="Username"><?php echo $goods['昵称']; ?></span>
						<span class="Time"><?php echo substr($goods['发布时间'],0,10); ?></span>
					</div>
				</div>
<?php
endforeach;
 ?>
			</div>
		</div><!-- container结束 -->
		<div class="banner">
			<div class="publish">
				<h3 id="pub">我要发布</h3>
			</div>
			<div class="help">
				<img src="images/help.png" alt="">
			</div>
			<div class="download">
				<img src="images/new_web_qrcode.png" alt="下载客户端">
			</div>
		</div><!-- banner结束 -->
		<div class="footer">
			<div class="footer-top">
				<div class="footer-top1"></div>
				<div class="footer-top2"></div>
			</div>
			<a href="#">产品意见反馈</a>
			<p> ©2014-2015 和平科技 版权所有 鄂ICP备14003265号-2 </p>
		</div><!-- footer结束 -->
	</div><!-- main结束 -->
	<div id="returntop">
	</div>
	<div class="login">
		<div class="login-title">
			<img src="images/logo.png" alt="">
			<h4>西华二手街</h4>
		</div>
		<div class="login-main">
			<form method="post" onkeydown="if(event.keyCode==13) return false;">
				<label>邮箱</label>
				<input type="text" name="email" id="emailLogin">
				<br/>
				<label>密码</label>
				<input type="password" name="password" id="passwordLogin">
				<br/>
				<button  type="button" id="buttonLogin">登录二手街</button>
				<br/>
				<a href="#" id="logina">马上注册</a>

			</form>
		</div>
	</div>
	<div class="reg">
		<div class="reg-title">
			<img src="images/logo.png" alt="">
			<h4>西华二手街</h4>
		</div>
		<div class="reg-main">
			<form onkeydown="if(event.keyCode==13) return false;" method="post">
				<input type="text" placeholder="昵称" id="nickname" name="nickname" />
				<br/>
				<input type="text" placeholder="邮箱" id="emailReg" name="emailReg" />
				<br/>
				<input type="password" placeholder="密码" id="passwordReg" name="passwordReg" />
				<br/>
				<input type="password" placeholder="确认密码" id="confirm" />
				<br/>
				<button  type="button" id="buttonReg">注册二手街</button>
				<br/>
				<a href="#" id="rega">立即登录</a>
			</form>
		</div>
	</div>
	<div class="regyes">
		<div class="regyes-title">
			<img src="images/logo.png" alt="">
			<h4>西华二手街</h4>
		</div>
		<div class="regyes-main">
		    <h4>注册成功,欢迎你的到来!</h4>
		    <button  type="submit" id="buttonRegyes">立即登录</button>
		</div>
	</div>
	<div class="trans"></div>
</body>
</html>