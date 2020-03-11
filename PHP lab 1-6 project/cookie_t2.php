<html>


<head>
	<title>task2</title>
    <?php include 'header.php'
    ;?>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="cookie_2.css" media="all">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</head>
<body>
	<form action="cookie_2.php" method="post" id="form1">
		<div class="form-group">
			<label for="name">Insert name:</label>
		<input type="text" name="name" class="form-control" id="name" value="<?php if(isset($_COOKIE["name_1"])){echo $_COOKIE["name_1"];} else {echo "";} ?>"/>
		</div>
	  
		<div class="form-group">
			<label for="surname">Insert surname:</label>
			<input type="text" name="surname" class="form-control" id="surname" value="<?php if(isset($_COOKIE["surname_1"])){echo $_COOKIE["surname_1"];} else {echo '';} ?>"/>
		</div>
		
		<div class="form-group">
			<label for="age">Your age</label>
			<input type="number" name="age" class="form-control" id="age" value="<?php if(isset($_COOKIE["age_1"])){echo $_COOKIE["age_1"];} else {echo '';} ?>"/>
		</div>
		
		<div class="form-group">
			<label for="country">Your country:</label>
			<input type="text" name="country" class="form-control" id="country" value="<?php if(isset($_COOKIE["country_1"])){echo $_COOKIE["country_1"];} else {echo '';} ?>"/>
		</div>
		
		<div class="form-check" name="check">
		<label>Gender</label></br>
			<input class="form-check-input" type="checkbox" name="male" id="male" '<?php if(isset($_COOKIE["check_1"])) {echo 'checked'; } ?>'>
			<label class="form-check-label" for="male">
				Male
			</label>
		</div>
		<div class="form-check">
			<input class="form-check-input" type="checkbox" name="female" id="female" <?php if(isset($_COOKIE["check_1"])) {echo 'checked'; } ?>>
			<label class="form-check-label" for="female">
				Female
			</label>
		</div>
		</div>
		
		<input class="btn btn-primary mt-4" type="submit" value="Save">
	</form>
</body>
</head>



<?php include 'footer.php'
;?>

</html>