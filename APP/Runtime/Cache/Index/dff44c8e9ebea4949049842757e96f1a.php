<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="__PUBLIC__/Css/common.css" />
	<script type="text/JavaScript" src='__PUBLIC__/Js/jquery-1.7.2.min.js'></script>
	<script type="text/JavaScript" src='__PUBLIC__/Js/common.js'></script>
	<link rel="stylesheet" href="__PUBLIC__/Css/index.css" />
</head>
<body>
<!--头部-->
	<div class='top-list-wrap'>
		<div class='top-list' style="display:none;">
			<ul class='l-list'>
				<li><a href="http://www.xsphp.com" target='_blank'>XSPHP</a></li>
				<li><a href="http://www.xsphp.com" target='_blank'>XSPHP</a></li>
				<li><a href="http://www.xsphp.com" target='_blank'>XSPHP</a></li>
			</ul>
			<ul class='r-list'>
				<li><a href="http://www.xsphp.com" target='_blank'>XSPHP</a></li>
				<li><a href="http://www.xsphp.com" target='_blank'>XSPHP</a></li>
			</ul>
		</div>
	</div>
	<div class='top-search-wrap'>
		<div class='top-search'>
			<!--LOGO-->
			<!--<a href="http://www.xsphp.com" target='_blank' class='logo'>-->
				<!--<img src="__PUBLIC__/Images/logo.png"/>-->
			<!--</a>-->
			<!--<div class='search-wrap'>-->
				<!--<form action="" method='get'>-->
					<!--<input type="text" name='keyword' class='search-content'/>-->
					<!--<input type="submit" name='search' value='搜索'/>-->
				<!--</form>-->
			<!--</div>-->
			<!--登陆跳转页-->
			<a href="<?php echo U('/'.'Admin/');?>"><p style="color:white;text-align:right;">登陆</p></a>
		</div>
	</div>
	<div class='top-nav-wrap'>
		<ul class='nav-lv1'>
			<li class='nav-lv1-li'>
				<!--<a href="__ROOT__" class='top-cate'>首页</a>-->
				<a href="<?php echo 'http://'.$_SERVER['SERVER_NAME']; ?>" class='top-cate'>首页</a>
			</li>
			<li class='nav-lv1-li'>
				<!--<a href="__ROOT__" class='top-cate'>首页</a>-->
				<a href="Index/Alasugar/index" class='top-cate'>L-阿拉伯糖</a>
			</li>
			<li class='nav-lv1-li'>
				<!--<a href="__ROOT__" class='top-cate'>首页</a>-->
				<a href="/c_21.html" class='top-cate'>新闻资讯</a>
			</li>
			<li class='nav-lv1-li'>
				<!--<a href="__ROOT__" class='top-cate'>首页</a>-->
				<a href="/c_22.html" class='top-cate'>糖尿病课堂</a>
			</li>
			<li class='nav-lv1-li'>
				<!--<a href="__ROOT__" class='top-cate'>首页</a>-->
				<a href="/Index/Fangwei/index" class='top-cate'>授权/防伪查询</a>
			</li>
			<li class='nav-lv1-li'>
				<!--<a href="__ROOT__" class='top-cate'>首页</a>-->
				<a href="/Index/Yonghufangkui/index" class='top-cate'>用户反馈</a>
			</li>
			<li class='nav-lv1-li'>
				<!--<a href="__ROOT__" class='top-cate'>首页</a>-->
				<a href="/Index/Zaixiandinggou/index" class='top-cate'>在线订购</a>
			</li>

			<!--<?php
 $cate = M('cate')->order('sort')->limit('50')->select(); import('Class.Category',APP_PATH); $cate = Category::unlimitedForLayer($cate); foreach ( $cate as $v ) : ?>-->
				<!--<li class='nav-lv1-li'>-->
					<!--<a href="<?php echo U('/c_'.$v["id"]);?>" class='top-cate'><?php echo ($v["name"]); ?></a>-->
						<!--<ul>-->
					<!--<?php if(is_array($v["child"])): foreach($v["child"] as $key=>$child): ?>-->
							<!--<li><a href="<?php echo U('/c_'.$child["id"]);?>"><?php echo ($child["name"]); ?></a></li>-->
					<!--<?php endforeach; endif; ?>-->
						<!--</ul>-->
				<!--</li>-->
			<!--<?php endforeach; ?>-->

		</ul>
	</div>

<!--主体-->
	<!--<div class='main'>-->
		<!--<div class='main-left'>-->
			<!--<p>文章</p>-->
			<!--<?php if(is_array($list)): foreach($list as $key=>$v): ?>-->
				<!--<dl>-->
					<!--<dt><?php echo ($v['name']); ?><a href="<?php echo U('/c_'.$v['id']);?>" >更多>></a></dt>-->
					<!--<?php if(is_array($v["blog"])): foreach($v["blog"] as $key=>$blog): ?>-->
						<!--<dd>-->
							<!--<a href="<?php echo U('/'.$blog['id']);?>" target="_blank"><?php echo ($blog['title']); ?></a>-->
							<!--<span><?php echo (date('m/d',$blog['time'])); ?></span>-->
						<!--</dd>-->
					<!--<?php endforeach; endif; ?>-->
				<!--</dl>-->
			<!--<?php endforeach; endif; ?>-->
		<!--</div>-->

<p>this is index.html page! URL:\APP\Moeules\Tpl\Index\index.phtml</p>

<!--主体右侧-->
	<!--主体右侧-->
		<!--<div class='main-right'>-->
			<!--<dl>-->
				<!--<dt>热门博文</dt>-->
				<!--<?php
 $hots = M('blog')->order('click DESC')->limit('5')->select(); foreach ($hots as $value) : ?>-->
					<!--<dd>-->
						<!--<a href="<?php echo U('/'.$value['id']);?>"><?php echo ($value['title']); ?></a>-->
						<!--<span>(<?php echo ($value['click']); ?>)</span>-->
					<!--</dd>-->
				<!--<?php endforeach; ?>-->
			<!--</dl>-->

			<!--<dl>-->
				<!--<dt>最发布发</dt>-->
				<!--<?php
 $news = M('blog')->order('time DESC')->limit('5')->select(); foreach ($news as $value) : ?>-->
					<!--<dd>-->
						<!--<a href="<?php echo U('/'.$value['id']);?>"><?php echo ($value['title']); ?></a>-->
						<!--<span>(<?php echo ($value['click']); ?>)</span>-->
					<!--</dd>-->
				<!--<?php endforeach; ?>-->
			<!--</dl>-->

			<!--<dl>-->
				<!--<dt>友情连接</dt>-->
				<!--<dd>-->
					<!--<a href="http://www.xsphp.com">PHPDEMO</a>-->
				<!--</dd>-->

				<!--<dd>-->
					<!--<a href="http://www.baidu.com">百度</a>-->
				<!--</dd>-->
				<!--<dd>-->
					<!--<a href="http://www.163.com">网易</a>-->
				<!--</dd>-->
			<!--</dl>-->
		<!--</div>-->
	</div>
<!--底部-->
	<div class='bottom'>
		<div></div>
	</div>
</body>
</html>