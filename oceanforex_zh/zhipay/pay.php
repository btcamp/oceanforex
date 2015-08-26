<?php
header('Content-Type: text/html; charset=utf-8'); 
$MerNo  = "27045";
$MD5key = "FoGdkOiz";
$posturl = "http://www.haizhouguoji.com/ecpss-post.php";
$BillNo = date("YmdHis").rand(100,999);
$Amount = $_POST['MOAmount'];
$ReturnURL = "http://".$_SERVER['HTTP_HOST']."/zhipay/return.php"; 
$AdviceURL = "http://".$_SERVER['HTTP_HOST']."/zhipay/server.php"; 
$defaultBankNumber =isset( $_POST['P_Bank'])? $_POST['P_Bank']:"";
$Remark    = "";
$products  = "姓名:".$_POST['S_Name'].",电话:".$_POST['S_Telephone'].",邮箱:".$_POST['S_Email'];
$md5src    = $MerNo.$BillNo.$Amount.$ReturnURL.$MD5key;
$MD5info   = strtoupper(md5($md5src));
$def_url   = '<form style="text-align:center;" action="'.$posturl.'" method="post" name="E_FORM">';
$def_url  .= '<input type="hidden" name="MerNo" value="'.$MerNo.'">';
$def_url  .= '<input type="hidden" name="BillNo" value="'.$BillNo.'">';
$def_url  .= '<input type="hidden" name="Amount" value="'.$Amount.'">';
$def_url  .= '<input type="hidden" name="ReturnURL" value="'.$ReturnURL.'" >';
$def_url  .= '<input type="hidden" name="AdviceURL" value="'.$AdviceURL.'" >';
$def_url  .= '<input type="hidden" name="MD5info" value="'.$MD5info.'">';
$def_url  .= '<input type="hidden" name="defaultBankNumber" value="'.$defaultBankNumber.'">';
$def_url  .= '<input type="hidden" name="Remark" value="'.$Remark.'">';
$def_url  .= '<input type="hidden" name="products" value="'.$products.'">';
$def_url .= "</form>";
?>
<html>
<head>
<title></title>
</head>
<body onLoad="document.forms[0].submit()">
<?php echo $def_url;;?>
</body>
</html>