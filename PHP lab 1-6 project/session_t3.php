<?php	
include "db_php_lang.php";
	session_start();
	if(isset($_POST['lang']) && $_POST['lang']=='en'){
			$_SESSION['lang'] = 'en';
			
		/*$label1 = $datubmia['en']['language'];
		$name = $data['en']['name_label'];
		$age = $data['en']['age'];
		$country = $data['en']['country_label'];
		$gender = $data['en']['gender']
		$male = $data['en']['male']['male']
		$female = $data['en']['female']['female']
		$insurance = $data['en']['insurance']
		$but = $data['en']['submit']*/
		
	}
	else{
			
		$_SESSION['lang'] = 'ru';
			
	}
		header("Location: cookie_t3.php");
?>