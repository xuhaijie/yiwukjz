<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title></title>
<script type="text/javascript" src="../Public/js/jquery.js"></script>
<script type="text/javascript" src="../Public/js/common.js"></script>
<style type="text/css">
*{margin:0; padding:0; border:0;}
body {
	background:url('../Public/image/bodybg.jpg') repeat-x; 
	font-family:"microsoft yahei","华文细黑"，"黑体"; 
	font-size:14px;
}
li {
	list-style:none;
}	
#main {
	width:100%; 
	height:630px; 
	background:url('../Public/image/mainbg.jpg') center center no-repeat; 
	margin:0 auto;	
}	
#login {
	padding-top:300px;
	 width:260px; 
	 height:210px; 
	 margin:0 auto; 
}	 
#login li {
	color:#8e8089;
	line-height:42px;
}
#login li input{
    position:relative;
    _bottom:-6px;
	_padding-bottom:8px;
}
#login li img{
	margin-left:8px; vertical-align:middle;*+margin-top:-10px;
}	
#username,#password {
	background: url('../Public/image/inputbg.jpg') no-repeat;
	width: 200px;
	height: 30px;
	line-height:30px;
	border: none;
	text-indent: 8px;
	margin-left:5px;
	color:#666;
	font-family:"microsoft yahei";
}
#verify {
	background: url('../Public/image/yzmbg.jpg') no-repeat;
	width: 105px;
	height: 30px;
	line-height:30px;
	border: none;
	text-indent: 8px;
	margin-left:5px;
	color:#666;
	font-family:"microsoft yahei";
}
#ok {
    background:url('../Public/image/submit.png') no-repeat;
	width:87px;
	height:34px;
	color:#FFF;
	border:0;
	font-family:"microsoft yahei";
	line-height:34px;
	text-indent:10px;
	cursor: pointer;
	
}
#ok:hover {
	 background:url('../Public/image/submit-hover.png') no-repeat;
}
#sub { display:block; width:87px; margin:10px auto; }
</style>
<script>
if(top!=self){
	top.location=self.location;
}
focus();
$(function(){
	/*
	$('#verify').keypress(function(e) {     
        var keyCode= event.keyCode;  
        var realkey = String.fromCharCode(keyCode).toUpperCase();  
        $(this).val($(this).val()+realkey);  
        event.returnValue =false;  
    });   
	$('#verify').blur(function(){
		$('#verify').val($('#verify').val().toUpperCase());
	});
	*/
	$("#form1").submit(function (){
		if($("#username").val() == ''){
			alert('请输入用户名');
			$("#username").focus();
			return false;
		}
		if($("#password").val() == ''){
			alert('请输入密码');
			$("#password").focus();
			return false;
		}
		if($("#verify").val() == ''){
			alert('请输入验证码');
			$("#verify").focus();
			return false;
		}
	
	})
	
});
</script>
</head>
<body>
<div id="main">
	<form name="form1" method="post" action="" id="form1">
		<div id="login">
	    	<ul>
		    	<li>用户名 <input name="username" type="text" id="username" placeholder="请输入您的用户名"></li>
		        <li>密　码 <input name="password" type="password" id="password" placeholder="请输入您的密码"></li>
		        <li>验证码 <input type="text" name="verify" id="verify" class="verify" maxlength=4 /><a href="javascript:;"><img id="verifyImg" src='__GROUP__/Login/verify/' onclick="refreshVerify('__GROUP__/Login/verify/')" /></a></li>
		        <li id="sub"><input type="submit" name="ok" id="ok" value="登 录"></li>
	        </ul>
    	</div>
	</form>
</div>
</body>
</html>