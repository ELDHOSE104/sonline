<?php 
if(isset($_POST['comment']))
{
	session_start();
	require_once("db.class.php");
	$db=new DB($base,$server,$user,$pass);
	$db->execute('insert into comment values(DEFAULT,(select lid from user_level where uid='.$_SESSION["user"].'),'.$_SESSION["user"].",'".$_POST["comment"]."',NOW())");
	}
	header("location: index.php#!/page_comment");

 ?>