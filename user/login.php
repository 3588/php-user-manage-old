<?php
print_r($_REQUEST);

	$email = $_POST['email'];
	$password = $_POST['password'];
	//check the request data 
	if($email == NULL || $password == NULL)
	{
		echo "enter the request(name, email, password)";
	}
	else
	{	
	$password = md5($password);//md5 the password
	require('../include/init.php');
$conn = mysql_connect("localhost","root","") or die("error");
  
  mysql_select_db("cssa",$conn);
  mysql_query("set names utf8;");//设置编码
  
$sql="SELECT * FROM `user` WHERE `email` LIKE '".$email."' AND `password` LIKE '".$password."' LIMIT 0, 2 ; ";
	$list=mysql_query($sql,$conn);
$row = mysql_fetch_array($list);
	
	$id=$row["memberid"];
$url = "../member/memberbyid.php?id=".$id;

 echo "去掉注释 自动跳转到 ".$url;
 //去掉注释 自动跳转
 //header("location:".$url."");
	}
?>
