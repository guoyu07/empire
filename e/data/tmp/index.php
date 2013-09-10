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

    <div id="banner" class="container">
    <div id="slider">
    <? @sys_GetEcmsInfo(9,4,32,0,0,14,0);?>
        <div class="indicator">
            <ul>
                <li class="active">1</li>
                <li>2</li>
                <li>3</li>
                <li>4</li>
            </ul>
        </div>
    </div>
    <script type="text/javascript">
        $('#slider').slidertron({
            viewerSelector: '.viewer',
            reelSelector: '.viewer .reel',
            slidesSelector: '.viewer .reel .slide',
            advanceDelay: 3000,
            speed: 'slow',
            navPreviousSelector: '.previous-button',
            navNextSelector: '.next-button',
            indicatorSelector: '.indicator ul li',
            slideLinkSelector: '.link'
        });
    </script> 
</div>

<!------------focus pic end ------------------>




<!------------------------page start------------------------->
<div id="page" class="container">

               <!-------------------------content start------------------------------->

                              <div id="content">
        <div id="two-column">
           <? @sys_GetEcmsInfo(5,2,32,0,0,15,0);?>
            <div class="box-content">
            <img src="/ziyi/briefcase/images/showwe.jpg"/>
                <p>我们一直致力于各类会展的展览服务、商务礼仪、公司开业庆典等上海礼仪服务，包括：展会礼仪、展会模特、展会翻译、展会兼职、展位申请、展台搭建...等等。
 
       公司与多所大学有合作渠道，能快速为每个企事业单位提供高素质的展会兼职人员。
      
      公司核心队伍由多名经验丰富、极具创造力的职业经理人组成，本着专业化、集团化的思想为标准专心致力于为客户提升品牌而不懈努力。
   
       公司的服务宗旨是：高效快捷，客户至上！
 
       欢迎新老客户前来咨询与合作！
.</p>
            </div>
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