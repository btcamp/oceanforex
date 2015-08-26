<?php
$success = $_GET ["success"];
$name = $_GET ["name"];
$email = $_GET ["email"];
$pwd = $_GET ["pwd"];
$returnurl = isset ( $_GET ["returnurl"] ) ? $_GET ["returnurl"] : "";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户中心 / 开设账户提示_OceanForex - Currency Trading Broker</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="stylesheet" type="text/css"
	href="/templets/jinrong/imgcssjs/common.css" />
<link rel="stylesheet" type="text/css"
	href="/assets/css/bootstrap.min.css" />
<script type="text/javascript"
	src="/templets/jinrong/imgcssjs/jquery.min.js"></script>
<script type="text/javascript"
	src="/templets/jinrong/imgcssjs/global.js"></script>
<script type="text/javascript"
	src="/templets/jinrong/imgcssjs/jquery.scrollfollow.js"></script>
<script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
<!--[if IE 6]>
<script type="text/javascript" src="/templets/jinrong/imgcssjs/iepng.js"></script>
<![endif]-->
<style>
.quick LI .i00 {
	BACKGROUND-IMAGE: url(/images/account.png);
}
</style>
<SCRIPT type="text/javascript">
	window.onload = function(){
	var url = '<?php echo $returnurl?>';
	if(url!=""){
setTimeout(function(){
	location.href= url;
	
},2000);
		}
		}
</SCRIPT>
</head>
<body>
	<!--head.htm-->
	
	<?php include "header.php";?>
	<?php include "nav.php";?>
	<!--head.htm end-->
	<div class="wraper-hd"></div>
	<div class="wraper">
		<div class="sub-banner">
			<img alt="" src="/templets/jinrong/imgcssjs/accounts.jpg" />
		</div>
		<div class="main clearfix">
			<!--leftside.htm-->
			<?php include 'leftbar.php';?>
			<!--leftside.htm end-->
			<div class="article-detail">
				<h1>用户注册提示</h1>
				<div class="article-content biaoge">
					<form action="/account/changepwd.php" enctype="multipart/form-data"
						method="post" class="form-horizontal">
					<?php
					if ($success) {
						echo '<div><div style="font-family: helvetica, tahoma, arial, sans-serif; font-size: medium;"><div><div><font size="2" face="楷体_GB2312"><font style="line-height: normal;"><font style="line-height: 21px;">尊敬的&nbsp;</font></font><span style="line-height: 21px;"><b>' . $name . '&nbsp;</b></span><span style="line-height: 1.5;">先生/女士</span><strong style="line-height: 1.5;">：</strong></font></div><div style="line-height: normal;"><font size="2" face="楷体_GB2312"><font style="line-height: 21px;"><br></font></font></div><div><font size="2" face="楷体_GB2312"><font style="line-height: 21px;">您好！ 非常感谢您</font><font style="line-height: 21px;">开设</font><span style="line-height: 21px;">Oceanforex</span><span style="line-height: 21px;">交易账户，我们将在1-2个工作日内审核你的开户信息，届时将以邮件的形式告诉您MT4交易帐号和密码。请认真核对您的账户信息，如有错误请联系我们，如下：</span></font></div><div><font size="2" face="楷体_GB2312"><br style="line-height: 23.3240013122559px;"><ul><li><font style="line-height: 21px;">[开户姓名]:</font><span style="line-height: 1.5;"></span><span style="line-height: 21px;">' . $name . '</span><span style="line-height: 1.5;">&nbsp;</span></li><li><span style="line-height: 1.5;">[登录账户]</span><font style="line-height: 21px;">:</font><span style="line-height: 1.5;">&nbsp;' . $email . '</span></li><li><span style="line-height: 1.5;">[登录密码]</span><font style="line-height: 21px;">:</font><span style="line-height: 1.5;">&nbsp;' . $pwd . '</span></li></ul></font></div><div><font size="2" face="楷体_GB2312"><br style="line-height: 23.3240013122559px;"><font style="line-height: 21px;">在审核通过之后，您可以登录</font><span style="line-height: 24px;">Oceanforex</span><font style="line-height: 21px;">网站选择您的入金方式，然后可以登录MT4客户终端进行交易，欢迎您加入Oceanforex，预祝您交易愉快！</font></font></div></div><div style="line-height: normal; font-size: 14px;"><font face="楷体_GB2312"></font></div></div><div style="line-height: normal; font-family: helvetica, tahoma, arial, sans-serif;"><font face="宋体"><span style="line-height: 23.3240013122559px;"><br></span></font></div></div><div><includetail><!--<![endif]--></includetail></div>';
						echo '';
					} else {
						echo '您提交的资料有误，请重新提交';
					}
					?>
					<div class="form-group">
							<div class="col-sm-offset-3 col-sm-9" style="text-align: right">
								<a href="/" class='btn btn-link'>返回首页</a>

							</div>
						</div>
					</form>
				</div>
			</div>
			<!--rightside.htm-->
			<div class="rightbar scrollbar">
				<div class="rbox">
					<h3>Get Started Today!</h3>
					<div class="small-bn">
						<a href="/kaishezhanghu/zhucemonizhanghao">
							<img src="/templets/jinrong/imgcssjs/small_bn_01.png"
								alt="申请外汇模拟账户" />
							<img class="hide"
								src="/templets/jinrong/imgcssjs/small_bn_01_hover.png"
								alt="开设模拟交易账户" />
						</a>
					</div>
					<div class="small-bn">
						<a href="/kaishezhanghu/zhucezhenshizhanghu">
							<img src="/templets/jinrong/imgcssjs/small_bn_02.png"
								alt="开设真实交易帐户" />
							<img class="hide"
								src="/templets/jinrong/imgcssjs/small_bn_02_hover.png"
								alt="开设真实交易账户" />
						</a>
					</div>
				</div>
				<div class="contact-info">
					<dl>
						<dt>中文服务：</dt>
						<dd>客服邮箱：Service@oceanforex.com</dd>
					</dl>
					<dl>
						<dd>联系电话：400-082-9028</dd>
					</dl>
					<dl>
						<dt>新西兰总部：</dt>
						<dd>Level 15, BDO Building, 120 Albert Street, Auckland, 1010,New
							Zealand</dd>
					</dl>

					<a class="btn-sv" href="/guanyuwomen/lianxiwomen">在线联络</a>
					<script src="/templets/jinrong/imgcssjs/LiveChat.js"
						type="text/javascript"></script>
				</div>
			</div>
			<!--rightside.htm end-->
		</div>
		<div class="layout parners clearfix">
			<h4>我们的伙伴</h4>
			<a class="btn-prev" href="/#">prev</a>
			<a class="btn-next" href="/#">next</a>
			<div class="parners-list">
				<ul class="clearfix">
					<li>
						<a href="http://www.baidu.com" target="_blank">
							<img src="/templets/jinrong/imgcssjs/pn_03_hover.jpg" width="120"
								height="50" border="0" />
							<img src="/templets/jinrong/imgcssjs/pn_03_hover.jpg" width="120"
								height="50" border="0" class="hide" />
						</a>
					</li>
					<li>
						<a href="http://www.baidu.com" target="_blank">
							<img src="/templets/jinrong/imgcssjs/pn_01_hover.jpg" width="120"
								height="50" border="0" />
							<img src="/templets/jinrong/imgcssjs/pn_01_hover.jpg" width="120"
								height="50" border="0" class="hide" />
						</a>
					</li>
					<li>
						<a href="http://www.baidu.com" target="_blank">
							<img src="/templets/jinrong/imgcssjs/pn_02_hover.jpg" width="120"
								height="50" border="0" />
							<img src="/templets/jinrong/imgcssjs/pn_02_hover.jpg" width="120"
								height="50" border="0" class="hide" />
						</a>
					</li>
					<li>
						<a href="http://www.baidu.com" target="_blank">
							<img src="/templets/jinrong/imgcssjs/pn_01_hover.jpg" width="120"
								height="50" border="0" />
							<img src="/templets/jinrong/imgcssjs/pn_01_hover.jpg" width="120"
								height="50" border="0" class="hide" />
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="wraper-ft"></div>
	﻿
	<!--footer.htm-->
	<div class="footer">
		<b>外汇交易</b>
		是具有较高风险的投资行为以杠杆场外交易即期外币合约进行投资和交易是投机性的,具有高度风险性,通常只适合于能够承担超过
		<br />
		其保证金存款损失风险的人士.鉴于存在这些风险,OceanForex外汇平台建议您在充分了解外汇交易的潜在风险程度后才决定是否进行外汇交易.同时场外外汇交易对于某些客户并不合适.
		<br />
		客户应该根据个人经验/投资目标/资金来源和其它相关情况仔细地考虑这类外汇交易是否适合您.您应该很清楚地认识到外汇交易的风险.
		<br />
		如果您有任何疑问，请不要犹豫，随时与我们联络，或者咨询您独立的财务顾问以获取建议。
		<br />

	</div>
	<!--footer.htm end-->
	<script type="text/javascript">
		//合作伙伴滚动
		$(function() {
			$(".parners-list").jCarouselLite({
				btnNext : ".btn-prev",
				btnPrev : ".btn-next",
				auto : 4000,
				visible : 5
			});
			$("input[name='submit']").click(function() {
				var oldpwd = $("#oldpwd").val();
				var newpwd = $("#newpwd").val();
				var confirmnewpwd = $("#confirmnewpwd").val();
				var rnumber = /[0-9]+/;
				var rchar = /[a-zA-Z]+/;
				if (oldpwd == "" || oldpwd == null) {
					alert("旧密码不能为空");
					return false;
				}
				if (newpwd == "" || newpwd == null) {
					alert("新密码不能为空");
					return false;
				}
				if(newpwd!=confirmnewpwd){
					alert("两次输入密码不一致，请重新输入");
					return false;
					}
				if(!(rnumber.test(newpwd)&&rchar.test(confirmnewpwd))){
					alert("新密码过于简单，请重新输入由字母和数字组成的密码");
					return false;
					}
			});
		});
		//侧栏滚动
		if ($(".main").height() > 700) {
			$(document).ready(function() {
				$('.scrollbar').scrollFollow({});
			});
		}
	</script>

</body>
</html>