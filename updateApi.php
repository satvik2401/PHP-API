<?php session_start(); ?>
<?php include "db.php" ?>
<?php include "functions.php" ?>



<?php
  if (isset($_POST["updatePassword"])) {

     $current_password          =        $_POST["current_password"];
     $new_password              =        $_POST["new_password"];
     $re_Confirmed_password     =        $_POST["re_Confirmed_password"];
     $user_form_email           =        $_POST["user_email"];


     $query = "SELECT * FROM users WHERE user_id =$user_form_email ";
     $user_details = mysqli_query($connection,$query);
     if(!$user_details){
     die("query failed".mysqli_error($connection));
     }else {

     while ($row = mysqli_fetch_assoc($user_details)) {
     $db_user_password       =     $row["password"];

     }
     }

      if(password_verify($current_password,$db_user_password) &&  $user_form_email){

        $change_password_error =  change_password ($re_Confirmed_password,$new_password,$user_form_email);



     }else {
       $change_password_error = -3;
     }



   echo $change_password_error;


  }



  if (isset($_POST["changeId"])) {

     $user_id          =        $_POST["user_id"];
     $old_user_id              =        $_POST["old_user_id"];



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

      if( $email_exsists){
        $change_password_error= -2;
     }else {
       $query = "UPDATE users SET user_id = '{$user_id}'  WHERE user_id = '{$old_user_id}'";

           $user_details = mysqli_query($connection , $query);
               if(!$user_details){
                     die("query failed".mysqli_error($connection));
                     $change_password_error =-1;
               }else {
                 $_SESSION["user_id"]=$user_id;
                     $change_password_error = 1;
              }
     }


echo $change_password_error;



  } ?>
