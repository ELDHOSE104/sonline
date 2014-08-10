<?php 
include("../db.class.php");
$db = new DB($base, $server, $user, $pass);

if($_POST["cid"]) {
	
	$db->execute("delete from comment where cid=".$_POST['cid']);
	header ("Location:".$_SERVER['HTTP_REFERER']);
	
	
} 
else{
    echo "There was an error deleting level, please try again!";
}

?>