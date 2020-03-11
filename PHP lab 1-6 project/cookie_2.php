<?php
$name =  $_POST['name'];
$surname = $_POST['surname'];
$age = $_POST['age'];
$country = $_POST['country'];
$check = $_POST['check'];

if(isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['age']) && isset($_POST['country']) && isset($_POST['check'])){
	
	setcookie( 'name_1', $name, time() + 2629746 );
	setcookie( 'surname_1', $surname, time() + 2629746 );
	setcookie( 'age_1', $age, time() + 2629746 );
	setcookie( 'country_1', $country, time() + 2629746 );
	setcookie( 'check_1', $check, time() + 2629746 );
}

header("Location: cookie_t2.php")
?>