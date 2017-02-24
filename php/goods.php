<!DOCTYPE html>
<?php
session_start();
$goodsname=$_SESSION['goodsname'];
$nickname=$_SESSION['name'];
$price=$_SESSION['price'];
$time=$_SESSION['time'];
$goodsimg=$_SESSION['goodsimg'];
$xiaodao=$_SESSION['xiaodao'];
$loco=$_SESSION['loco'];
$iphone=$_SESSION['iphone'];
$QQ=$_SESSION['QQ'];
 ?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>西华二手街--最安全方便的二手市场</title>
	<link rel="stylesheet" type="text/css" href="../css/index.css">
	<link rel="stylesheet" type="text/css" href="../css/goods.css">
	<script type="text/javascript" src="../js/common.js"></script>
	<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
	<style type="text/css">
		#user{
			display: block;
		}
	</style>
</head>
<body>
	<div class="header">
		<a href="/xihua Second hand Street/" class="logo-a"><img class="logo" src="../images/logo.png" alt="西华二手街"></a>
		<div class="header-title">
			<h1><b>西华二手街</b></h1>
			<p>最安全方便的二手市场</p>
		</div>
		<form action="#" method="post" class="search">
			<div class="search-text">
				<img src="../images/search-icon.png" alt="" />
				<div class="search-input">
					<input type="text" placeholder="搜索你想要的二货">
				</div>
			</div>
			<button class="search-submit" type="submit">搜索</button>
		</form>
		<div class="log-reg">
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
		<script type="text/javascript">
			$.ajax({
				url:'../php/status.php',
				data:{
				},
				dataType:"json",
				type:'POST',
			    success:function(data){
			    	if (data=='0') {
			    		return false;
			    	}
			    	else{
			    		var img=data.img;
			    		img="../"+img;
			    		var nickname=data.nickname;
			    		$('#user').css("display","block");
			    		$(".user-img").find("img").attr("src",img);
			    		document.getElementById('username').innerHTML=nickname;
			    		document.getElementById('hiusername').innerHTML='嗨,'+nickname;
			    	}
			    },
			    error:function(XMLHttpRequest, textStatus, errorThrown) {
                        alert("请求失败!");
                    }
			});
			$('#user').hover(function(){
			$('.log-reg').css('border-bottom','2px solid #3EB196');
			$('.usermain').css('display','block');
		    },function(){
			$('.log-reg').css('border-bottom','none');
			$('.usermain').css('display','none');
		    });
		    $('#quit').bind("click",function(){
		        $.ajax({
					url:'php/quit.php',
					data:{
					},
					dataType:"text",
					type:'POST',
				    success:function(){
				    	    window.location.href="index.html";
				    },
				    error:function(XMLHttpRequest, textStatus, errorThrown) {
	                        alert("请求失败!");
	                    }
				})
			});
	    </script>
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
			<li class="side-li"><a href="#"><i class="li-icon"><img src="../images/1.png" alt=""></i><h5>校园代步</h5></a></li>
			<li class="side-li"><a href="#"><i class="li-icon"><img src="../images/2.png" alt=""></i><h5>手机</h5></a></li>
			<li class="side-li"><a href="#"><i class="li-icon"><img src="../images/3.png" alt=""></i><h5>电脑</h5></a></li>
			<li class="side-li"><a href="#"><i class="li-icon"><img src="../images/4.png" alt=""></i><h5>数码配件</h5></a></li>
			<li class="side-li"><a href="#"><i class="li-icon"><img src="../images/5.png" alt=""></i><h5>数码</h5></a></li>
			<li class="side-li"><a href="#"><i class="li-icon"><img src="../images/6.png" alt=""></i><h5>电器</h5></a></li>
			<li class="side-li"><a href="#"><i class="li-icon"><img src="../images/7.png" alt=""></i><h5>运动健身</h5></a></li>
			<li class="side-li"><a href="#"><i class="li-icon"><img src="../images/8.png" alt=""></i><h5>衣物伞帽</h5></a></li>
			<li class="side-li"><a href="#"><i class="li-icon"><img src="../images/9.png" alt=""></i><h5>图书教材</h5></a></li>
			<li class="side-li"><a href="#"><i class="li-icon"><img src="../images/10.png" alt=""></i><h5>租赁</h5></a></li>
			<li class="side-li"><a href="#"><i class="li-icon"><img src="../images/11.png" alt=""></i><h5>生活娱乐</h5></a></li>
			<li class="side-li"><a href="#"><i class="li-icon"><img src="../images/12.png" alt=""></i><h5>其他</h5></a></li>
		</ul>
	</div><!-- sidebar结束 -->
	<div class="main">
		<div class="container">
			<div class="container-title">
			</div>
			<div class="container-main">
				<div class="GoodsImage">
				  <img src="<?php echo $goodsimg; ?>" alt="">
				</div>
				<div class="GoodsInfor">
					<div class="GoodsInfortit">
						<p><?php echo $goodsname; ?></p>
						<span class="price"><?php echo $price; ?></span>
						<span class="jj"><?php echo $xiaodao; ?></span>
					</div>
					<div class="GoodsInformain">
						<sapn>交易地点</sapn>
						<sapn>卖家</sapn>
						<sapn>手机</sapn>
						<sapn>QQ</sapn>
						<sapn>发布时间</sapn>
					</div>
					<div class="Informain">
						<sapn><?php echo $loco; ?></sapn>
						<sapn><?php echo $nickname; ?></sapn>
						<sapn><?php echo $iphone; ?></sapn>
						<sapn><?php echo $QQ; ?></sapn>
						<sapn><?php echo $time; ?></sapn>
					</div>
				</div>
			</div>

		</div><!-- container结束 -->
		<div class="banner">
			<div class="help">
				<img src="../images/help.png" alt="">
			</div>
			<div class="download">
				<img src="../images/new_web_qrcode.png" alt="下载客户端">
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
</body>
</html>