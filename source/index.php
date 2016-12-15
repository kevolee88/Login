<?php

$uri          = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$assets_root  = 'http://' . $_SERVER['HTTP_HOST'] . '/login/assets';

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="<?=$assets_root;?>/css/main.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <section id="form">
      <!-- START LOGIN/SIGN-UP BUTTON GROUP -->
      <ul class="tab-group">
        <li id="sign-up" class="active">Sign Up</li>
        <li id="login">Log In</li>
      </ul>
      <!-- END LOGIN/SIGN-UP BUTTON GROUP -->

      <!-- START FORM CONTAINER -->
      <div class="form-container">

        <!-- START LOGIN FORM -->
        <div id="login-form">
          <h1>Welcome Back!</h1>

          <form id="form-login" action="" method="post" data-parsley-validate>

            <div class="field-wrap">
              <input id="email_address" type="email" name="email_address" value="" placeholder="Email Address" required data-parsley-error-message="Please enter valid email" data-parsley-type="email">
            </div>
            <div class="field-wrap">
              <input id="password" type="password" name="password" value="" placeholder="Password" required data-parsley-error-message="Please enter a password">
            </div>
            <button type="submit" name="button">Login</button>

          </form>
        </div>
        <!-- END LOGIN FORM -->

        <!-- START SIGN UP FORM -->
        <div id="sign-up-form">
          <h1>Sign Up for Free</h1>

          <form id="form-sign-up" action="" method="post" data-parsley-validate>

            <div class="top-row">
              <div class="field-wrap">
                <input id="first-name" type="text" name="first_name" value="" placeholder="First Name" required data-parsley-error-message="Please enter your first name">
              </div>
              <div class="field-wrap">
                <input id="last-name" type="text" name="last_name" value="" placeholder="Last Name" required data-parsley-error-message="Please enter your last name">
              </div>
            </div>
            <div class="field-wrap">
              <input id="email" type="text" name="email" value="" placeholder="Email" required data-parsley-error-message="Please enter valid email" data-parsley-type="email">
            </div>
            <div class="field-wrap">
              <input id="username" type="text" name="username" value="" placeholder="Username" required data-parsley-error-message="Please enter username">
            </div>
            <div class="field-wrap">
              <input id="password" type="password" name="password" value="" placeholder="Password" required data-parsley-error-message="Please enter a password">
            </div>
            <button type="submit" name="button">Get Started</button>

          </form>
        </div>
        <!-- END SIGN UP FORM -->

      </div>
      <!-- END FORM CONTAINER -->

    </section>

    <script src="http://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script src="<?=$assets_root;?>/plugins/parsley-v2.6.0.js" ></script>
    <script src="<?=$assets_root;?>/plugins/serializejson-v2.8.1.js" ></script>
    <script src="<?=$assets_root;?>/js/script.js"></script>

    <script>
      window.uri= '<?php echo $uri; ?>';
    </script>
  </body>
</html>
