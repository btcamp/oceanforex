<?php
session_start ();

require_once (dirname ( __FILE__ ) . "/../include/common.inc.php");
require_once (dirname ( __FILE__ ) . '/../data/common.inc.php');
require_once (dirname ( __FILE__ ) . '/../include/oxwindow.class.php');
require_once (dirname ( __FILE__ ) . '/../lib/nusoap.php');

// 要修改的ID
$id = $_POST ["id"];
$oldpwd = $_POST ["oldpwd"];
$newpwd = $_POST ["newpwd"];
$confirmnewpwd = $_POST ["confirmnewpwd"];

$client = new nusoap_client ( $cfg_wcf_address, "wsdl" );
$client->soap_defencoding = 'utf-8';
$client->decode_utf8 = false;
$client->xml_encoding = 'utf-8';

$db_connection = mysql_connect ( $cfg_dbhost, $cfg_dbuser, $cfg_dbpwd ) or die ( "Network error please try again" );
mysql_query ( "set names 'utf8'" );
mysql_select_db ( $cfg_dbname, $db_connection );
$result = mysql_query ( "SELECT id,mima,youxiang,mingzi,`国家`,dianhua,dizhi,mt4account,mt4pwd,mt4investorpwd from dede_diyform2 where id=$id" );
$array = mysql_fetch_array ( $result );

if ($array ["mima"] != $oldpwd) {
	ShowMsg ( "Old password authentication failed, please try again.", "/account/changepassword", 0, 2000 );
	exit ();
} else {
	$mt4Result = $client->call ( "ChangePassword", array (
			"login" => $array ["mt4account"],
			"newPassword" => $newpwd 
	) );
	if ($mt4Result ["ChangePasswordResult"] ["ErrorCode"] == - 1) {
		ShowMsg ( "Change password failed, please try again.", "/account/changepassword", 0, 2000 );
		exit ();
	} else {
		$modifyresult = mysql_query ( "UPDATE `dede_diyform2` SET  `mima`='$newpwd', `mimaqueren`='$newpwd',`mt4pwd`='$newpwd' WHERE (`id`=$id)" );
		if ($modifyresult >= 1) {
			ShowMsg ( "Successfully modified password!", "/account", 0, 2000 );
		}
	}
}

?>