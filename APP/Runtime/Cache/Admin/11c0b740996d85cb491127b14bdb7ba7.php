<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>添加分类</title>
	<link rel="stylesheet" href="__PUBLIC__/Css/public.css" />
</head>
<body>
	<form action="<?php echo U('Admin/Category/runCateAdd');?>" method="post">
	<table class='table'>
		<tr>
			<td colspan="2" align="center" >添加分类</td>
		</tr>
		<tr>
			<td align="right">分类名称</td>
			<td><input type="text" name="name" /></td>
		</tr>
		<tr>
			<td align="right">排序</td>
			<td><input type="text" name="sort" /></td>
		</tr>
		<tr>
			<td colspan="2" align="center" ><input type="submit" value="提交" /></td>
		</tr>
	</table>
	<input type="hidden" name="pid" value="<?php echo ($pid); ?>" />
	</form>
</body>
</html>