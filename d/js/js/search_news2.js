function search_check(obj){if(obj.keyboard.value.length==0){alert('请输入搜索关键字');return false;}return true;}document.write("<table width=99% border=0 cellpadding=3 cellspacing=1><form name=search_js2 method=post action='/ziyi/e/search/index.php' onsubmit='return search_check(document.search_js2);'><tr><td height=25><div align=center>关键字: <input name=keyboard type=text size=13></div></td></tr><tr><td><div align=center>范围: <select name=show><option value=title>标题</option><option value=smalltext>简介</option><option value=newstext>内容</option><option value=writer>作者</option><option value=title,smalltext,newstext,writer>搜索全部</option></select></div></td></tr><tr><td><div align=center>栏目:<select name=classid><option value=0>所有栏目</option><option value='1'>|-首页</option><option value='2'>|- 关于我们 </option><option value='3'>|-服务项目  </option><option value='4'>|-新闻动态 </option><option value='5'>|-经典案例   </option><option value='6'>|-招贤纳士   </option><option value='7'>|-联系我们   </option><option value='8'>|- 留言反馈 </option><option value='9' style='background:#99C4E3'>|-首页焦点</option></select></div></td></tr><tr><td><div align=center><input type=submit name=Submit value=搜索></div></td></tr></form></table>");