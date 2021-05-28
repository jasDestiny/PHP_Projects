<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Sign in</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="Styles/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" method="post" action="validation.php" >
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputName" class="sr-only">Name</label>
      <input style="margin: 3px;" type="text" name="email" class="form-control" placeholder="Email" required autofocus>
		<input style="margin: 3px;" type="text" name="name" class="form-control" placeholder="Preferred Name" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input style="margin: 3px;" type="password" name="psw" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        
      </div>
      <button class="signin-button download-button btn btn-dark btn-lg" type="submit">Login</button>
      <br>
      <p>Don't have an account? <a href="signup.php">Sign up</a></p>
      
    </form>
  </body>
</html>
