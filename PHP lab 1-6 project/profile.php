<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
    header("location: login.php"); // Redirecting To Home Page
}
?>
<!DOCTYPE html>
<html>
<?php include 'header_login.php'
;?>
<body>

</body>
<?php include 'footer.php'
;?>
</html>