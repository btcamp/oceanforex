<div class="header">
		<div class="head-layout clearfix">
			<div class="logo">
				<a href="/" target="_self">
					<img src="/templets/jinrong/imgcssjs/logo.png" />
				</a>
			</div>
			<ul class="quick">
				<li id="account">
					<a href="#" target="_self">
						<i class="i00"></i>
						<span id='text'>用户中心</span>
					</a>
				</li>
				<li>
					<a href="/kaishezhanghu/zhucemonizhanghao/" target="_self">
						<i class="i01"></i>
						模拟账户
					</a>
				</li>
				<li>
					<a href="/kaishezhanghu/zhucezhenshizhanghu/" target="_self">
						<i class="i02"></i>
						真实账户
					</a>
				</li>
				<li>
					<a href="/jiaoyipingtai/MT4jiaoyipingtai/" target="_self">
						<i class="i03"></i>
						软件下载
					</a>
				</li>
				<li>
					<a href="/guanyuwomen/lianxiwomen">
						<i class="i04"></i>
						联络我们
					</a>
				</li>
			</ul>
		</div>
		<script type="text/javascript">
			var cookies = document.cookie;
			if (cookies.indexOf("islogin") >= 0) {
				$("#account").find("a").attr("href", "/account/").find("#text")
						.text("用户中心");
			} else {
				$("#account").find("a").attr("href", "/kaishezhanghu/login/")
						.find("#text").text("用户登录");
			}
		</script>
	</div>