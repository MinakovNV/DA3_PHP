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

<?php include 'db_file.php'
;?>

<div class="container">
    <div class="row">
        <?php
        foreach($content_list as $x => $x_value) {?>


            <?php
            if ($x_value['type'] == 'game') {
                ; ?>

                <div class="col-md-4 col-sm-6 col-lg-4">
                    <div class="post-box">
                        <div class="post-thumb">
                            <img src="<?php echo $x_value["image"]; ?>" class="img-fluid" alt="post-img"/>
                            <div class="date">
                                <span><?php echo $x_value["time"]; ?></span>
                                <span>Feb</span>
                            </div>
                        </div>
                        <div class="post-info">
                            <h4><?php echo $x_value["name"]; ?></h4>
                            <ul>
                                <li>by admin</li>
                                <li>Feb 17, 2020</li>
                                <li><a href="#"><b> Comments</b></a></li>
                            </ul>
                            <p><?php echo $x_value["disc"]; ?></p>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>
</div>>

<?php include 'footer.php'
;?>
</body>
</html>