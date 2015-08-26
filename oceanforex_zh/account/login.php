<?php
session_start (); // 开启session
require_once (dirname ( __FILE__ ) . "/../include/common.inc.php");
require_once (dirname ( __FILE__ ) . '/../data/common.inc.php');
require_once (dirname ( __FILE__ ) . '/../include/oxwindow.class.php');

$email = isset ( $_POST ["email"] ) ? $_POST ["email"] : "";
$pwd = isset ( $_POST ["pwd"] ) ? $_POST ["pwd"] : "";

$db_connection = mysql_connect ( $cfg_dbhost, $cfg_dbuser, $cfg_dbpwd ) or die ( "网络错误请重试" );
mysql_query ( "set names 'utf8'" );
mysql_select_db ( $cfg_dbname, $db_connection );
$result = mysql_query ( "SELECT id,isok from dede_diyform2 where youxiang='$email' AND mima='$pwd'" );

$array = mysql_fetch_array ( $result );
if ($array["isok"]=="否") {
	echo "<script LANGUAGE='JavaScript'>".
			"alert('您尚未通过审核，请耐心等待！');window.location='/kaishezhanghu/login/'"."</script>";
	exit();
}
if (mysql_num_rows ( $result ) > 0) {
	$_SESSION ["account"] = $array["id"];
	setcookie ( "islogin", "true",null ,"/");
	header("location:/account/");
	//ShowMsg ( "登录成功！", "/account/", 0, 2000 );
} else {
	echo "<script LANGUAGE='JavaScript'>".
			"alert('用户名密码不正确，请重新登录!');window.location='/kaishezhanghu/login/'"."</script>";
	exit();
}

/* print_r($_SESSION["loginAccount"]) */
/* ShowMsg("登录成功！", "/",0,2000); */
?>
