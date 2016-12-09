<?php
session_start();
header("Content-type:text/html;charset=utf-8");
// if($con = mysqli_connect("localhost","root","")){
//     echo "链接成功";
// }else{
//     echo "连接失败";
// }
$con = mysqli_connect("localhost","root","");
// if (mysqli_select_db($con,"login")) {
//     echo "选择数据库成功";
//   }  else{
//     echo "选择数据库失败";
//   }
mysqli_select_db($con,"login");
$username=$_POST['username'];
// $username=intval($username);
if (empty($username)) {
	die("<script>alert('请输入账号');location='login.php';</script>");
}
$password=$_POST['password'];
$password=intval($password);
if (empty($password)) {
	die("<script>alert('请输入密码');location='login.php';</script>");
}
// $sql = "select * from `login` where `user`='".$username."' and `password`='".$password."'";
// $sql="insert into `login`(`user`,`password`)values('admin','$password')";
$sql = "select `password` from `login` where `user` = '".$username."'";
$set = mysqli_query($con,$sql);
$result=mysqli_fetch_array($set);
if ($result['password']==$password && $password!="") {
	$SESSION['login']=$username;
	echo "<script>alert('登录成功');location='http://www.baidu.com';</script>";
}else{
	echo "<script>alert('登录失败，帐号或密码错误。');location='login.php';</script>";
}
?>