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

<p>Your Aadhar card details have been saved successfully.Once it will validate,we will notify you via a text message on your registered mobile number.</p>
