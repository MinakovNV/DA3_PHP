<?php include "db_php_lang.php"; 
	  session_start();
?>
<?php include 'header.php'
;?>
<html>
<head>
    <title>task2</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="session.css" media="all">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

</head>
<body>
	<form id="form1" method="post" action="session_t3.php">
		<div class="form-group" id="lang">
			<label><?php echo $data['ru']['language'];?></label>
			<select class="form-control" name="lang">
				<option selected>Choose...</option>
				<option value="ru">Русский</option>
				<option value="en">English</option>
			</select>
			<input class="btn btn-primary mt-4" type="submit" value="Выбрать">
		</div>
		<div class="form-group">
			<label for="name"><?php echo $data['ru']['name_label'];?></label>
		<input type="text" name="name" class="form-control" id="name" />
		</div>
		
		<div class="form-group">
			<label for="age"><?php echo $data['ru']['age'];?></label>
			<input type="number" name="age" class="form-control" id="age"/>
		</div>
		
		<div class="form-group">
			<label for="exampleFormControlSelect1"><?php echo $data['ru']['country_label'];?></label>
			<select class="form-control" id="exampleFormControlSelect1">
				<option>Kazakhstan</option>
				<option>USA</option>
				<option>South Korea</option>
				<option>Russia</option>
			</select>
		</div>
		
		<div class="form-check" name="check">
		<label><?php echo $data['ru']['gender'];?></label></br>
			<input class="form-check-input" type="checkbox" name="male" id="male">
			<label class="form-check-label" for="male">
				<?php echo $data['ru']['male']['male'];?>
			</label>
		</div>
		<div class="form-check">
			<input class="form-check-input" type="checkbox" name="female" id="female">
			<label class="form-check-label" for="female">
				<?php echo $data['ru']['female']['female'];?>
			</label>
		</div>
		</div>
		</br>
		<div class="form-group">
			<label for="num"><?php echo $data['ru']['insurance'];?></label>
		<input type="text" name="num" class="form-control" id="num" />
		</div>
		
		<input class="btn btn-primary mt-4" type="submit" value="<?php echo $data['ru']['submit'];?>">
	</form>
		
		

</body>
<?php include 'footer.php'
;?>
</html>