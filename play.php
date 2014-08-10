ow
<?php 
session_start();
include("db.class.php");
$db = new DB($base, $server, $user, $pass);
$result=$db->query("SELECT * FROM `level` WHERE lid=(select lid from user_level where uid=".$_SESSION['user'].")");
 echo ($_SESSION['user'] );

if(!$row =$db->fetchNextObject($result))
{
	die("you have reached the maximum level..please wait we will update next level");
	
	}

if(isset($_GET['ans']))
{
	if($row->answer==$_GET['ans'])
	{
		 ?>
      <script type="text/javascript">
	  alert("correct  answer :-)");
	  </script>
         
         <?php
		 
		 $db->query("update user_level set lid=lid+1 where uid=".$_SESSION['user']);
		 
		}
		else
		{?>
      <script type="text/javascript">
	  alert("wrong answer try again :-)");
	  </script>
         
         <?php
			}
	
	}
	
	$result=$db->query("SELECT * FROM `level` WHERE lid=(select lid from user_level where uid=".$_SESSION['user']." )");

if(!$row =$db->fetchNextObject($result))
{
	die("nothing maches with user");
	
	}
  ?>

<!-- PLAY START -->
    <li id="page_prices"> <a href="#!/page_home" class="close"></a>
      <div class="container">
        <div class="wrapper">
          <h1 class="color_yellow">Level <?php echo $row->lid ?></h1>
          <div class="two_third">
            <div class="priceimg"></div>
            <h4 class="color_white"><span class="priceimg"><img src="admin/<?php echo $row->question ?>" class="pic" alt="" title="<?php echo $row->title ?>" height="400" width="100%"/></span></h4>
            <p>
            <div >Enter your answer here</div>
            </p>
            <form action="play.php" method="get">
            <table width="552" border="1" cellpadding="5">
  <tr>
    <td><input name="ans" type="text" /></td>
    <td><input type="submit"   value="Submit" /></td>
    <td>&nbsp;</td>
  </tr>
  </table>

            </form>
           
         </div>
         
          <div class="one_third_last"> 
          <center><h1 class="color_yellow">Toppers</h1>
          <?php $maxlevel=$db->query("select max(lid) as lid from user_level limit 1");
		  $count=$db->fetchNextObject($maxlevel);
		  $toppers=$db->query("select * from users,authentications,user_level where users.id=authentications.user_id and user_level.uid=users.id and user_level.lid=$count->lid");
		  
		  ?>
          </center>
          <?php while($row1=$db->fetchNextObject($toppers))
		  {
			  
			  
		  ?>
          <h4 class="color_white"><?php echo $row1->display_name?></h4>
            <h3 class="color_yellow">Level <?php echo $row1->lid ?></h3>
            <div class="divider"></div>
            <?php }?>
          </div>
        </div>
      </div>
    </li>
    <!-- PLAY END-->
