<?php session_start(); ?>

<?php if(isset($_SESSION["user_id"]) && isset($_SESSION["id"])  && !empty($_SESSION["user_id"]))
{

$user_final_id=$_SESSION["id"];
  $user_session_id =$_SESSION["user_id"];


   ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="login1.css">
  </head>
  <body>

    <div class="container">

  <div class="frame">

    <div class="nav">

      <ul class"links">
        <li class="signin-active"><a class="btn">User ID</a></li>
        <li class="signup-inactive"><a class="btn">Password</a></li>
      </ul>
    </div>
    <div ng-app ng-init="checked = false">
                <form class="form-signin" action="" method="post" name="form">
                  <input class="form-styling" id="loginOldEmail" type="hidden" name="username" placeholder="" value="<?php echo $user_session_id; ?>"/>

          <label for="username">Username</label>
          <input class="form-styling" id="loginEmail" type="text" name="username" placeholder="" required/>
          <label style="text-align:right;" id="loginEmailLabel" class=" text-danger "></label>

          <label for="password">Password</label>
          <input class="form-styling" id="loginPass" type="password" name="password" placeholder="" required/>
          <label style="text-align:right;" id="loginPassLabel" class=" text-danger "></label>

          <div class="btn-animate mt-5 ">
            <a onclick="changeId()" class="btn-signin">Sign in</a>
          </div>
                </form>

                <form class="form-signup" action="" method="" name="form">
          <input class="form-styling" id="signUpEmail" type="hidden" name="text" value="<?php echo $user_session_id; ?>" />
          <label for="confirmpassword">Current password</label>
          <input class="form-styling" type="password" id="currentPassword" name="currentpassword" placeholder="Enter Your Current password" required/>
          <label style="text-align:right;" id="currentPasswordLabel" class=" text-danger "></label>
          <label for="password">New Password</label>
          <input class="form-styling" id="signInPass" type="password" name="password" placeholder="Enter Your New Password" required/>
          <label for="confirmpassword">Confirm password</label>
          <input class="form-styling" type="password" id="signInCPass" name="confirmpassword" placeholder="Renter Your password" required/>
          <label style="text-align:right;" id="signCPassLabel" class=" text-danger "></label>

          <a onclick="changePass()" ng-click="checked = !checked" class="btn-signup">Update</a>
                </form>

            <div  class="success">
              <svg width="270" height="270" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
       viewBox="0 0 60 60" id="check" ng-class="checked ? 'checked' : ''">
                 <path fill="#ffffff" d="M40.61,23.03L26.67,36.97L13.495,23.788c-1.146-1.147-1.359-2.936-0.504-4.314
                  c3.894-6.28,11.169-10.243,19.283-9.348c9.258,1.021,16.694,8.542,17.622,17.81c1.232,12.295-8.683,22.607-20.849,22.042
                  c-9.9-0.46-18.128-8.344-18.972-18.218c-0.292-3.416,0.276-6.673,1.51-9.578" />
                <div class="successtext">
                   <p> Password Changed successfully.</p>
                   <a href="profile.php" ng-click="checked = !checked" class="btn-signup">Profile</a>

                </div>
             </div>
      </div>

      <div class="forgot">
        <a href="#">Forgot your password?</a>
      </div>

      <div>
        <div class="cover-photo"></div>
        <h1 class="welcome">  Profile Updated Successfully.
        <a href="profile.php" ng-click="checked = !checked" class="welcome btn-signup">Profile</a>
      </h1>
        <a href="profile.php" ng-click="checked = !checked" class="welcome btn-signup">Profile</a>


        <a class="btn-goback" value="Refresh" onClick="history.go()">Go back</a>
      </div>
  </div>

  <a id="refresh" value="Refresh" onClick="history.go()">
    <svg class="refreshicon"   version="1.1" id="Capa_1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         width="25px" height="25px" viewBox="0 0 322.447 322.447" style="enable-background:new 0 0 322.447 322.447;"
         xml:space="preserve">
         <path  d="M321.832,230.327c-2.133-6.565-9.184-10.154-15.75-8.025l-16.254,5.281C299.785,206.991,305,184.347,305,161.224
                c0-84.089-68.41-152.5-152.5-152.5C68.411,8.724,0,77.135,0,161.224s68.411,152.5,152.5,152.5c6.903,0,12.5-5.597,12.5-12.5
                c0-6.902-5.597-12.5-12.5-12.5c-70.304,0-127.5-57.195-127.5-127.5c0-70.304,57.196-127.5,127.5-127.5
                c70.305,0,127.5,57.196,127.5,127.5c0,19.372-4.371,38.337-12.723,55.568l-5.553-17.096c-2.133-6.564-9.186-10.156-15.75-8.025
                c-6.566,2.134-10.16,9.186-8.027,15.751l14.74,45.368c1.715,5.283,6.615,8.642,11.885,8.642c1.279,0,2.582-0.198,3.865-0.614
                l45.369-14.738C320.371,243.946,323.965,236.895,321.832,230.327z"/>
    </svg>
  </a>
</div>
  </body>
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

  <script type="text/javascript">
    $(function() {
      $(".btn").click(function() {
        $(".form-signin").toggleClass("form-signin-left");
        $(".form-signup").toggleClass("form-signup-left");
        $(".frame").toggleClass("frame-long");
        $(".signup-inactive").toggleClass("signup-active");
        $(".signin-active").toggleClass("signin-inactive");
        $(".forgot").toggleClass("forgot-left");
        $(this).removeClass("idle").addClass("active");
      });
    });


function changeId(){

  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  var numPat = /^[0-9]{10}$/;
  var email=  $('#loginEmail').val();
  var oldEmail=$('#loginOldEmail').val();
  var correct_email= regex.test(email);
  var correct_number=numPat.test(email);

  if(correct_email){

    $('#loginEmailLabel').text("");
  }
  else if (correct_number) {

    $('#loginEmailLabel').text("");
  }
  else{
      $('#loginEmailLabel').text("*Invalid Email or Phone Number");
  }


if(correct_email || correct_number){

  $.ajax({

     type: "POST",
     url: "updateApi.php",
     data: {
       user_id: email,
       old_user_id:oldEmail,
       changeId:1





     },
     cache: false,
     success: function (data) {
       result = $.trim(data);
       if(result==1){
         window.location.replace("profile.php");

  }
  if(result==-2){
    $('#loginEmailLabel').text("*This ID is taken. Try another one.");

  }


  }
  });
}
}


    function changePass(){

      var email=  $('#signUpEmail').val();
      var signInPass=  $('#signInPass').val();
      var signInCPass=  $('#signInCPass').val();

      var currentPassword=$('#currentPassword').val();

      var passMatch=0;
      var userid="";




      if(signInPass==signInCPass){
        passMatch=1;
        $('#signCPassLabel').text("");
      }else{
        passMatch=0
        $('#signCPassLabel').text("*Passwords don't match");
      }

      if(passMatch  ){



        $.ajax({

           type: "POST",
           url: "updateApi.php",
           data: {
             user_email:email,
             current_password:currentPassword,
             new_password:signInPass,
             re_Confirmed_password:signInCPass,


             updatePassword:1





           },
           cache: false,
           success: function (data) {
             result = $.trim(data);
             if(result==1){
               $(".nav").toggleClass("nav-up");
               $(".form-signup-left").toggleClass("form-signup-down");
               $(".success").toggleClass("success-left");
               $(".frame").toggleClass("frame-short");
        }
        else if(result==-3){
         $('#currentPasswordLabel').text("*Invalid Password");
        }
        else if(result==-1){
          console.log("failed");
        }


        }
        });


      }
    }

  </script>
</html>
<?php }
else{
  echo "Login Properly.";
} ?>
