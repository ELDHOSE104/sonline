 <li id="page_login"> <a href="#!/page_home" class="close"></a>
      <div class="container">
        <div class="wrapper">
          <h1 class="color_yellow">Please login/register to continue</h1>
          <div class="viewport viewport2">
            <div class="overview overview2">
     
              <div class="divider"></div>
              
              <div class="one_half">
              
              
              <h2 class="color_white">New users</h2>
            <form id="form2"  action="register.php" method="post" onsubmit="return validate(this)">
             
              <fieldset>
              <label class="Name">Full name
              <input type="text" value="" name="full_name" id="fn" onblur="if (this.value.length < 5) { alert('We expect your Full name is atlease 5 charecters long.');}"  >
               </label>
              
              <label class="email">email
              <input type="email" value="" name="email">
               </label>
              <br>
              <label class="password">password
              <input type="password" value="" name="password" onblur="if (this.value.length < 5||this.value.length > 15) { alert('Please enter a password that is between 5 and 15 characters long.');}">
              </label>
              <br>
              
              <label class="password repeat" >password repeat
              <input type="password" value="" name="password_repeat">
            </label>
            
              
              <br>
              <label class="phone" >phone number(10 digit)
              <input type="phone" value="" name="phno" id="mobile_number">
              </label>
             
              <br>
              <label class="text" >college
              <input type="text" value="" name="college" >
             </label>
              <br>
              <br>
               <label class="text" >
              <input type="submit" value="submit" />
              </label>
              </fieldset>
            </form>
                 </div>
              <div class="one_half_last">
                
                <h2 class="color_white">Existing users</h2>
            <form id="form3" action="signin.php" method="post"  onsubmit="return validate1(this)">
             
              <fieldset>
              <label class="email">email
              <input type="email" name="email" value="">
              </label>
              <br>
              <label class="password">password
              <input type="password"  name="password">
              </label>
              <br>
              <br >
              <label class="password">
              <input type="submit" value="submit" />
              </label>
              </fieldset>
            </form>
            <script type="text/javascript">
			function validate(f)
			{
				if(f.full_name.value.length<1)
				{
					alert("first name required");
				return false;
				
				}
				if(f.full_name.value.length<5)
				{
					alert("we expect your full name is atleast 5 charecters long");
					return false;
					
				}
				
				if(f.password.value!=f.password_repeat.value)
				{
					alert("passwords do not match!");
				return false;
				}
				
				if(f.college.value.length<3)
				{
					alert("please enter a valid college name");
				return false;
				}
				if(!validate_Mobile(f.phno.value))
				{
					return false;
				}
				var password =f.password.value;
				var passed = validatePassword(password, {
				length:   [5, 15],
				lower:    0,
				upper:    0,
				numeric:  0,
				special:  0,
				badWords: ["password", "TAKSHAK", "takshak","Password","PASSWORD"],
				badSequenceLength: 4
				});
				if(!passed)
				{
					alert("your password is too simple and easy to guss! please try another password");
					return false;
				}	
					
			}
			function validate_Mobile(mobileno)
			{
				if(mobileno != "")
			{
 
            var y = mobileno;
           if(isNaN(y)||y.indexOf(" ")!=-1)
           {
              alert("Invalid Mobile No.");
              document.getElementById('mobile_number').focus();
              return false;
           }
         
           if (y.length>10 || y.length<10)
           {
                alert("Mobile No. should be 10 digit");
                document.getElementById('mobile_number').focus();
                return false;
           }
           if (!(y.charAt(0)=="9" || y.charAt(0)=="8" || y.charAt(0)=="7"))
           {
                alert("Mobile No. should start with 9 or 8 or 7 ");
                document.getElementById('mobile_number').focus();
                return false
           }
         }

				return true;
				
				}
				
				function validate1(f1)
				{
					var password =f1.password.value;
				var passed = validatePassword(password, {
				length:   [5, 15],
				lower:    0,
				upper:    0,
				numeric:  0,
				special:  0,
				badWords: ["password","Password","PASSWORD"],
				badSequenceLength: 4
				});
				if(!passed)
				{
					alert("wrong password");
					return false;
				}	
				}
			</script>
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