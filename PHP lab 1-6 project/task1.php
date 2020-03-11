<?php include 'header.php'
;?>

<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="style.css">

</head>
<body id="page-top" class="politics_version">

<form action="task1_1.php" method="post">
    <p>
        <label for="inputName">Name of channel:</label>
        <input type="text" name="name" id="inputName">
    </p>
    <p>
        <label for="inputEmail">Email:</label>
        <input type="text" name="email" id="inputEmail">
    </p>
    <p>
        <label for="inputSubject">Type:</label>
        <input type="text" name="subject" id="inputSubject">
    </p>
    <p>
        <label for="inputComment">Description:</label>
        <textarea name="message" id="inputComment" rows="5" cols="30"></textarea>
    </p>
    <input type="submit" value="Submit">
    <input type="reset" value="Reset">
</form>


<?php include 'footer.php'
;?>
</body>
</html>