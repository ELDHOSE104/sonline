<?php 


	require_once("db.class.php");
	$db=new DB($base,$server,$user,$pass);
	$comment=$db->query('select * from user,user_level where user.id=user_level.uid order by lid desc,user_level.time');
		$i=0;
?>



<li id="page_topper"> <a href="#!/page_home" class="close"></a>
      <div class="container">
        <div class="wrapper">
          <h1 align="center" class="color_yellow">RANK LIST</h1>
          <div class="viewport viewport2">
            <div class="overview overview2">
            <div class="fullwidth"><h3>
            <table width="100%" border="2" align="left" cellpadding="4" >
            <tr align="justify" class="color_yellow" height="40"><th width="10%">RANK</th><th width="25%">NAME</th><th width="49%">COLLEGE</th><th width="16%">LEVEL</th></tr>
            <?php while($row =$db->fetchNextObject($comment)){ $i++; ?>
            <!-- start here-->
               <tr class="color_white" align="justify" height="40">
               <td><?php echo $i; ?></td>
                <td><?php echo $row->full_name; ?></td>
                <td><?php echo $row->college; ?></td>
                 <td><?php echo $row->lid; ?></td>
                 </tr>
             
           <!-- end here-->
     <?php }?>
     </table></h3>
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
 