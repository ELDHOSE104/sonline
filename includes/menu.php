 <nav class="menu">
      <ul id="menu">
      <li><a href="http://www.takshak13.com" target="_blank">Takshak</a></li> 
        <li><a href="#!/page_home">Home</a></li>
        <li><a href="<?php if(isset($_SESSION['user'])){echo'#!/page_play';}else{echo'#!/page_login';}?>">Play !</a></li>
        <li><a href="#!/page_rules">Rules</a></li>
        <li><a href="#!/page_topper">On The Top</a></li>
        <li><a href="https://www.facebook.com/takshak13" target="_blank">clue !</a></li>
      
        <?php 
		if(!isset($_SESSION["user"]))
		{
			?>
         <li><a href="#!/page_login">Login</a></li>       
            <?php
			}
			else
			{
				
				?>
         <li><a href="logout.php">Logout</a></li>
                
            <?php
				
				}
		?>  
       
      <!--  <li class="no_bg"><a href="#!/page_contact">Contacts</a></li>-->
      </ul>
    </nav>