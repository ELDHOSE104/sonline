<?php 
include("../db.class.php");
$db = new DB($base, $server, $user, $pass);
$target_path = "uploads/";

$target_path = $target_path . basename( $_FILES['image']['name']); 

if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) {
	
	$db->execute("UPDATE `level` SET `question`='".$target_path."',`answer`='".$_POST['answer']."',`title`='".$_POST['title']."' WHERE lid=".$_POST['lid']);
	header ("Location:".$_SERVER['HTTP_REFERER']);
	
	
} 
else{
    echo "There was an error uploading the level, please try again!";
}

?>