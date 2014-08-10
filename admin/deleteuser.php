<?php 
include("../db.class.php");
$db = new DB($base, $server, $user, $pass);

if($_POST["id"]) {
	
	$db->execute("delete from user where id=".$_POST['id']);
	
	$db->execute("delete from user_level where uid=".$_POST['id']);
	
	header ("Location:".$_SERVER['HTTP_REFERER']);
	
	
} 
else{
    echo "There was an error deleting user, please try again!";
}

?>