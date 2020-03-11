
<html>
<head>

	<title><?php 
				if(isset($_COOKIE['name'])){ 
					echo $_COOKIE['name'];
				} 
				else {
					echo "QazaQtube";
				}
			?></title>
    <?php include 'header.php'
    ;?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="cookies.css" media="all">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"></head>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
	<form action="cookie.php" method="post" id="form1">
		<div class="form-group">
			<label for="name">Insert name</label>
			<input type="name" name="name" class="form-control" id="name">
		</div>
		<input class="btn btn-primary" name="submit" type="submit" value="Submit">
	</form>
</body>


<?php include 'footer.php'
;?>

</html>
