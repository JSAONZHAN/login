
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form action="./houtai.php" method="post">
		请输入登录信息</br>
		帐号：<input type="text" name="username" id="name"></br>
		密码：<input type="password" name="password" id="password"></br>
		<input type="submit" name="sub" value="登录" id="submit" >
<!-- 		<p id="jieguo"></p> -->
	</form>
<!-- 	<script type="text/javascript">
		 var submit = document.querySelector('#submit');
		 submit.onlick = function(){
		 	var requset = new XMLHttpRequst();
		 	requse.open("POST","./houtai.php");
		 	var data = document.querySelector('#name').value;
		 	// var data = "name=" + document.querySelector('#name').value + "$password=" + document.querySelector('#password').value;
		 	requset.setRequsetHeader("Content-Type","application/x-www-form-urlencoded");
		 	requset.send(data);
		 	requset.onreadystatechange = function(){
		 		if (requset.readState === 4) {
		 			if (requset.status === 200) {
		 				document.querySelector('#name').innerHTML = requset.responseText;
		 			}else{
		 				alert("发生错误"+requset.status);
		 			}
		 		}
		 	}
		 }
	</script> -->
</body>
</html>
<html>
<head>
	<title></title>
</head>
<body>
<p>如果未注册，请注册</p>
<form action="./in.html" method="post">
<button>注册</button>
</body>
</html>


