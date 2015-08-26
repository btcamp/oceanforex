<?php
require_once (dirname ( __FILE__ ) . "/../include/common.inc.php");
require_once (dirname ( __FILE__ ) . '/../data/common.inc.php');
require_once (dirname ( __FILE__ ) . '/../include/oxwindow.class.php');
require_once (dirname ( __FILE__ ) . '/../lib/nusoap.php');
// 获取提交的数据
$email = $_POST ["youxiang"];
$pwd = $_POST ["mima"];
$confirmpwd = $_POST ["mimaqueren"];
$name = $_POST ["mingzi"];
$contry = $_POST ["国家"];
$phone = $_POST ["dianhua"];
$address = $_POST ["dizhi"];
$birthday = $_POST ["shengri"];
$gupiao = $_POST ["gupiao"];
$waihui = $_POST ["waihui"];
$qihuo = $_POST ["qihuo"];
$qiquan = $_POST ["qiquan"];
$heyue = $_POST ["heyue"];
$jijin = $_POST ["jijin"];
$shouru = $_POST ["shouru"];
$zichan = $_POST ["zichan"];
$zhidao = $_POST ["zhidao"];
$daima = $_POST ["daima"];

$idpositive = $_FILES ["idpositive"];
$idreverse = $_FILES ["idreverse"];
$bankbill = $_FILES ["bankbill"];
$max_file_size = 2000000; // 上传文件大小限制, 单位BYTE
$destination_folder = "../uploads/imgs/" . $email . "/"; // 上传文件路径
                                                         // 上传文件类型列表
$uptypes = array (
		'image/jpg',
		'image/jpeg',
		'image/png',
		'image/pjpeg',
		'image/gif',
		'image/bmp',
		'image/x-png' 
);

$client = new nusoap_client ( $cfg_wcf_address, "wsdl" );
$client->soap_defencoding = 'utf-8';
$client->decode_utf8 = false;
$client->xml_encoding = 'utf-8';
$args = array (
		"name" => $name,
		"group" => "oceanforex",
		"pwd" => $pwd,
		"investorPwd" => $pwd,
		"email" => $email 
);

$mt4Result = $client->call ( "CreateAccount", $args );
if ($mt4Result ["CreateAccountResult"] ["ErrorCode"] == - 1) {
	header ( "location: /account/registermsg.php?success=false&returnurl=/kaishezhanghu/zhucezhenshizhanghu/" );
	exit ();
} else {
	$mt4Account = $mt4Result ["CreateAccountResult"] ["ReturnValue"];
	$db_connection = mysql_connect ( $cfg_dbhost, $cfg_dbuser, $cfg_dbpwd ) or die ( "网络错误请重试" );
	mysql_query ( "set names 'utf8'" );
	mysql_select_db ( $cfg_dbname, $db_connection );
	$result = mysql_query ( "INSERT INTO `dede_diyform2` (`ifcheck`, `youxiang`, `mima`, `mimaqueren`, `mingzi`, `国家`, `dianhua`, `dizhi`, `shengri`, `gupiao`, `waihui`, `qihuo`, `qiquan`, `heyue`, `jijin`, `shouru`, `zichan`, `zhidao`, `daima`, `mt4account`, `mt4pwd`, `mt4investorpwd`,`isok`) 
			VALUES ('0', '$email', '$pwd', '$confirmpwd', '$name', '$contry', '$phone', '$address', '$birthday', '$gupiao', '$waihui', '$qihuo', '$qiquan', '$heyue', '$jijin', '$shouru', '$zichan', '$zhidao', '$daima', '$mt4Account', '$pwd', '$pwd','否');
	" );
	if ($result == 1) {
		if (! in_array ( $idpositive ["type"], $uptypes ) || ! in_array ( $bankbill ["type"], $uptypes ) || ! in_array ( $idreverse ["type"], $uptypes )) {
			
			// echo "<scrpit>alert('文件类型不符!. $idpositive [\"type\"].');window.location.href='/kaishezhanghu/zhucezhenshizhanghu/'</script>";
			// ShowMsg ( "文件类型不符!. $idpositive [\"type\"].", "/kaishezhanghu/zhucezhenshizhanghu/" );
			header ( "location: /account/registermsg.php?success=false&returnurl=/kaishezhanghu/zhucezhenshizhanghu/" );
			exit ();
		}
		
		if (! file_exists ( $destination_folder )) {
			mkdir ( $destination_folder );
		}
		$filename = $idpositive ["tmp_name"];
		$pinfo = pathinfo ( $idpositive ["name"] );
		$ftype = $pinfo ['extension'];
		$destination = $destination_folder . "idpositive_" . time () . "." . $ftype;
		move_uploaded_file ( $filename, $destination );
		$idpositiveurl = "http://" . $_SERVER ["HTTP_HOST"] . str_replace ( "../", "/", $destination ); // 身份证证明地址
		$filename = $bankbill ["tmp_name"];
		$pinfo = pathinfo ( $bankbill ["name"] );
		$ftype = $pinfo ['extension'];
		$destination = $destination_folder . "bankbill_" . time () . "." . $ftype;
		move_uploaded_file ( $filename, $destination );
		$bankbillurl = "http://" . $_SERVER ["HTTP_HOST"] . str_replace ( "../", "/", $destination ); // 银行 护照地址
		$filename = $idreverse ["tmp_name"];
		$pinfo = pathinfo ( $idreverse ["name"] );
		$ftype = $pinfo ['extension'];
		$destination = $destination_folder . "idreverse_" . time () . "." . $ftype;
		$idreverseurl = "http://" . $_SERVER ["HTTP_HOST"] . str_replace ( "../", "/", $destination ); // 身份证反面地址
		if (! move_uploaded_file ( $filename, $destination )) {
			echo "移动文件出错" . $destination;
			exit ();
		} else {
			$mailclient = new nusoap_client ( "http://localhost:8077/ApiService?wsdl", "wsdl" );
			$tpl = mysql_query ( "SELECT content from dede_mailtpl where tplname='用户注册'" );
			$tplarray = mysql_fetch_array ( $tpl );
			$content = str_replace ( "{name}", $name, $tplarray ["content"] );
			$content = str_replace ( "{email}", $email, $content );
			$content = str_replace ( "{pwd}", $pwd, $content );
// 			print_r ( $tplarray );
			// 发给用户的
			$args = array (
					"subject" => "用户注册",
					"body" => $content,
					"form" => "service@oceanforex.com",
					"fromname" => "OceanForex Customer Service",
					"to" => $email,
					"toname" => $name,
					"smtp" => "smtp.exmail.qq.com",
					"formuser" => "service@oceanforex.com",
					"frompwd" => "ocean58" 
			);
			$mailclient->soap_defencoding = 'utf-8';
			$mailclient->decode_utf8 = false;
			$mailclient->xml_encoding = 'utf-8';
			$mailmt4Result = $mailclient->call ( "SendMail", $args );
			
			/* print_r ( $content );
			print_r ( $mailmt4Result );
			print_r ( $mailclient->getError () ); */
			
			// 发送给自己的
			
			$argself = array (
					"subject" => "用户注册通知",
					"body" => "<html><body>" . "开设账户<br/>姓名：" . $name . "<br/>" . "登录邮箱：" . $email . "<br/>" . "MT4密码/登录密码：" . $pwd . "<br/>" . "MT4帐号：" . $mt4Account . "<br/>" . "联系电话：" . $phone . "<br/>" . "地址：" . $address . "<br/>" . "身份证正面：<img src='" . $idpositiveurl . "'><br/>" . "身份证反面：<img src='" . $idreverseurl . "'><br/>" . "银行护照户口本照片：<img src='" . $bankbillurl . "'><br/>" . "</body></html>",
					"form" => "service@oceanforex.com",
					"fromname" => "OceanForex Customer Service",
					"to" => "manager@oceanforex.com",
					"toname" => "客户开户信息",
					"smtp" => "smtp.exmail.qq.com",
					"formuser" => "service@oceanforex.com",
					"frompwd" => "ocean58" 
			);
			$mailmt4Result = $mailclient->call ( "SendMail", $argself );
			
			/* print_r ( $argself ["body"] );
			print_r ( $mailmt4Result );
			print_r ( $mailclient->getError () ); */
			
			if ($mailmt4Result ["SendMailResult"] == "OK") {
				header ( "location: /account/registermsg.php?success=true&name=" . $name . "&email=" . $email . "&pwd=" . $pwd . "" );
			}
		}
	}
}

/*
 * $result = mysql_query("SELECT * FROM `dede_diyform2` LIMIT 0, 1000"); mysql_data_seek($result, 0);//定位到第一条 //row 读取数据 while ($row = mysql_fetch_row($result)){ if ($row[0]=="7") { echo "true"; } else{ echo "false"; } } mysql_free_result($result);//释放资源 mysql_close($db_connection);
 */

?>