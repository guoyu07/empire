<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><tr bgcolor='#DBEAF5' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=1></td><td onMouseUp='turnit(classdiv1);' style='CURSOR:hand'><img src='../data/images/dir.gif'></td><td align=center>1</td><td><input type=checkbox name=reclassid[] value=1> <a href='/ziyi/shouye/' target=_blank>首页</a></td><td align=center>0</td><td><a href='#e' onclick=editc(1)>修改</a> <a href='#e' onclick=copyc(1)>复制</a> <a href='#e' onclick=delc(1)>删除</a></td><td><a href='#e' onclick=relist(1)>刷新</a> <a href='#e' onclick=renews(1,'news')>信息</a> <a href='#e' onclick=rejs(1)>JS</a> <a href='#e' onclick=tvurl(1)>调用</a></td></tr><tbody id='classdiv1'></tbody><tr bgcolor='#DBEAF5' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=2></td><td onMouseUp='turnit(classdiv2);' style='CURSOR:hand'><img src='../data/images/dir.gif'></td><td align=center>2</td><td><input type=checkbox name=reclassid[] value=2> <a href='/ziyi/guanyuwomen/' target=_blank> 关于我们 </a></td><td align=center>0</td><td><a href='#e' onclick=editc(2)>修改</a> <a href='#e' onclick=copyc(2)>复制</a> <a href='#e' onclick=delc(2)>删除</a></td><td><a href='#e' onclick=relist(2)>刷新</a> <a href='#e' onclick=renews(2,'news')>信息</a> <a href='#e' onclick=rejs(2)>JS</a> <a href='#e' onclick=tvurl(2)>调用</a></td></tr><tbody id='classdiv2'></tbody><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=3></td><td><a href='AddNews.php?enews=AddNews&classid=3' target=_blank><img src='../data/images/txt.gif' border=0></a></td><td align=center>3</td><td><input type=checkbox name=reclassid[] value=3> <a href='/ziyi/fuwuxiangmu/' target=_blank>服务项目  </a></td><td align=center>0</td><td><a href='#e' onclick=editc(3)>修改</a> <a href='#e' onclick=copyc(3)>复制</a> <a href='#e' onclick=delc(3)>删除</a></td><td><a href='#e' onclick=relist(3)>刷新</a> <a href='#e' onclick=renews(3,'news')>信息</a> <a href='#e' onclick=rejs(3)>JS</a> <a href='#e' onclick=tvurl(3)>调用</a> <a href='#e' onclick=ttc(3)>分类</a> <a href='#e' onclick=docinfo(3)>归档</a></td></tr><tr bgcolor='#DBEAF5' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=4></td><td onMouseUp='turnit(classdiv4);' style='CURSOR:hand'><img src='../data/images/dir.gif'></td><td align=center>4</td><td><input type=checkbox name=reclassid[] value=4> <a href='/ziyi/xinwendongtai/' target=_blank>新闻动态 </a></td><td align=center>0</td><td><a href='#e' onclick=editc(4)>修改</a> <a href='#e' onclick=copyc(4)>复制</a> <a href='#e' onclick=delc(4)>删除</a></td><td><a href='#e' onclick=relist(4)>刷新</a> <a href='#e' onclick=renews(4,'news')>信息</a> <a href='#e' onclick=rejs(4)>JS</a> <a href='#e' onclick=tvurl(4)>调用</a></td></tr><tbody id='classdiv4'></tbody><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=5></td><td><a href='AddNews.php?enews=AddNews&classid=5' target=_blank><img src='../data/images/txt.gif' border=0></a></td><td align=center>5</td><td><input type=checkbox name=reclassid[] value=5> <a href='/ziyi/jingdiananli/' target=_blank>经典案例   </a></td><td align=center>0</td><td><a href='#e' onclick=editc(5)>修改</a> <a href='#e' onclick=copyc(5)>复制</a> <a href='#e' onclick=delc(5)>删除</a></td><td><a href='#e' onclick=relist(5)>刷新</a> <a href='#e' onclick=renews(5,'news')>信息</a> <a href='#e' onclick=rejs(5)>JS</a> <a href='#e' onclick=tvurl(5)>调用</a> <a href='#e' onclick=ttc(5)>分类</a> <a href='#e' onclick=docinfo(5)>归档</a></td></tr><tr bgcolor='#DBEAF5' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=6></td><td onMouseUp='turnit(classdiv6);' style='CURSOR:hand'><img src='../data/images/dir.gif'></td><td align=center>6</td><td><input type=checkbox name=reclassid[] value=6> <a href='/ziyi/zhaoxiannashi/' target=_blank>招贤纳士   </a></td><td align=center>0</td><td><a href='#e' onclick=editc(6)>修改</a> <a href='#e' onclick=copyc(6)>复制</a> <a href='#e' onclick=delc(6)>删除</a></td><td><a href='#e' onclick=relist(6)>刷新</a> <a href='#e' onclick=renews(6,'news')>信息</a> <a href='#e' onclick=rejs(6)>JS</a> <a href='#e' onclick=tvurl(6)>调用</a></td></tr><tbody id='classdiv6'></tbody><tr bgcolor='#DBEAF5' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=7></td><td onMouseUp='turnit(classdiv7);' style='CURSOR:hand'><img src='../data/images/dir.gif'></td><td align=center>7</td><td><input type=checkbox name=reclassid[] value=7> <a href='/ziyi/lianxiwomen/' target=_blank>联系我们   </a></td><td align=center>0</td><td><a href='#e' onclick=editc(7)>修改</a> <a href='#e' onclick=copyc(7)>复制</a> <a href='#e' onclick=delc(7)>删除</a></td><td><a href='#e' onclick=relist(7)>刷新</a> <a href='#e' onclick=renews(7,'news')>信息</a> <a href='#e' onclick=rejs(7)>JS</a> <a href='#e' onclick=tvurl(7)>调用</a></td></tr><tbody id='classdiv7'></tbody><tr bgcolor='#DBEAF5' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=8></td><td onMouseUp='turnit(classdiv8);' style='CURSOR:hand'><img src='../data/images/dir.gif'></td><td align=center>8</td><td><input type=checkbox name=reclassid[] value=8> <a href='/ziyi/liuyanfankui/' target=_blank> 留言反馈 </a></td><td align=center>0</td><td><a href='#e' onclick=editc(8)>修改</a> <a href='#e' onclick=copyc(8)>复制</a> <a href='#e' onclick=delc(8)>删除</a></td><td><a href='#e' onclick=relist(8)>刷新</a> <a href='#e' onclick=renews(8,'news')>信息</a> <a href='#e' onclick=rejs(8)>JS</a> <a href='#e' onclick=tvurl(8)>调用</a></td></tr><tbody id='classdiv8'></tbody><tr bgcolor='#ffffff' height=25><td><input type=text name=myorder[] value=0 size=2><input type=hidden name=classid[] value=9></td><td><a href='AddNews.php?enews=AddNews&classid=9' target=_blank><img src='../data/images/txt.gif' border=0></a></td><td align=center>9</td><td><input type=checkbox name=reclassid[] value=9> <a href='/ziyi/shouyejiaodianqiehuan/' target=_blank>首页焦点切换 </a></td><td align=center>0</td><td><a href='#e' onclick=editc(9)>修改</a> <a href='#e' onclick=copyc(9)>复制</a> <a href='#e' onclick=delc(9)>删除</a></td><td><a href='#e' onclick=relist(9)>刷新</a> <a href='#e' onclick=renews(9,'photo')>信息</a> <a href='#e' onclick=rejs(9)>JS</a> <a href='#e' onclick=tvurl(9)>调用</a> <a href='#e' onclick=ttc(9)>分类</a> <a href='#e' onclick=docinfo(9)>归档</a></td></tr>