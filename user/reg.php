<?php
print_r($_REQUEST);
	
	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$major = $_POST['major'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$im = $_POST['im'];
	$password = $_POST['password'];
	$join=$_POST['join'];
	$date=date("Y-m-d");
	//check the request data 
	if($name == NULL || $email == NULL || $password == NULL)
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
  
$sql="INSERT INTO `cssa`.`member` (`id`, `name`, `gender`, `major`, `phone`, `email`, `im`, `join`, `date`) VALUES (NULL, '".$name."', '".$gender."', '".$major."', '".$phone."', '".$email."', '".$im."', '".$join."', '".$date."');";
	$list=mysql_query($sql,$conn);
	if($list = 1)
	{
		echo "add to member ok";
	}
	else
	{
		echo "add to member error";
		}
		
	$sql="SELECT * FROM `member` WHERE `email` LIKE '".$email."'
LIMIT 0 , 30";
$list=mysql_query($sql,$conn);
$row = mysql_fetch_array($list);
$memberid = $row["id"];// get member id for link user
/*
add to user table
*/
$sql = "INSERT INTO `cssa`.`user` (`id`, `email`, `password`, `memberid`) VALUES (NULL, '".$email."', '".$password."', '".$memberid."');";
$list=mysql_query($sql,$conn);
	if($list = 1)
	{
		echo "add to user table ok";
	}
	else
	{
		echo "add to user table error";
	}
	}
 
 $url = "../login.html";
 echo "去掉注释 自动跳转到 ".$url;
 //去掉注释 自动跳转
 //header("location:".$url."");

?>
