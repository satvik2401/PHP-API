<?php include "db.php" ?>


 <?php

 function login_user($user_email,$password,$after_registration){

 global $connection;

   if (isset($user_email) && isset($password)) {
   $message_error_login ="";
   $user_email =  $user_email;
   $password   =  $password;
   $user_email = trim($user_email);
   $password = trim($password);
   $user_email = mysqli_real_escape_string($connection,$user_email);
   $password= mysqli_real_escape_string($connection,$password);


   $query = "SELECT * FROM users WHERE user_id = '{$user_email}' ";
   $found_user = mysqli_query($connection,$query);
   if(!$found_user){

    die("QUERY FAILED ".mysqli_error($connection));

   }elseif (empty(mysqli_num_rows($found_user))) {

   $message_error_login = "incEmail";

   }
   else {
     while($row = mysqli_fetch_assoc($found_user)){


       $db_user_id            =           $row["user_id"];
       $db_user_password         =           $row["password"];
       $db_id               =           $row["id"];



     }




     if(password_verify($password,$db_user_password)){




       $_SESSION["user_id"]               =     $db_user_id;

       $_SESSION["id"]                  =    $db_id;

       $_SESSION["login_message"]            =           1;

          if($after_registration == false){
              return "loginnow";
          }else {
              return "gotoprofile";
          }




     }
     else {

     $message_error_login = "incorrectPass";

     }
   }




   }



   return $message_error_login;
 }



 function change_password ($re_Confirmed_password,$new_password,$user_form_email){

   global $connection;



           if ($re_Confirmed_password == $new_password) {
                   $new_password = password_hash($re_Confirmed_password, PASSWORD_BCRYPT);

                   $query = "UPDATE users SET password = '{$new_password}'  WHERE user_id = '{$user_form_email}'";

                       $user_details = mysqli_query($connection , $query);
                           if(!$user_details){
                                 die("query failed".mysqli_error($connection));
                                 $change_password_error =-1;
                           }else {
                                 $change_password_error = 1;
                          }
           }else {
             $change_password_error = -2;
           }





   return $change_password_error;


 }



  ?>
