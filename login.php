<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script src="bootstrap/jquery.min.js.download"></script>
    <script src="bootstrap/bootstrap.min.js.download"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
</head>
<body>

<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Q Ctrl-Del</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
    </div>
</nav>
    <body>
<div class="container">
    <div class="row" style="margin-top:130px;">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
      <form class="form-login" action="getuser.php" method="post">
        <h2 class="form-login-heading" style="margin-left:130px;">Log in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
          
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus name="UserEmail">
          <br/>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="UserPassword">
       <br/>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
          <input type="hidden" name="controller" value="task">
          <input type="hidden" name="function" value="login">
      </form>
    </div>
        <div class="col-sm-4"></div>
    </div>
    </div>
    </body>
</html>