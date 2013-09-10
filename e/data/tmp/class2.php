<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ziyi title</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<script type="text/javascript" src="/ziyi/briefcase/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="/ziyi/briefcase/jquery.slidertron-1.1.js"></script>

<link href="/ziyi/briefcase/default.css" rel="stylesheet" type="text/css" media="all" />
<!--[if IE 6]>
<link href="/ziyi/briefcase//ziyi/briefcase/default_ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body>
<div id="header" class="container">
    <div id="logo">
        <h1><a href="/ziyi/"><img src="/ziyi/briefcase/images/logo.png"/></a></h1>
    </div>
    <div id="menu">
       <? @sys_ShowClassByTemp('0',13,0,7);?>
    </div>
</div>

<!-----------focus pic start-------------->

 

<!------------focus pic end ------------------>




<!------------------------page start------------------------->
<div id="page" class="container">

               <!-------------------------content start------------------------------->

                
   <div id="content">
<div class="aboutus">
       成都锦尚礼仪公司是一家以广告模特、形象代言、礼仪小姐、促销；企业庆典（开业庆典、周年庆典）、企业宣传、活动策划、筹备、执行；专业演出、剪彩、奠基仪式等为一体的多元化综合性公司。


     公司自成立以来一直秉承：“思维创造财富”的经营理念，恪守“诚信、专业、至善、至美”的信条，时时与您相伴，将以专业、全面、优质的服务带到您的身边，以打造行业品牌为己任，以质量与服务为先导独特创新的思维，先进的设备，打造精品案例；以严格的质量服务为客户创造更大价值。与客户一道，致力于为客户提供360°的全方位礼仪解决之道！
   

      锦尚服务，深致远，幽洞微，我们始终如一......
</div>
    </div>

              <!--------------------------------content end------------------------>



             <!-----------------------------------右边sidebox------------------------->


                                 <div id="sidebar">
        <div class="sbox">
           <div class="cattitle">服务推荐</div>
           <? @sys_GetEcmsInfo(3,7,32,0,2,16,0);?>
            <div><a href="/ziyi/briefcase/#" class="link-style">Read More</a></div>
        </div>
       <div class="sbox">
           <div class="cattitle">新闻中心</div>
           <? @sys_GetEcmsInfo(3,7,32,0,2,16,0);?>
            <div><a href="/ziyi/briefcase/#" class="link-style">Read More</a></div>
        </div>
    </div>


             <!----------------------------右边sidebox end-------------------------->
</div>

<!---------------------------page end------------------------------->



<!-------------------------footer start------------------------------------->


<div id="copyright" class="container">
    <p>Copyright (c) 2013 ziyiliyi.com. All rights reserved. Design by <a href="assnr.com" rel="nofollow">assnr.com</a></p>
</div>
</body>
</html>