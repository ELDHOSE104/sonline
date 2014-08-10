<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>view users</title>
</head>

<body>
<marquee direction="right"><font color="#FF0000">!! HIGHLY CONFIDENTIAL !!</font></marquee>

<table width="1169" border="1" align="center">
  <tr>
    <td width="41" align="center">uid</td>
    <td width="43" align="center">lid</td>
    <td width="208"><div align="center">name</div></td>
    <td width="181"><div align="center">email</div></td>
    <td width="146"><div align="center">password</div></td>
    <td width="169"><div align="center">mobile</div></td>
    <td width="165"><div align="center">college</div></td>
    <td width="164" align="center">created at</td>
   
  </tr>
<?php

$eldhose=mysql_connect('localhost','cazablaz_takuser','](+*TFADbD;=');
mysql_select_db('cazablaz_breadcrumbs',$eldhose);

$q="select * from user";
$r="select * from user_level";
$s=mysql_query($q);
$t=mysql_query($r);
while($u=mysql_fetch_array($s)) 
{

  

?>
  
  <tr>
    <td ><?php echo $u['id']?></td>
    <td><?php if( $v=mysql_fetch_array($t))
	{  echo $v['lid']?></td>
	
    <td><?php echo $u['full_name']?></td>
    <td><?php echo $u['email']?></td>
    <td><?php echo $u['password']?></td>
    <td align="center"><?php echo $u['phno']?></td>
    <td><?php echo $u['college']?></td>
    <td><?php echo $u['created_at']?></td> 
  </tr>
  <?php } }?>
</table>
<p>&nbsp;</p>

</body>
</html>
