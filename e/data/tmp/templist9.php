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

<? @sys_GetEcmsInfo(3,10,32,0,0,17,0);?>
</div>

              <!--------------------------------content end------------------------>



             <!-----------------------------------右边sidebox------------------------->


                                 <div id="sidebar">
        <div class="sbox">
           <div class="cattitle">服务推荐</div>
           <? @sys_GetEcmsInfo(3,7,32,0,2,16,0);?>
            <div><a href="[!--news.url--]briefcase/#" class="link-style">Read More</a></div>
        </div>
       <div class="sbox">
           <div class="cattitle">新闻中心</div>
           <? @sys_GetEcmsInfo(3,7,32,0,2,16,0);?>
            <div><a href="[!--news.url--]briefcase/#" class="link-style">Read More</a></div>
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