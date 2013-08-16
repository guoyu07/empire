<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Briefcase 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20132602

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Briefcase by FCT</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<script type="text/javascript" src="/ziyi/briefcase/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="/ziyi/briefcase/jquery.slidertron-1.1.js"></script>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700|Archivo+Narrow:400,700" rel="stylesheet" type="text/css">
<link href="/ziyi/briefcase/default.css" rel="stylesheet" type="text/css" media="all" />
<!--[if IE 6]>
<link href="/ziyi/briefcase//ziyi/briefcase/default_ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body>
<div id="header" class="container">
    <div id="logo">
        <h1><a href="/ziyi/briefcase/#">BriefCase</a></h1>
    </div>
    <div id="menu">
        <ul>
            <li class="active"><a href="/ziyi/briefcase/#" accesskey="1" title="">Homepage</a></li>
            <li><a href="/ziyi/briefcase/#" accesskey="2" title="">My Designs</a></li>
            <li><a href="/ziyi/briefcase/#" accesskey="3" title="">About Me</a></li>
            <li><a href="/ziyi/briefcase/#" accesskey="4" title="">Contact</a></li>
        </ul>
    </div>
</div>
<div id="banner" class="container">
    <div id="slider">
        <div class="viewer">
            <div class="reel">
                <div class="slide"> <a class="link" href="/ziyi/briefcase/http://nodethirtythree.com/#slidertron-slide-1">Full story ...</a> <img src="/ziyi/briefcase/images/pic01.jpg" alt="" /> </div>
                <div class="slide"> <a class="link" href="/ziyi/briefcase/http://nodethirtythree.com/#slidertron-slide-2">Full story ...</a> <img src="/ziyi/briefcase/images/pic02.jpg" alt="" /> </div>
                <div class="slide"> <a class="link" href="/ziyi/briefcase/http://nodethirtythree.com/#slidertron-slide-1">Full story ...</a> <img src="/ziyi/briefcase/images/pic04.jpg" alt="" /> </div>
                <div class="slide"> <a class="link" href="/ziyi/briefcase/http://nodethirtythree.com/#slidertron-slide-2">Full story ...</a> <img src="/ziyi/briefcase/images/pic05.jpg" alt="" /> </div>
            </div>
        </div>
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
<div id="page" class="container">
    <div id="content">
        <div id="onecolumn">
            <h2>Welcome to out website!</h2>
            <p>This is BriefCase , a free, fully standards-compliant CSS template designed by FCT. The photo used in this template is from Fotogrph. This free template is released under a Creative Commons Attributions 3.0 license, so you’re pretty much free to do whatever you want with it (even use it commercially) provided you keep the links in the footer intact. Aside from that, have fun with it :)</p>
        </div>
        <div id="two-column">
            <div class="box-content">
                <h2 class="title title01">Nulla luctus eleifend</h2>
                <p>Pellentesque tristique ante ut risus. Quisque dictum. Integer nisl risus, sagittis convallis, rutrum id, elementum congue, nibh. Suspendisse dictum porta lectus. Donec placerat odio vel elit. Nullam ante orci, pellentesque quis.</p>
            </div>
            <div class="box-content">
                <h2 class="title title02">Maecenas luctus lectus</h2>
                <p>Curabitur sit amet nulla. Nam in massa. Sed vel tellus. Curabitur sem urna, consequat vel, suscipit in, mattis placerat, nulla. Sed ac leo. Pellentesque imperdiet. In posuere  odio quisque semper augue mattis maecenas ligula.</p>
            </div>
        </div>
    </div>
    <div id="sidebar">
        <div id="sbox1">
            <h2>Fusce fringilla</h2>
            <ul class="list-style1">
                <li class="first">
                    <p>Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus, cursus egestas at sem. </p>
                    <p><a href="/ziyi/briefcase/#" class="link-style">Read More</a></p>
                </li>
                <li>
                    <p>Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus  at sem. </p>
                    <p><a href="/ziyi/briefcase/#" class="link-style">Read More</a></p>
                </li>
            </ul>
        </div>
        <div id="sbox2">
            <h2>Testimonials</h2>
            <p class="testimonial">Pellentesque adipiscing purus ac magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames.</p>
            <div class="author"><img src="/ziyi/briefcase/images/pic03.jpg" width="80" height="80" alt="" /><span class="name">Juan Dela Cruz</span><span class="position">Company CEO</span><span>MyCompany, LLC</span></div>
        </div>
    </div>
</div>
<div id="footer" class="container">
    <div id="fbox1">
        <h2>Aenean elementum</h2>
        <ul class="style1">
            <li class="first"><a href="/ziyi/briefcase/#">Consectetuer adipiscing elit</a></li>
            <li><a href="/ziyi/briefcase/#">Metus aliquam pellentesque</a></li>
            <li><a href="/ziyi/briefcase/#">Suspendisse iaculis mauris</a></li>
            <li><a href="/ziyi/briefcase/#">Urnanet non molestie semper</a></li>
            <li><a href="/ziyi/briefcase/#">Proin gravida orci porttitor</a></li>
        </ul>
    </div>
    <div id="fbox2">
        <h2>Vestibulum luctus</h2>
        <ul class="style1">
            <li class="first"><a href="/ziyi/briefcase/#">Consectetuer adipiscing elit</a></li>
            <li><a href="/ziyi/briefcase/#">Metus aliquam pellentesque</a></li>
            <li><a href="/ziyi/briefcase/#">Suspendisse iaculis mauris</a></li>
            <li><a href="/ziyi/briefcase/#">Urnanet non molestie semper</a></li>
            <li><a href="/ziyi/briefcase/#">Proin gravida orci porttitor</a></li>
        </ul>
    </div>
    <div id="fbox3">
        <h2>Etiam malesuada</h2>
        <p>In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula. Pellentesque viverra vulputate enim. Donec leo. Vivamus fermentum nibh in augue.</p>
        <ul class="style2">
            <li><a href="/ziyi/briefcase/#"><img src="/ziyi/briefcase/images/social03.png" width="32" height="32" alt="" /></a></li>
            <li><a href="/ziyi/briefcase/#"><img src="/ziyi/briefcase/images/social01.png" width="32" height="32" alt="" /></a></li>
            <li><a href="/ziyi/briefcase/#"><img src="/ziyi/briefcase/images/social04.png" width="32" height="32" alt="" /></a></li>
            <li><a href="/ziyi/briefcase/#"><img src="/ziyi/briefcase/images/social02.png" width="32" height="32" alt="" /></a></li>
        </ul>
    </div>
</div>
<div id="copyright" class="container">
    <p>Copyright (c) 2013 Sitename.com. All rights reserved. Design by <a href="/ziyi/briefcase/http://www.freecsstemplates.org/" rel="nofollow">FreeCSSTemplates.org</a>. Photos by <a href="/ziyi/briefcase/http://fotogrph.com/">Fotogrph</a>.</p>
</div>
</body>
</html>