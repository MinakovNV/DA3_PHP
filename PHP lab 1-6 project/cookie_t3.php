<?php 
session_start();
include "db_php_lang.php"; 
?>

<html>
<head>

    <?php include 'header.php'
    ;?>
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
			<label for="lang"><?php echo $data[$_SESSION['lang']]['language'];?></label>
			<select class="form-control" name="lang">
				<option selected>Choose...</option>
				<option value="ru">Русский</option>
				<option value="en">English</option>
			</select>
			<input class="btn btn-primary mt-4" type="submit" value="Выбрать">
		</div>
		<div class="form-group">
			<label for="name"><?php echo $data[$_SESSION['lang']]['name_label'];?></label>
		<input type="text" name="name" class="form-control" id="name" />
		</div>
		
		<div class="form-group">
			<label for="age"><?php echo $data[$_SESSION['lang']]['age'];?></label>
			<input type="number" name="age" class="form-control" id="age"/>
		</div>
		
		<div class="form-group">
			<label for="exampleFormControlSelect1"><?php echo $data[$_SESSION['lang']]['country_label'];?></label>
			<select class="form-control" id="exampleFormControlSelect1">
				<option>Казахстан</option>
				<option>США</option>
				<option>Россия</option>
			</select>
		</div>
		
		<div class="form-check" name="check">
		<label><?php echo $data[$_SESSION['lang']]['gender'];?></label></br>
			<input class="form-check-input" type="checkbox" name="male" id="male">
			<label class="form-check-label" for="male">
				<?php echo $data[$_SESSION['lang']]['male']['male'];?>
			</label>
		</div>
		<div class="form-check">
			<input class="form-check-input" type="checkbox" name="female" id="female">
			<label class="form-check-label" for="female">
				<?php echo $data[$_SESSION['lang']]['female']['female'];?>
			</label>
		</div>
		</div>
		</br>
		<div class="form-group">
			<label for="num"><?php echo $data[$_SESSION['lang']]['insurance'];?></label>
		<input type="text" name="num" class="form-control" id="num" />
		</div>
		
		<input class="btn btn-primary mt-4" name="but" type="submit" value="<?php echo $data[$_SESSION['lang']]['submit'];?>">
	</form>
		
		

</body>
<?php include 'footer.php'
;?>
</html>