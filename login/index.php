<?php 
// note: in your application you probably have to include these only when required.
	$hybridauth_config ='../hybridauth/config.php';
	require_once( "../hybridauth/Hybrid/Auth.php" );
	require_once( "../db.class.php" );
	if(isset($_GET['provider']))
	{
		try{
		// create an instance for Hybridauth with the configuration file path as parameter
			$hybridauth = new Hybrid_Auth( $hybridauth_config );
			$provider=$_GET['provider'];

		// try to authenticate the selected $provider
			$adapter = $hybridauth->authenticate('google');
			print_r($adapter);

		// grab the user profile
			$user_profile = $adapter->getUserProfile();
			print_r($user_profile);
		}
		catch( Exception $e ){
			// Display the recived error
			switch( $e->getCode() ){ 
				case 0 : $error = "Unspecified error."; break;
				case 1 : $error = "Hybriauth configuration error."; break;
				case 2 : $error = "Provider not properly configured."; break;
				case 3 : $error = "Unknown or disabled provider."; break;
				case 4 : $error = "Missing provider application credentials."; break;
				case 5 : $error = "Authentification failed. The user has canceled the authentication or the provider refused the connection."; break;
				case 6 : $error = "User profile request failed. Most likely the user is not connected to the provider and he should to authenticate again."; 
					     
					     break;
				case 7 : $error = "User not connected to the provider."; 
					     
					     break;
			} 

			// well, basically your should not display this to the end user, just give him a hint and move on..
			$error .= "<br /><br /><b>Original error message:</b> " . $e->getMessage(); 
			$error .= "<hr /><pre>Trace:<br />" . $e->getTraceAsString() . "</pre>"; 
			echo $error;
		}
		
		
		}
		else
		{
			
			echo "hello";
			}
	
?>