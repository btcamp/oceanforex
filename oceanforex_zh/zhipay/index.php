﻿<?php 
if (!isset ( $_SESSION ["account"] )) {
	header ( "location:/kaishezhanghu/login");
	exit();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css"
	href="/assets/css/bootstrap.min.css" />
<script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
<title>网上银行注资 | OCEANFOREX | ACNFX | 炒黄金炒外汇最佳平台</title>

<style type="text/css">
body {
	font-family: Georgia, serif;
	background: url(login-page-bg.jpg) top center no-repeat #ffffff;
	color: #000000;
}

.biaoge {
	width: 960px;
	height: 440px;
	margin: 0 auto;
	padding-top: 130px;
}

.clear {
	clear: both;
}

form {
	width: 552px;
	overflow: hidden;
	margin: 0 auto;
	float: inherit;
}

table {
	width: 550px;
}

/*<link rel="shortcut icon" href="/favicon.ico">

<link rel="stylesheet" type="text/css" href="style.css" />*/
.STYLE20 {
	font-family: "宋体";
	color: #000000;
	font-size: 18px;
}

.STYLE1 {
	color: #FF0000
}
</style>

</head>

<script language="javascript"> 

function send()//检查表单是否填写完整 

{ 

    var count=document.payment.elements.length;

    for (var i=0;i<count ;i++ ) 

    { 

        var obj = document.payment.elements[i]; 

        if (obj.tagName=="INPUT") 

        { 

            if (obj.value.length==0) 

            { 

                obj.focus(); 

                alert("请输入完整的信息！"); 

                return false;

            } 

        } 

    } 

} 

</script>
<body>

	<!--表单开始====================================

  ==================================================================================-->

	<div class="biaoge">

		<form method="post" action="pay.php" target="_blank" name="payment"
			onsubmit="return send()" class="form-horizontal">
			<div class="form-group"></div>
			<div class="form-group"></div>
			<div class="form-group"></div>
			<div class="form-group">
				<label for="S_Name" class="col-sm-3 control-label">姓 名：</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="S_Name" name='S_Name'
						placeholder="请输入姓名">
				
				</div>
			</div>
			<div class="form-group">
				<label for="S_Telephone" class="col-sm-3 control-label">电 话：</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="S_Telephone"
						name='S_Telephone' placeholder="请输入电话">
				
				</div>
			</div>
			<div class="form-group">
				<label for="S_Email" class="col-sm-3 control-label">电子邮件：</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="S_Email" name='S_Email'
						placeholder="请输入电子邮件">
				
				</div>
			</div>
			<div class="form-group">
				<label for="MOAmount" class="col-sm-3 control-label">支付金额：</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="MOAmount"
						name='MOAmount' placeholder="请输入支付金额">
				
				</div>
			</div>
			<table width="387" border="0" align="center">

				<tr>
					<td colspan="2">
						<table width="200" border="0">
							<tr>
								<td width="22">
									<input type="radio" Name="P_Bank" value="ICBC">
								
								</td>
								<td>
									<img src="ICBC-NET-B2C.jpg" alt="ICBC">
								
								</td>
								<td width="22">
									<input type="radio" name="P_Bank" value="BOCSH" />
								</td>
								<td>
									<img src="BOC-NET-B2C.jpg" alt="BOC">
								
								</td>
								<td width="22">
									<input type="radio" name="P_Bank" value="CCB" />
								</td>
								<td>
									<img src="CCB-NET-B2C.jpg" alt="CCB">
								
								</td>
							</tr>
							<tr>
								<td>
									<input type="radio" name="P_Bank" value="ABC" />
								</td>
								<td>
									<img src="ABC-NET-B2C.jpg" alt="ABC">
								
								</td>
								<td>
									<input type="radio" name="P_Bank" value="BOCOM" />
								</td>
								<td>
									<img src="BOCO-NET-B2C.jpg" alt="BCOM">
								
								</td>
								<td>
									<input type="radio" name="P_Bank" value="PSBC" />
								</td>
								<td>
									<img src="POST-NET-B2C.jpg" alt="PSBC">
								
								</td>
							</tr>
							<tr>
								<td>
									<input type="radio" name="P_Bank" value="CMB" />
								</td>
								<td>
									<img src="CMBCHINA-NET-B2C.jpg" alt="CMB">
								
								</td>
								<td>
									<input type="radio" name="P_Bank" value="CMBC" />
								</td>
								<td>
									<img src="CMBC-NET-B2C.jpg" alt="CMBC">
								
								</td>
								<td>
									<input type="radio" name="P_Bank" value="CEB" />
								</td>
								<td>
									<img src="CEB-NET-B2C.jpg" alt="CEBB">
								
								</td>
							</tr>
							<tr>
								<td>
									<input type="radio" name="P_Bank" value="PAB" />
								</td>
								<td>
									<img src="PINGANBANK-NET.jpg" alt="SPABANK">
								
								</td>
								<td>
									<input type="radio" name="P_Bank" value="CIB" />
								</td>
								<td>
									<img src="CIB-NET-B2C.jpg" alt="CIB">
								
								</td>
								<td>
									<input type="radio" name="P_Bank" value="SPDB" />
								</td>
								<td>
									<img src="SPDB-NET-B2C.jpg" alt="SPDB">
								
								</td>
							</tr>


						</table>
					</td>
				</tr>
			</table>
			<div class="form-group" style="padding-top:10px">
				<div class="col-sm-offset-3 col-sm-9" style="text-align: right">
					<input type="submit" name="submit" value="下一步"
						class='btn btn-primary' />
					 
				</div>
			</div>
		</form>

	</div>

	<!--表单结束======================================================================================================================-->

</body>

</html>
