<?php
session_start ();

require_once (dirname ( __FILE__ ) . "/../../include/common.inc.php");
require_once (dirname ( __FILE__ ) . '/../../include/oxwindow.class.php');

if (isset ( $_SESSION ["account"] )) {
	$id = $_SESSION ["account"];
} else {
	ShowMsg ( "Need to log in, please login ！", "/open_account/login", 0, 2000 );
	exit ();
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Account center / ChangePassword_OceanForex - Currency Trading
	Broker</title>
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
</head>
<body>
	<!--head.htm-->
	<style>
.quick LI .i00 {
	BACKGROUND-IMAGE: url(/images/account.png);
}
</style>
	<div class="header">
		<div class="head-layout clearfix">
			<div class="logo">
				<a href="/" target="_self">
					<img src="/templets/jinrong/imgcssjs/logo.png" />
				</a>
			</div>
			<ul class="quick">
				<li id="account">
					<a href="/open_account/login/" target="_self">
						<i class="i00"></i>
						<span id='text'>Login</span>
					</a>
				</li>
				<li>
					<a href="/open_account/open_demoaccount/" target="_self">
						<i class="i01"></i>
						Demo Account
					</a>
				</li>
				<li>
					<a href="/open_account/open_realaccount/" target="_self">
						<i class="i02"></i>
						Real Account
					</a>
				</li>
				<li>
					<a href="/trading_platform/MT4/" target="_self">
						<i class="i03"></i>
						Download
					</a>
				</li>
				<li>
					<a href="/about_us/contact_us/">
						<i class="i04"></i>
						Contacts
					</a>
				</li>
			</ul>
		</div>
		<script type="text/javascript">
			var cookies = document.cookie;
			if (cookies.indexOf("islogin") >= 0) {
				$("#account").find("a").attr("href", "/account/").find("#text")
						.text("Account center");
			} else {
				$("#account").find("a").attr("href", "/open_account/login/")
						.find("#text").text("Login");
			}
		</script>
	</div>
	<?php include "../nav.php";?>
	<!--head.htm end-->
	<div class="wraper-hd"></div>
	<div class="wraper">
		<div class="sub-banner">
			<img alt="" src="/uploads/allimg/150513/1-150513144534246.jpg"
				style="width: 992px; height: 205px;" />
		</div>
		<div class="main clearfix">
			<!--leftside.htm-->
			<?php include '../leftbar.php';?>
			<!--leftside.htm end-->
			<div class="article-detail">
				<h1>Change Password</h1>
				<div class="article-content biaoge">


					<form action="/account/changepwd.php" enctype="multipart/form-data"
						method="post" class="form-horizontal">
						<input type="hidden" name="action" value="post" />
						<input type="hidden" name="diyid" value="2" />
						<input type="hidden" name="do" value="2" />
						<div class="form-group">
							<label for="oldpwd" class="col-sm-3 control-label">Old Password:</label>
							<div class="col-sm-9">
								<input type="password" class="form-control" id="oldpwd"
									name='oldpwd' value='' maxlength="18"
									placeholder="Please enter your old password." />
							</div>
						</div>
						<div class="form-group">
							<label for="newpwd" class="col-sm-3 control-label">Password:</label>
							<div class="col-sm-9">
								<input type="password" class="form-control" id="newpwd"
									name='newpwd' value='' maxlength="18"
									placeholder="Please enter a new password." />
							</div>
						</div>
						<div class="form-group">
							<label for="newpwd" class="col-sm-3 control-label">Con Password:</label>
							<div class="col-sm-9">
								<input type="password" class="form-control" id="confirmnewpwd"
									name='confirmnewpwd' value='' maxlength="18"
									placeholder="Please enter the confirmation password" />
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-9" style="text-align: right">
								<INPUT type="hidden" name="id" value='<?php echo $id;?>' />
								<input type="submit" name="submit" value="Change Password"
									class='btn btn-primary' />

							</div>
						</div>

					</form>
				</div>
			</div>
			<!--rightside.htm-->
			<div class="rightbar scrollbar">
				<div class="rbox">
					<h3>Immediately start trading!</h3>
					<div class="small-bn">
						<a href="/open_account/open_demoaccount">
							<img src="/templets/jinrong/imgcssjs/small_bn_01.png"
								alt="申请外汇模拟账户" />
							<img class="hide"
								src="/templets/jinrong/imgcssjs/small_bn_01_hover.png"
								alt="开设模拟交易账户" />
						</a>
					</div>
					<div class="small-bn">
						<a href="/open_account/open_realaccount">
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
						<dt>Service:</dt>
						<dd>E-mail:Service@oceanforex.com</dd>
					</dl>
					<dl>
						<dt>Tel:</dt>
						<dd>
							<div>+64 9414 6189</div>
						</dd>
					</dl>
					<dl>
						<dt>ADD:</dt>
						<dd>Level 15, BDO Building, 120 Albert Street, Auckland, 1010,New
							Zealand</dd>
					</dl>

					<a class="btn-sv" href="/guanyuwomen/lianxiwomen">Contact us</a>
					<script src="/templets/jinrong/imgcssjs/LiveChat.js"
						type="text/javascript"></script>
				</div>
			</div>
			<!--rightside.htm end-->
		</div>
		<div class="layout parners clearfix">
			<h4>Our Partner</h4>
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
		<div class="footer">
			<span style="font-size: 11px;">
				<span
					style="color: rgb(43, 43, 43); font-family: arial, sans-serif; line-height: 21px; background-color: rgb(250, 250, 250);">
					<strong>Foreign exchange</strong>
					trading is a high risk of investment in leveraged otc foreign
					currency contracts at sight is speculative investment and trade,
					with high risk, usually only suitable for to take over
				</span>
				<br />
				<span
					style="color: rgb(43, 43, 43); font-family: arial, sans-serif; line-height: 21px; background-color: rgb(250, 250, 250);">The
					risk of loss of margin deposits. In view of the risk of these
					OceanForex foreign exchange platform it is recommended that you
					fully understand the potential risks of foreign exchange degree
					before I decide whether or not foreign exchange trading. At the
					same time the otc forex trading is not suitable for certain
					customers.</span>
				<br />
				<span
					style="color: rgb(43, 43, 43); font-family: arial, sans-serif; line-height: 21px; background-color: rgb(250, 250, 250);">Customer
					should according to personal experience/investment target/source of
					funds and other relevant conditions carefully consider whether such
					foreign exchange trading is suitable for you. You should be aware
					of the risk of foreign exchange.</span>
				<br />
				<span
					style="color: rgb(43, 43, 43); font-family: arial, sans-serif; line-height: 21px; background-color: rgb(250, 250, 250);">If
					you have any questions, please don&#39;t hesitate to contact us at
					any time, or consult your independent financial advisor for advice.</span>
			</span>
		</div>
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
					alert("Old password can not be empty.");
					return false;
				}
				if (newpwd == "" || newpwd == null) {
					alert("The new password can not be empty.");
					return false;
				}
				if(newpwd!=confirmnewpwd){
					alert("Two times the input password is not consistent, please re-enter.");
					return false;
					}
				if(!(rnumber.test(newpwd)&&rchar.test(confirmnewpwd))){
					alert("The new password is too simple, please re-enter the password by the letters and numbers.");
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