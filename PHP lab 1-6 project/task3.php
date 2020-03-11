
<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="style.css">
<?php include 'header.php'
;?>

</head>

<body id="page-top" class="politics_version">
<?php include 'db_task3.php'
;?>


<form action="task3_1.php" method="post" id="quiz">
    <ol>
    <?php
    foreach($content_list as $x => $x_value) {?>

        <li>
            <h3><?php echo $x_value["question"]; ?></h3>

            <div>
                <input type="radio" name="question-<?php echo $x_value["num"]; ?>-answers" id="question-1-answers-A" value="0" />
                <label for="question-<?php echo $x_value["num"]; ?>-answers-A"><?php echo $x_value["r1"]; ?></label>
            </div>

            <div>
                <input type="radio" name="question-<?php echo $x_value["num"]; ?>-answers" id="question-1-answers-B" value="1" />
                <label for="question-<?php echo $x_value["num"]; ?>-answers-B"><?php echo $x_value["r2"]; ?></label>
            </div>

            <div>
                <input type="radio" name="question-<?php echo $x_value["num"]; ?>-answers" id="question-1-answers-C" value="2" />
                <label for="question-<?php echo $x_value["num"]; ?>-answers-C"><?php echo $x_value["r3"]; ?></label>
            </div>

        </li>

        <?php

        }
        ?>

    </ol>

    <input type="submit" value="Submit" class="submitbtn" />

</form>


</body>
<?php include 'footer.php'
;?>
</html>