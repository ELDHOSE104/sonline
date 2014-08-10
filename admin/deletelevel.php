<?php 
include("../db.class.php");
$db = new DB($base, $server, $user, $pass);

if($_POST["lid"]) {
	
	$db->execute("delete from level where lid=".$_POST['lid']);
	header ("Location:".$_SERVER['HTTP_REFERER']);
	
	
} 
else{
    echo "There was an error deleting level, please try again!";
}

?>