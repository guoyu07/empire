<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>[!--pagetitle--] - Powered by EmpireCMS</title>
<meta name="keywords" content="[!--pagekey--]" />
<meta name="description" content="[!--pagedes--]" />
<link href="[!--news.url--]skin/default/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="[!--news.url--]skin/default/js/tabs.js"></script>
</head>
<body class="listpage">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ziyi title</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<script type="text/javascript" src="[!--news.url--]briefcase/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="[!--news.url--]briefcase/jquery.slidertron-1.1.js"></script>

<link href="[!--news.url--]briefcase/default.css" rel="stylesheet" type="text/css" media="all" />
<!--[if IE 6]>
<link href="[!--news.url--]briefcase/[!--news.url--]briefcase/default_ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body>
<div id="header" class="container">
    <div id="logo">
        <h1><a href="[!--news.url--]"><img src="[!--news.url--]briefcase/images/logo.png"/></a></h1>
    </div>
    <div id="menu">
       <? @sys_ShowClassByTemp('0',13,0,7);?>
    </div>
</div>

<table width="100%" border="0" cellspacing="10" cellpadding="0">
<tr valign="top">
<td class="list_content"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="position">
<tr>
<td>您当前的位置：[!--newsnav--]</td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
<tr>
<td><table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
<td colspan="3" class="photo_list">
[!--empirenews.listtemp--]
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="line_bottom">
	<tr>
		<td width="25%" valign="top"><!--list.var1--></td>
		<td width="25%" valign="top"><!--list.var2--></td>
		<td width="25%" valign="top"><!--list.var3--></td>
		<td width="25%" valign="top"><!--list.var4--></td>
	</tr>
</table>
[!--empirenews.listtemp--]
</td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="list_page">
<tr>
<td>[!--show.page--]</td>
</tr>
</table></td>
</tr>
</table></td>
<td class="sider"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="title">
<tr>
<td><strong>图片推荐</strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="8" cellpadding="0" class="box">
<tr>
<td><? @sys_GetClassNewsPic('selfinfo',2,4,128,90,1,20,2);?> </td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title margin_top">
<tr>
<td><strong>最后更新</strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
<tr>
<td><ul>
<? @sys_GetEcmsInfo('selfinfo',10,44,0,0,2,0);?>
</ul></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title margin_top">
<tr>
<td><strong>热门点击</strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
<tr>
<td><ol class="rank">
<? @sys_GetEcmsInfo('selfinfo',10,40,0,1,10,0);?>
</ol></td>
</tr>
</table></td>
</tr>
</table>
<div id="copyright" class="container">
    <p>Copyright (c) 2013 ziyiliyi.com. All rights reserved. Design by <a href="assnr.com" rel="nofollow">assnr.com</a></p>
</div>
</body>
</html>
</body>
</html>