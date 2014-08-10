<?php 
include("../db.class.php");
$db = new DB($base, $server, $user, $pass);
$target_path = "uploads/";

$target_path = $target_path . basename( $_FILES['image']['name']); 

if(move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) {
	
	$db->execute("INSERT INTO level VALUES (NULL,'".$target_path."','".$_POST['answer']."','".$_POST['title']."')");
	header ("Location:".$_SERVER['HTTP_REFERER']);
	
	
} 
else{
    echo "There was an error uploading the file, please try again!";
}

?>