<?php 
if(isset($_SESSION['user']))
{
include_once("db.class.php");
$db = new DB($base, $server, $user, $pass);
$result=$db->query("SELECT * FROM `level` WHERE lid=(select lid from user_level where uid=".$_SESSION['user'].")");

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
	  window.location="#!/page_blog";
	  </script>
         
         <?php
		 
		 $db->query("update user_level set lid=lid+1,time=NOW() where uid=".$_SESSION['user']);
		 
		}
		else
		{?>
      <script type="text/javascript">
	  alert("wrong answer try again :-)");
	   window.location="#!/page_blog";
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
 
 <li id="page_blog"> <a href="#!/page_home" class="close"></a>
      <div class="container">
        <div class="wrapper">
          <h1 class="color_yellow">LEVEL <?php echo $row->lid ?></h1>
          <div class="viewport viewport2">
            <div class="overview overview2">
              <div class="two_third">
                <div class="post" style="height:200px;">
                  <div class="postimg"> <img src="admin/<?php echo $row->question ?>" class="pic" alt="" width="550" height="280" title="<?php echo $row->title ?>"/></div>
                  <h1 class="color_yellow">Your answer here</h1><br />
                  <form action="index.php" method="get">
            <table width="552" border="1" cellpadding="5">
  <tr>
    <td><input name="ans" type="text" /></td>
    <td><input type="submit"   value="Submit" /></td>
    <td>&nbsp;</td>
  </tr>
  </table>

            </form>
                  
                <div class="divider" style="margin-top:20px;"></div>
                </div></div>
              <div class="one_third_last">
                <aside id="sidebar">
                  <ul>
                    <li class="widget-container">
                      <h3 class="color_yellow">Toppers</h3>
                      <ul class="rp-widget">
                      <?php $maxlevel=$db->query("select max(lid) as lid from user_level limit 1");
		  $count=$db->fetchNextObject($maxlevel);
		  $toppers=$db->query("select * from user,user_level where   user_level.uid=user.id and user_level.lid=$count->lid order by user_level.time");
		  while($row1=$db->fetchNextObject($toppers))
		  {
		  ?>
                        <li> <img src="images/blog/rp1.jpg" alt="" class="alignleft pic"/><p><br/><h2 class="color_yellow" >LEVEL <?php echo $row1->lid ?></h2><br />
                          <h3 class="color_white"><?php echo $row1->full_name ?> </h3><h4 class="color_white" ><?php echo $row1->college ?></h4>
                           <span class="clear"></span> </li>
                        
                    
            <?php }?>        
                    
                  </ul>
                </aside>
              </div>
            </div>
          </div>
          <div class="scrollbar scrollbar2">
            <div class="track">
              <div class="thumb thumb2"></div>
            </div>
          </div>
        </div>
      </div>
    </li>
    <?php }?>