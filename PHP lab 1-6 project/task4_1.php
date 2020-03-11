


<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'header.php'
    ;?>

    <?php
    $content_list = array(
    "23815" => array(
        "id" => "23815",
        "name" => "Nikita",
    "surname"  => "Minakov",
    "group" => "Csse1707"
    ),
    "23754" => array(
        "id" => "23754",
        "name" => "Sangar",
        "surname"  => "Abilmazinov",
        "group" => "Csse1707"
    ),
    "23088" => array(
        "id" => "23088",
        "name" => "Don-Dilya-Don",
        "surname"  => "Don Don",
        "group" => "Csse1707"
    )
    );
    ;?>
    <?php
    $content_list_items = array(
        "C" => array(
            "id" => 0,
            "name" => "SDP 10",
            "credits"  => 5,
            "cost" => 21000
        ),
        "Python" => array(
            "id" => 1,
            "name" => "Application development python",
            "credits"  => 3,
            "cost" => 21200
        ),
        "Java" => array(
            "id" => 2,
            "name" => "Java EE development",
            "credits"  => 4,
            "cost" => 23020
        )
    );
    ;?>


</head>

<body>
<h3>
    <ol>
        <li><em>ID:</em> <?php echo $_POST["id"]?></li>
        <?php
        foreach($content_list as $x => $x_value) {
            if ($_POST["id"] == $x_value["id"]) {
                ?>
                <li><em>Name: </em> <?php echo $x_value["name"] ?></li>
                <li><em>Last Name: </em> <?php echo $x_value["surname"] ?></li>
                <li><em>Group: </em> <?php echo $x_value["group"] ?></li>
                <?php
            }
        }
            ?>

    </ol>

    <ol>
        <?php
        $temp = $_POST["item_id"];

        foreach($content_list_items as $x => $x_value) {

            if ($temp == $x_value["id"]) {
                $retake = $x_value["credits"]*$x_value["cost"];
                ?>
                <li><em>Name: </em> <?php echo $x_value["name"] ?></li>
                <li><em>Number of credits: </em> <?php echo $x_value["credits"] ?></li>
                <li><em>Cost: </em> <?php echo $x_value["cost"] ?></li>
                <?php
            }
        }
        ?>

    </ol>

    <ol>

        <?php
        $temp1 = $_POST["mark"];
        if ($temp1 < 50)
        {
            ?>
            <li><em>Your mark is less 50! You should pay for retake :</em> <?php echo $retake?></li>
            <?php
        } elseif ($temp1 >49 and $temp1<60) { ?>
            <li><em>Your mark is "D</li>
            <?php
        }elseif ($temp1 >59 and $temp1<70) { ?>
            <li><em>Your mark is "C"</li>
            <?php
        }elseif ($temp1 >69 and $temp1<90) { ?>
            <li><em>Your mark is "B"</li>
            <?php
        }elseif ($temp1 >89 and $temp1<101) { ?>
            <li><em>Your mark is "A"</li>
            <?php
        }
        ?>



    </ol>

</h3>

</body>
<?php include 'footer.php'
;?>
</html>