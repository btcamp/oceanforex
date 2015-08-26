<?php
$z[0]=Array("field","",259,278);
$z[0][4]['name']="title";
$z[1]=Array("global","",279,308);
$z[1][4]['name']="cfg_webname_en";
$z[2]=Array("global","",348,375);
$z[2][4]['name']="cfg_keywords";
$z[3]=Array("global","",414,444);
$z[3][4]['name']="cfg_description";
$z[4]=Array("include","",970,1009);
$z[4][4]['filename']="head_en.htm";
$z[5]=Array("sql","[field:content/]",1123,1211);
$z[5][4]['sql']="Select * from dede_addon_suipian where aid=2";
$z[6]=Array("include","",1282,1325);
$z[6][4]['filename']="leftside_en.htm";
$z[7]=Array("field","",1400,1422);
$z[7][4]['name']="typename";
$z[8]=Array("list","\n<tr>\n\n    <td height=\"30\">&gt; &nbsp; <a href=\"[field:arcurl/]\" title=\"[field:title/]\" target=\"_blank\">[field:title/]</a> </td>\n\n    <td height=\"30\"><div align=\"right\">[field:pubdate function=\"GetDateMK(@me)\"/]</div></td>\n\n  </tr>\n",1536,1828);
$z[8][4]['pagesize']="20";
$z[8][4]['titlelen']="";
$z[8][4]['infolen']="";
$z[9]=Array("pagelist","",1962,2055);
$z[9][4]['listitem']="info,index,end,pre,next,pageno,option";
$z[9][4]['listsize']="5";
$z[9][4]['pagelang']="en";
$z[10]=Array("include","",2173,2217);
$z[10][4]['filename']="rightside_en.htm";
$z[11]=Array("sql","\n	  <li><a href=\"[field:url/]\" target=\"_blank\"><img src=\"[field:logo/]\" width=\"120\" height=\"50\" border=\"0\" /><img src=\"[field:logo/]\" width=\"120\" height=\"50\" border=\"0\" class=\"hide\" /></a> </li>\n	  ",2477,2727);
$z[11][4]['sql']="Select * from dede_flink";
$z[12]=Array("include","",2823,2864);
$z[12][4]['filename']="footer_en.htm";

?>