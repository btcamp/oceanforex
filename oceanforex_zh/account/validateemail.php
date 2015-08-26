<?php
require_once (dirname ( __FILE__ ) . "/../include/common.inc.php");
require_once (dirname ( __FILE__ ) . '/../data/common.inc.php');
if (isset ( $_GET ["email"] )) {
	$email = $_GET ["email"];
	$db_connection = mysql_connect ( $cfg_dbhost, $cfg_dbuser, $cfg_dbpwd ) or die ( "网络错误请重试" );
	mysql_query ( "set names 'utf8'" );
	mysql_select_db ( $cfg_dbname, $db_connection );
	$result = mysql_query ( "SELECT * from dede_diyform2 where youxiang='$email'" );
	if (mysql_num_rows ( $result ) > 0) {
		echo "false";
	} else {
		echo "true";
	}
} else {
	echo "1";
}

?>