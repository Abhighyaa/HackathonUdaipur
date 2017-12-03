<?php
include 'controller.php';
$controller =$_POST['controller'];
$function =$_POST['function'];
if(isset($controller,$function)) {
    $cont = new $controller();
    $cont->$function();

}
else{
    //include 'header.php';
    include 'index1.php';
    //include 'footer.php';
}
?>