<?php
session_start (); // 开启session
require_once (dirname ( __FILE__ ) . "/../include/common.inc.php");
require_once (dirname ( __FILE__ ) . '/../include/oxwindow.class.php');

if (isset ( $_SESSION ["account"] )) {
	unset ( $_SESSION ["account"] );
	setcookie ( "islogin", "true", time () - 3600 * 24, "/" );
	echo "<script LANGUAGE='JavaScript'>".
			"alert('成功退出登录！欢迎下次登录!');window.location='/'"."</script>";
	exit();
}
?>