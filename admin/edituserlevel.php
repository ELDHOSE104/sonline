<?php 
include("../db.class.php");
$db = new DB($base, $server, $user, $pass);

if($_POST["lid"]) {
	
	$db->execute("UPDATE `user_level` SET `lid`=".$_POST['lid']." WHERE uid=".$_POST['id']);
	header ("Location:".$_SERVER['HTTP_REFERER']);
	
	
} 
else{
    echo "There was an error deleting level, please try again!";
}

?>