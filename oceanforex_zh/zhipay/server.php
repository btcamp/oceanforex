<?php
header ( "content-Type: text/html; charset=utf-8" );
$MD5key = "FoGdkOiz";
$BillNo = $_REQUEST ["BillNo"];
$Amount = $_REQUEST ["Amount"];
$Succeed = $_REQUEST ["Succeed"];
$Result = $_REQUEST ["Result"];
$MD5info = $_REQUEST ["MD5info"];
$Remark = $_REQUEST ["Remark"];
$md5src = $BillNo . $Amount . $Succeed . $MD5key;
$md5sign = strtoupper ( md5 ( $md5src ) );
if ($MD5info == $md5sign) {
	if ($Succeed == "88") {
		echo 'ok';
	} else {
		echo "fail";
	}
} else {
	echo "error";
}
?>