<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADMIN_PANNEL</title>
</head>

<body>
<font color="#CC0000" size="+3">
<h1 >Be careful.You can not undo any action!!!!</h1>
</font>
<?php
include("../db.class.php");
$db = new DB($base, $server, $user, $pass);

if(isset($_POST['password']))
{
	if($_POST['password']=="admin is admin")
	{
		$_SESSION['admin']="1234admin";
		}
	else
	{
		
		 //echo "wrong password try again!!1 <br\>";
		 }
	}
	
if(!isset($_SESSION['admin']))
{
	
	?>
    
    
    <form action="index.php" method="post" name="form1">
    please login <br\>
    
    <table width="200" border="1">
  <tr>
    <td><input name="password" type="password" size="25" />&nbsp;</td>
    <td><input name="submit" type="submit" value="submit" /></td>
  </tr>
</table>

    </form>
    <?php
	
}




elseif(!isset($_GET['action']))
{
 ?>

<table width="200" border="1">
  <tr>
    <td><a href="index.php?action=al" >add new level</a></td>
  </tr>
  <tr>
    <td><a href="index.php?action=eul">edit user level</a></td>
  </tr>
  <tr>
    <td><a href="index.php?action=el">edit level</a></td>
  </tr>
  <tr>
    <td><a href="index.php?action=du">delete user</a></td>
  </tr>
  <tr>
    <td><a href="index.php?action=dl">delete level</a></td>
  </tr>
  <tr>
    <td><a href="userview.php" target="_blank">view full users details</a></td>
  </tr>
</table>
<?php }
else
{
	?>
    
<p>	 <a href="index.php">back</a></p>
    <?php
	$action=$_GET['action'];
	switch($action)
	{
		case "al":
		
		?>
        
        
        <form enctype="multipart/form-data" action="addlevel.php" method="post" >
        <table width="100%" border="1">
  <tr>
    <td width="406">Question</td>
    <td width="407"><input name="image" id="image" type="file"  /></td>
  </tr>
  <tr>
    <td>Answer</td>
    <td>&nbsp; <input name="answer" type="text" /></td>
  </tr>
  <tr>
    <td>Title</td>
    <td><label for="title"></label>
      <input type="text" name="title" id="title" /></td>
  </tr>
  <tr>
    <td>Add new level</td>
    <td><input type="submit" name="button" id="button" value="Submit" /></td>
  </tr>
  
        </table>
</form>

        <?php
		break;
		case "du":
		$result=$db->query("SELECT * FROM user order by full_name");
		?>
        <table width="200" border="1">
  


        <?php
		
		while($row =$db->fetchNextObject($result))
		{
		?>
        <form action="deleteuser.php" method="post">
        <tr>
    <td><?php echo $row->email ?></td>
    <td><?php echo $row->full_name?></td>
    <td><input name="" type="submit" value="delete him" /> <input name="id" type="hidden" value="<?php echo $row->id ?>" /></td>
  </tr>
        </form>
       
        
        <?php
		
		}
		echo "</table>";
		break;
		case "dc":
		$result=$db->query("SELECT * FROM comment,user where user.id=comment.uid order by lid");
		?>
        
        <table width="100%" border="1">
  


        <?php
		
		while($row =$db->fetchNextObject($result))
		{
		?>
<form action="deletecomment.php" method="post">
        <tr>
    <td><?php echo $row->lid ?></td>
    <td><?php echo $row->full_name ?></td>
  
    <td><?php echo $row->msg ?></td>
    <td><input name="" type="submit" value="delete comment" /> <input name="cid" type="hidden" value="<?php echo $row->cid ?>" /></td>
  </tr>
        </form>
       
        
        <?php
		
		}
		echo "</table>";
		break;
		
        
		case "du":$result=$db->query("SELECT * FROM user order by full_name");
		?>
        <table width="100%" border="1">
  


        <?php
		
		while($row =$db->fetchNextObject($result))
		{
		?>
        <form action="deleteuser.php" method="post">
        <tr>
    <td><?php echo $row->email ?></td>
    <td><?php echo $row->fullt_name ?></td>
    <td><input name="" type="submit" value="delete him" /> <input name="id" type="hidden" value="<?php echo $row->id ?>" /></td>
  </tr>
        </form>
       
        
        <?php
		
		}
		echo "</table>";
		break;
		case "dl":$result=$db->query("SELECT * FROM level order by lid");
		?>
        
        <table width="100%" border="1">
  


        <?php
		
		while($row =$db->fetchNextObject($result))
		{
		?>
<form action="deletelevel.php" method="post">
        <tr>
    <td><?php echo $row->lid ?></td>
    <td><?php echo $row->answer ?></td>
    <td><?php echo $row->question ?></td>
    <td><?php echo $row->title?></td>
    <td><input name="" type="submit" value="delete level" /> <input name="lid" type="hidden" value="<?php echo $row->lid ?>" /></td>
  </tr>
        </form>
       
        
        <?php
		
		}
		echo "</table>";
		break;
		
		
		case "eul":
		$result=$db->query("SELECT * FROM user_level,user where user.id=user_level.uid order by lid");
		?>
        
        <table width="100%" border="1">
  


        <?php
		
		while($row =$db->fetchNextObject($result))
		{
		?>
<form action="edituserlevel.php" method="post">
        <tr>
    <td><?php echo $row->email?></td>
    <td><?php echo $row->full_name?></td>
    <td><?php echo $row->lid?></td>
    <td>new level  <input name="lid" type="text" /></td>
    <td><input name="" type="submit" value="update level" /> <input name="id" type="hidden" value="<?php echo $row->id ?>" /></td>
  </tr>
        </form>
       
        
        <?php
		
		}
		echo "</table>";
		break;
		
		
		case "el":
		
		?>
        
        
        <form enctype="multipart/form-data" action="editlevel.php" method="post">
        <table width="100%" border="1">
        <tr>
    <td >level</td>
    <td ><input name="lid" type="text" /></td>
  </tr>
  <tr>
  <tr>
    <td >Question</td>
    <td ><input name="image" type="file" size="50" /></td>
  </tr>
  <tr>
    <td>Answer</td>
    <td>&nbsp; <input name="answer" type="text" /></td>
  </tr>
  <tr>
    <td>Title</td>
    <td><label for="title"></label>
      <input type="text" name="title" id="title" /></td>
  </tr>
  <tr>
    <td>Edit this level</td>
    <td><input type="submit" name="button" id="button" value="Submit" /></td>
  </tr>
  
        </table>
</form>

        <?php
		break;
		
		
		}
	
	
	
	}
	ob_flush();

?>
</body>
</html>