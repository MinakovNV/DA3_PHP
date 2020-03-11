
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'header.php'
    ;?>

</head>

<body>
<h3>
<p>Here is the information you have submitted:</p>
<ol>

    <li><em>Name:</em> <?php echo $_POST["name"]?></li>
    <li><em>Email:</em> <?php echo $_POST["email"]?></li>
    <li><em>Type:</em> <?php echo $_POST["subject"]?></li>
    <li><em>Description:</em> <?php echo $_POST["message"]?></li>

</ol>
</h3>

</body>
<?php include 'footer.php'
;?>
</html>