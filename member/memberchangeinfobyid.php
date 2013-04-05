<?php

if($_POST['check']==on)
{
	print_r($_REQUEST);
	$id = $_POST['id'];
	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$major = $_POST['major'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	require('../include/init.php');
$conn = mysql_connect("localhost","root","") or die("error");
  
  mysql_select_db("cssa",$conn);
  mysql_query("set names utf8;");//设置编码
$sql="UPDATE `cssa`.`member` SET `name` = \"".$name."\" ,`gender` = \"".$gender."\" ,`major` = \"".$major."\" ,`phone` = \"".$phone."\" ,`email` = \"".$email."\" WHERE `member`.`id` =".$id.";";
 
 $list=mysql_query($sql,$conn);
 $url = "memberbyid.php?id=".$id;
 echo $url;
 header("location:".$url."");

	}
	else
	{
		echo "no check";
		}
?>
