<?php
 $cookie_value = $_POST['name'];
 setcookie("name", $cookie_value, time() + (86400 * 7));
 header("Location: cookie_t1.php");
?>