<?php
error_reporting(0);

//安装保护
if(file_exists(ROOT_PATH.'./install/OK.lock'))
{
	die('WA is installed, install.loc file is exists');
}

//转义引号
function stripSlash($arr)
{
	if(is_array($arr))
	{
		foreach($arr as $key=>$value)
		{
			$arr[$key] = stripSlash($value);
		}
		return $arr;
	}
	else
	{
		return stripslashes($arr);
	}
}

//类的自动加载
function __autoload($className)
{
	$classFile = ROOT_PATH.'./install/include/'.strtolower($className).'.php';
	if(file_exists($classFile))
	{
		require($classFile);
	}
	else
	{
		die("can not find ".$className." class");
	}
}

//get,post封装
function url_get($key, $type=false)
{
	//默认方式
	if($type==false)
	{
		if(isset($_GET[$key])) return $_GET[$key];
		else if(isset($_POST[$key])) return $_POST[$key];
		else return null;
	}

	//get方式
	else if($type=='get' && isset($_GET[$key]))
		return $_GET[$key];

	//post方式
	else if($type=='post' && isset($_POST[$key]))
		return $_POST[$key];

	//无匹配
	else
		return null;
}