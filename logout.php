<?php
include 'controller.php';
$obj = new task();
session_unset();
session_destroy();
header("location:index1.php");
?>