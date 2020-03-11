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

<form action="task4_1.php" method="post">
    <p>
        <label for="inputName">Input Student ID:</label>
        <input type="text" name="id" id="inputName">
    </p>
    <p>

        <label for="item_id">Choose a course:</label>
        <select name="item_id" >
        <option name="item_id" value=0>SPB 10</option>
        <option name="item_id" value=1>Python</option>
        <option name="item_id" value=2>Java</option>
    </select>
    </p>
    <p>
        <label for="inputmark">Input Mark:</label>
        <input type="text" name="mark" id="inputmark">
    </p>
        <input type="submit" value="Submit">

</form>
</body>


<?php include 'footer.php'
;?>
</html>