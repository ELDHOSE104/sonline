<?php 
require_once("db.class.php");

$db=new DB($base,$server,$user,$pass);
if(isset($_POST['email']))
{
	
	try
	{
$email=$_POST['email'];
$password=$_POST['password'];

// To protect MySQL injection (more detail about MySQL injection)
$email = stripslashes($email);
$password = stripslashes($password);
$email = mysql_real_escape_string($email);
$password = mysql_real_escape_string($password);

   if($db->countOf('user',"email='$email' and password='$password'")==1)
   {
	session_start();
	$_SESSION['user']=$db->queryUniqueValue("select id from user where email='$email' and password='$password'");
	header("location: index.php");
	}
	else
	{
		echo '<script type="text/javascript"> alert("username of password is wrong please try again");window.location = "'.$_SERVER["HTTP_REFERER"].'";</script>';
		
		
		}
		
		
		}
	catch(Exception $ex)
	{
		
		echo 'some errors occured)';
		}

}
?>