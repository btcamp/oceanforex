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