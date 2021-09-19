<?php include "db.php" ?>
<?php include "functions.php" ?>

<?php

if (isset($_POST["signup"])) {
$user_id = $_POST["user_id"];
$password   = $_POST["password"];
$user_id = trim($user_id);
$password = trim($password);
$user_id = mysqli_real_escape_string($connection,$user_id);
$password= mysqli_real_escape_string($connection,$password);
$password1 = password_hash($password, PASSWORD_BCRYPT);

$email_exsists=0;


$query = "SELECT user_id FROM users WHERE user_id ='$user_id'";
$email_check_query = mysqli_query($connection,$query);
if(!$email_check_query){
  $email_exsists=0;
}
$row = mysqli_num_rows($email_check_query);
if($row > 0){
   $email_exsists=1;
}else {
  $email_exsists=0;
}









if(!$email_exsists ){
  $query = "INSERT INTO users(user_id,password) VALUES ('{$user_id}','{$password1}')";

  $create_user = mysqli_query($connection , $query);
  if(!$create_user){
   echo "userNotCreated";
  $user_created =0;
  }else {
    $after_registration =true;
    $whattodo = login_user($user_id,$password,$after_registration);
  echo $whattodo;
  }



}else {
  echo "emailExists";

}

}







 ?>
