<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Signin</title>


    <link href="css/bootstrap.min.css" rel="stylesheet">


    <link href="css/signin.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>

  </head>

  <body>

    <div class="container">

      <form class="form-signin" role="form" action="loginauth.php" method="post">
        <h2 class="form-signin-heading">Please sign</h2>
        <label for="name" class="sr-only">Username</label>
        <input type="text" id="username" name="username"class="form-control" placeholder="Username" required autofocus>
        <label for="Password" class="sr-only">Password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

    </div>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
