<?php
$z[0]=Array("global","",239,267);
$z[0][4]['name']="cfg_soft_lang";
$z[1]=Array("field","",281,300);
$z[1][4]['name']="title";
$z[2]=Array("global","",301,327);
$z[2][4]['name']="cfg_webname";
$z[3]=Array("field","",369,398);
$z[3][4]['name']="keywords";
$z[4]=Array("field","",439,497);
$z[4][4]['name']="description";
$z[4][4]['function']="html2text(@me)";
$z[5]=Array("global","",516,548);
$z[5][4]['name']="cfg_templets_skin";
$z[6]=Array("include","",656,691);
$z[6][4]['filename']="head.htm";
$z[7]=Array("arclist","\r\r\nlinkarr[[field:global.autoindex/]] = \"[field:arcurl/]\";\r\r\npicarr[[field:global.autoindex/]]  = \"[field:litpic/]\";\r\r\ntextarr[[field:global.autoindex/]] = \"[field:title function='html2text(@me)'/]\";\r\r\n",1038,1286);
$z[7][4]['flag']="f";
$z[7][4]['row']="5";
$z[8]=Array("global","",1886,1918);
$z[8][4]['name']="cfg_templets_skin";
$z[9]=Array("global","",2217,2249);
$z[9][4]['name']="cfg_templets_skin";
$z[10]=Array("arclist","\r\r\n      <h2><a href=\"[field:arcurl/]\">[field:title/]</a></h2>\r\r\n      <p>[field:description function='cn_substr(@me,110)'/]...<a href=\"[field:arcurl/]\">[查看全文]</a></p>\r\r\n      ",2756,2990);
$z[10][4]['flag']="h";
$z[10][4]['limit']="0,1";
$z[11]=Array("arclist","\r\r\n      <li><a href=\"[field:arcurl/]\">[field:title/]</a></li>\r\r\n      ",3059,3180);
$z[11][4]['flag']="h";
$z[11][4]['limit']="1,6";
$z[12]=Array("arclist","\r\r\n      <li><a href=\"[field:arcurl/]\">[field:image/]<span class=\"title\">[field:title/]</span></a></li>\r\r\n      ",3393,3600);
$z[12][4]['row']="5";
$z[12][4]['orderby']="pubdate";
$z[12][4]['type']="image.";
$z[12][4]['imgwidth']="124";
$z[12][4]['imgheight']="94";
$z[13]=Array("channelartlist","\r\r\n   <dl class=\"tbox\">\r\r\n    <dt><strong><a href=\"{dede:field name='typeurl'/}\">{dede:field name='typename'/}</a></strong><span class=\"more\"><a href=\"{dede:field name='typeurl'/}\">更多...</a></span></dt>\r\r\n    <dd>\r\r\n     <ul class=\"d1 ico3\">\r\r\n      {dede:arclist titlelen='60' row='8'}\r\r\n      <li><span class=\"date\">[field:pubdate function=\"MyDate('m-d',@me)\"/]</span><a href=\"[field:arcurl /]\">[field:title /]</a></li>\r\r\n      {/dede:arclist}\r\r\n     </ul>\r\r\n    </dd>\r\r\n   </dl>\r\r\n   ",3772,4306);
$z[14]=Array("arclist","\r\r\n      <li><a href=\"[field:arcurl/]\">[field:title/]</a>\r\r\n       <p>[field:description function='cn_substr(@me,80)'/]...</p>\r\r\n      </li>\r\r\n      ",4559,4764);
$z[14][4]['flag']="c";
$z[14][4]['titlelen']="42";
$z[14][4]['row']="6";
$z[15]=Array("myad","",4884,4915);
$z[15][4]['name']="listRtPicAD";
$z[16]=Array("arclist","\r\r\n      <li><a href=\"[field:arcurl/]\">[field:title/]</a></li>\r\r\n      ",5097,5218);
$z[16][4]['row']="10";
$z[16][4]['orderby']="click";
$z[17]=Array("myad","",5318,5350);
$z[17][4]['name']="listRtPicAD2";
$z[18]=Array("myad","",5453,5486);
$z[18][4]['name']="innerfooterAD";
$z[19]=Array("include","",5495,5532);
$z[19][4]['filename']="footer.htm";

?>