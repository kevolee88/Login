<?php

$uri = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>To Do App</title>
    <link rel="stylesheet" href="../assets/css/main.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <section id="form">
      <ul class="tab-group">
        <li id="sign-up" class="active">Sign Up</li>
        <li id="login">Log In</li>
      </ul>

      <div class="form-container">
        <!-- form here dynamically with ajax -->
      </div>

    </section>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script type="text/javascript" src="../assets/js/script.js"></script>

    <script>
      window.uri= '<?php echo $uri; ?>';
    </script>
  </body>
</html>
