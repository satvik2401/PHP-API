<?php include "db.php" ?>
<?php include "functions.php" ?>

<?php
session_start();
if (isset($_POST["login"])) {


  $user_id = $_POST["user_id"];
  $password   = $_POST["password"];
  $user_id = trim($user_id);
  $password = trim($password);
  $user_id = mysqli_real_escape_string($connection,$user_id);
  $password= mysqli_real_escape_string($connection,$password);


$after_registration =false;
$whattodo = login_user($user_id,$password,$after_registration);

if($whattodo == "loginnow"){
   echo $whattodo;


}else {
  echo $whattodo;

}

}


 ?>
