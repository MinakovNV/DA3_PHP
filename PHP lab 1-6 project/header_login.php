<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>QazaqTube</title>

    <link rel="stylesheet" href="demo.css">
    <link rel="stylesheet" href="header-login-signup.css">
    <link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>

</head>

<body>

<header class="header-login-signup">

    <div class="header-limiter">

        <h1><a href="index.php">QazaQ<span>tube</span></a></h1>

        <nav>
            <a href="index.php" class="selected">Home</a>
            <a href="ch_game.php">Games</a>
            <a href="ch_tech.php">Techno</a>
            <a href="ch_blog.php">Blogs</a>
        </nav>

        <ul>
            <li></li><b id="welcome">User: <i><?php echo $login_session; ?></i></b></li>
            <li></li><b id="logout"><a href="logout.php">Log Out</a></b></ul></li>
        </ul>

    </div>

</header>
