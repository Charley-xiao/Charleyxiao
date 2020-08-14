<?php
	header("Content-type:text/html;charset=utf-8");
	$username=$_GET['username'];
	$password=$_GET['password'];
	if($username=='admin' && $password=='admin'){
		echo "登录成功";
	}else{
		echo "你不是管理员或者密码错误";
	}
?>