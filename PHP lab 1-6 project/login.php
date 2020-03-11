<html>
<body>
<?php include 'header.php'
;?>
<?php
include('login_log.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
    header("location: profile.php"); // Redirecting To Profile Page
}
?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Login</title>

<!-- Font Icon -->
<link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

<!-- Main css -->
<link rel="stylesheet" href="css/style.css">

<body>

<div class="main">

    <!-- Sing in  Form -->
    <section class="sign-in">
        <div class="container">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="img/Qazaq.png" alt="sing up image"></figure>
                </div>

                <div class="signin-form">
                    <h2 class="form-title">Login</h2>
                    <form method="POST" class="register-form" id="login-form" action="">
                        <div class="form-group">

                            <input id="name" name="username" type="text" placeholder="Your Name"/>
                        </div>
                        <div class="form-group">

                            <input id="password" name="password" placeholder="**********" type="Password"/>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="submit" id="signin" class="form-submit" value="Log in"/>
                            <span><?php echo $error; ?></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</div>

<!-- JS -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>




<?php include 'footer.php'
;?>
</body>
</html>