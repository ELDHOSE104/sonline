<?php 

require_once("db.class.php");

$db=new DB($base,$server,$user,$pass);
if(isset($_POST['email']))
{
	try
	{
	$_name=$_POST['full_name'];
	$_name=stripslashes($_name);
	$_name=mysql_real_escape_string($_name);
	$_email=$_POST['email'];
	$_email=stripslashes($_email);
	$_email=mysql_real_escape_string($_email);
	$_password=$_POST['password'];
	$_password=stripslashes($_password);
	$_password=mysql_real_escape_string($_password);
	$_phno=$_POST['phno'];
	$_phno=stripslashes($_phno);
	$_phno=mysql_real_escape_string($_phno);
	$_college=$_POST['college'];
	$_college=stripslashes($_college);
	$_college=mysql_real_escape_string($_college);
	$result=$db->query("select * from user where email='$_email'");
	if($db->fetchNextObject($result))
	   {
		echo'<script type="text/javascript"> alert("email already registered try sign in");window.location = "'.$_SERVER["HTTP_REFERER"].'";</script>';
		
		
		}
	else
	{	
		$result=$db->query("select * from user where phno=$_phno");
	if($db->fetchNextObject($result))
	    {
		echo'<script type="text/javascript"> alert("phone number already registered try sign in");window.location = "'.$_SERVER["HTTP_REFERER"].'";</script>';
		
		
		}
	
	   else
	   {
	   $result=$db->execute("insert into user values(DEFAULT,'$_email','$_password','$_name',$_phno,'$_college',NOW())",false);
	   
	   //added line
	     $result=$db->execute("insert into user_level values(DEFAULT,'1',NOW())",false); 
	  
	  
	   session_start();
	    $_SESSION['user']=($db->maxOfAll("id","user"));
		header("location: index.php");
		
	   }
	}
	
	}
	
	catch(Exception $ex)
	{
		echo "something went wrong";
		
		
		}
	
	
	}

 ?>