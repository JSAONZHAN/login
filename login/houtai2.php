<?php
header("Content-type:text/html;charset=utf-8");
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"login");
// if (!sset($_POST['username'])) {
// 	die('');
// }
$username=$_POST['username'];
if (empty($username)) {
	die("<script>alert('请输入账号');location='./in.html';</script>");
}
$password=$_POST['password'];
$password=intval($password);
if (empty($password)) {
	die("<script>alert('请输入密码');location='./in.html';</script>");
}
$sql="insert into `login`(`user`,`password`)values('$username','$password')";
mysqli_query($con,$sql);
if (mysql_errno()) {
	echo mysql_errno();	
}else{
	echo "<script>alert('注册成功，请登录。');location='./login.php';</script>";
}
?>