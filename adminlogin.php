<?php
require 'controller.php';
if(isset($_POST['controller'], $_POST['function']))
{

    $c = $_POST['controller'];
    $f = $_POST['function'];
    $cont = new $c();
    $cont->$f();
}

else {

?>
<html>
  <head>
      <?php
      include_once('bootstrap.php')

      ?>
</head>      
    <body>
<div class="container">
    <div class="row" style="margin-top:130px;">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
      <form class="form-login" action="adminlogin.php" method="post">
        <h2 class="form-login-heading" style="margin-left:90px;">Admin Log in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
          
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus name="AdminEmail">
          <br/>
        <label for="inputPassword" class="sr-only">Password</label>
          
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="AdminPassword">
        <br/>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
          <input type="hidden" name="controller" value="task">
          <input type="hidden" name="function" value="adminlogin">
      </form>
    </div>
        <div class="col-sm-4"></div>
    </div>
    </div>
    </body>
</html>
<?php

}?>