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

          <form id="form-login" action="index.html" method="post">

            <div class="field-wrap">
              <input id="email_address" type="text" name="email_address" value="" placeholder="Email Address">
            </div>
            <div class="field-wrap">
              <input id="password" type="password" name="password" value="" placeholder="Password">
            </div>
            <button type="submit" name="button">Login</button>

          </form>
        </div>
        <!-- END LOGIN FORM -->

        <!-- START SIGN UP FORM -->
        <div id="sign-up-form">
          <h1>Sign Up for Free</h1>

          <form id="form-sign-up" action="index.html" method="post">

            <div class="top-row">
              <div class="field-wrap">
                <input id="first-name" type="text" name="first_name" value="" placeholder="First Name">
              </div>
              <div class="field-wrap">
                <input id="last-name" type="text" name="last_name" value="" placeholder="Last Name">
              </div>
            </div>
            <div class="field-wrap">
              <input id="email" type="text" name="email" value="" placeholder="Email">
            </div>
            <div class="field-wrap">
              <input id="username" type="text" name="username" value="" placeholder="Username">
            </div>
            <div class="field-wrap">
              <input id="password" type="password" name="password" value="" placeholder="Password">
            </div>
            <button type="submit" name="button">Get Started</button>

          </form>
        </div>
        <!-- END SIGN UP FORM -->

      </div>
      <!-- END FORM CONTAINER -->

    </section>

    <script src="http://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script type="text/javascript" src="<?=$assets_root;?>/js/script.js"></script>

    <script>
      window.uri= '<?php echo $uri; ?>';
    </script>
  </body>
</html>
