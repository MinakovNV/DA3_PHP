<html>
<?php include 'header.php'
;?>

<!-- Basic -->
<meta charset="utf-8">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="style.css">

<?php
$content_list = array(
    "blacksilverufa" => array(
    "name"  => "BlackSilverUfa",
    "time" => 11,
    "disc" => "Bacon iort loin kielbasa non pork chop aliqua. Jerky shank tri-tip capicola, non andouille tenderloin cupidatat turducken meatball pork beef eu shoulder jowl.",
    "image" => "img/0.png"
),
    "eligorko" => array(
    "name"  => "Eligorko",
    "time" => 18,
    "disc" => "Pork belly tempor ground round qui exercitation, jowl leberkas sed voluptate excepteur jerky. Reprehenderit veniam cow, quis in ribeye andouille eu pastrami eiusmod exercitation dolor.",
    "image" => "img/1.png"
),
    "jack" => array(
    "name"  => "JackShepard",
    "time" => 34,
    "disc" => "Gumbo beet greens corn soko endive gumbo gourd. Parsley shallot courgette tatsoi pea sprouts fava bean collard greens dandelion okra wakame tomato. Dandelion cucumber earthnut pea peanut soko zucchini.",
    "image" => "img/2.png"

),
    "droider" => array(
    "name"  => "Droider.RU",
    "time" => 23,
    "disc" => "I love fruitcake danish caramels. Tart danish pastry liquorice chocolate cake fruitcake. Bear claw gingerbread muffin I love apple pie apple pie tiramisu brownie chocolate. Sweet roll cotton candy cupcake gingerbread gummies jelly-o. Muffin I love croissant I love jelly-o brownie jelly beans. Toffee I love pastry.",
    "image" => "img/3.png"

),
    "wylsa" => array(
        "name"  => "Wylsacom",
        "time" => 2,
        "disc" => "I love fruitcake danish caramels. Tart danish pastry liquorice chocolate cake fruitcake. Bear claw gingerbread muffin I love apple pie apple pie tiramisu brownie chocolate. Sweet roll cotton candy cupcake gingerbread gummies jelly-o. Muffin I love croissant I love jelly-o brownie jelly beans. Toffee I love pastry.",
        "image" => "img/4.png"

    ),
    "ann" => array(
        "name"  => "Anna Safronova",
        "time" => 112,
        "disc" => "I love fruitcake danish caramels. Tart danish pastry liquorice chocolate cake fruitcake. Bear claw gingerbread muffin I love apple pie apple pie tiramisu brownie chocolate. Sweet roll cotton candy cupcake gingerbread gummies jelly-o. Muffin I love croissant I love jelly-o brownie jelly beans. Toffee I love pastry.",
        "image" => "img/5.png"

    ),
);
?>

<body>




<div class="card-group">
    <div class="card">
        <img src= "<?php echo $content_list["blacksilverufa"]["image"];?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $content_list["blacksilverufa"]["name"];?></h5>
            <p class="card-text"><?php echo $content_list["blacksilverufa"]["disc"];?></p>
            <p class="card-text"><small class="text-muted">Last updated <?php echo $content_list["blacksilverufa"]["time"];?> mins ago</small></p>
        </div>
    </div>
    <div class="card">
        <img src= "<?php echo $content_list["eligorko"]["image"];?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $content_list["eligorko"]["name"];?></h5>
            <p class="card-text"><?php echo $content_list["eligorko"]["disc"];?></p>
            <p class="card-text"><small class="text-muted">Last updated <?php echo $content_list["eligorko"]["time"];?> mins ago</small></p>
        </div>
    </div>
    <div class="card">
        <img src= "<?php echo $content_list["jack"]["image"];?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $content_list["jack"]["name"];?></h5>
            <p class="card-text"><?php echo $content_list["jack"]["disc"];?></p>
            <p class="card-text"><small class="text-muted">Last updated <?php echo $content_list["jack"]["time"];?> mins ago</small></p>
        </div>
    </div>
</div>

<div class="card-group">
    <div class="card">
        <img src= "<?php echo $content_list["droider"]["image"];?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $content_list["droider"]["name"];?></h5>
            <p class="card-text"><?php echo $content_list["droider"]["disc"];?></p>
            <p class="card-text"><small class="text-muted">Last updated <?php echo $content_list["droider"]["time"];?> mins ago</small></p>
        </div>
    </div>
    <div class="card">
        <img src= "<?php echo $content_list["wylsa"]["image"];?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $content_list["wylsa"]["name"];?></h5>
            <p class="card-text"><?php echo $content_list["wylsa"]["disc"];?></p>
            <p class="card-text"><small class="text-muted">Last updated <?php echo $content_list["wylsa"]["time"];?> mins ago</small></p>
        </div>
    </div>
    <div class="card">
        <img src= "<?php echo $content_list["ann"]["image"];?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $content_list["ann"]["name"];?></h5>
            <p class="card-text"><?php echo $content_list["ann"]["disc"];?></p>
            <p class="card-text"><small class="text-muted">Last updated <?php echo $content_list["ann"]["time"];?> mins ago</small></p>
        </div>
    </div>
</div>


<?php include 'footer.php'
;?>
</body>
</html>