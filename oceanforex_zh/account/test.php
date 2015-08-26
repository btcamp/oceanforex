<?php
require_once (dirname ( __FILE__ ) . '/../data/common.inc.php');
require_once (dirname ( __FILE__ ) . '/../lib/nusoap.php');
$client = new nusoap_client ( $cfg_wcf_address, "wsdl" );
$client->soap_defencoding = 'utf-8';
$client->decode_utf8 = false;
$client->xml_encoding = 'utf-8';
// $client->use_curl = true;
// $client->connect_time = 400;

$result = $client->call ( "GetMarginLevel", array (
		"login" => 856278443 
) );

/*
 * $result = $client->GetMarginLevel ( array ( "login" => 856278443 ) );
 */
 print_r ($client->getError());
print_r ( $result );
?>