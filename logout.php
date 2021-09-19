<?php  session_start(); ?>
<?php include "db.php" ?>
<?php include "functions.php" ?>

<?php

$_SESSION["user_id"] = null;

$_SESSION["id"] =null;


session_destroy();
// header("Location: login.php");

 ?>

<script>
    window.location.replace("login1.html");

</script>
