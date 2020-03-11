<html>

<head>
    <meta charset=UTF-8" />

    <title>PHP Quiz</title>

    <link rel="stylesheet" type="text/css" href="style.css" />
    <?php include 'header.php'
    ;?>
</head>

<body>

<?php include 'db_task3.php'
;?>

<div id="page-wrap">

    <h1>Result</h1>

    <?php
    $answer0 = $_POST['question-0-answers'];
    $answer1 = $_POST['question-1-answers'];
    $answer2 = $_POST['question-2-answers'];
    $answer3 = $_POST['question-3-answers'];
    $answer4 = $_POST['question-4-answers'];
    $answer5 = $_POST['question-5-answers'];
    $answer6 = $_POST['question-6-answers'];
    $answer7 = $_POST['question-7-answers'];
    $answer8 = $_POST['question-8-answers'];

    $totalCorrect = 0;

    if ($answer0 == "0") { $totalCorrect++; }
    if ($answer1 == "2") { $totalCorrect++; }
    if ($answer2 == "1") { $totalCorrect++; }
    if ($answer3 == "0") { $totalCorrect++; }
    if ($answer4 == "1") { $totalCorrect++; }
    if ($answer5 == "2") { $totalCorrect++; }
    if ($answer6 == "0") { $totalCorrect++; }
    if ($answer7 == "1") { $totalCorrect++; }
    if ($answer8 == "2") { $totalCorrect++; }

    echo "<h3><div id='results'>$totalCorrect / 9 correct</div></h3><br>";

    if ($totalCorrect  < 5) echo "<h3><div id='results'>You Failed</div></h3>";
    elseif ($totalCorrect  > 4 and $totalCorrect  < 8 ) echo "<h3><div id='results'>Good</div></h3>";
    else echo "<h3><div id='results'>Perfect</div></h3>";



    ?>

</div>

</body>
<?php include 'footer.php'
;?>
</html>