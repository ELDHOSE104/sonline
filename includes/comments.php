<?php 

if(isset($_SESSION['user']))
{
	require_once("db.class.php");
	$db=new DB($base,$server,$user,$pass);
	$comments=$db->query('select * from comment,user_level,user where comment.lid=user_level.lid and  user.id=user_level.uid and user_level.uid='.$_SESSION["user"]." order by comment.time ");
		
?>



<li id="page_comment"> <a href="#!/page_home" class="close"></a>
      <div class="container">
        <div class="wrapper">
          <h1 align="center" class="color_yellow">FORM </h1>
          <div class="viewport viewport2">
            <div class="overview overview2">
            <?php while($row =$db->fetchNextObject($comments)){?>
            <!-- start here-->
              <div class="fullwidth"> 
                <h3 class="color_yellow"><?php echo $row->full_name; ?></h3>
                <h4 class="color_white" style="margin-left:30;" ><?php echo $row->msg; ?></h4>
                 </div>
              <div class="divider"></div>
           <!-- end here-->
     <?php }?>
           <div class="fullwidth" > <form action="addcomment.php" method="post" >
                <p ><table width="714" height="300">
                <tr>
                <td width="626">
                  <textarea name="comment" cols="80" rows="3"></textarea>
                  <input name="" type="submit" value="comment here"  style="bottom: '20px'"/>
                  </td>
                  </tr></table>
           </p>
           </form>
              </div>
              <div class="divider"></div>
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