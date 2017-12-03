<?php
include 'controller.php';
$controller =$_POST['controller'];
$function =$_POST['function'];
if(isset($controller,$function)) {
    $cont = new $controller();
    $msg = $cont->$function($_POST['userid']);

}

?>


<p><?php echo $msg?>.</p>
    <a href="aadharcardclients.php">Go to Aadhar Client list</a>