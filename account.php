<?php
include 'controller.php';
$obj = new task();
$session_value = $obj->sessionset();
if($session_value==true)
{
$user_id = $_SESSION['id'];
$getuserdata = $obj->getuserdata($user_id);
var_dump($getuserdata);
}
?>
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

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Q Ctrl X</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#">Dashboard</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Services <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="formofadhar.php">Aadhar card</a></li>
                    <li><a href="#">Bhamashah card</a></li>
                    <li><a href="#">Caste certificate</a></li>
                    <li><a href="#">Marrige Certificate</a></li>
                    <li><a href="#">Income Certificate</a></li>
                    <li><a href="#">Birth certificate</a></li>
                </ul>
            </li>
            <li><a href="#">Profile</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>

    </div>
</nav>    <div class="container">
    <div class="row" style="margin-top:50px;">
        <div class="col-sm-4">

            <img src="adharman.jpg" alt="Lights" class="img-responsive;" style="width:200px;height:200px;">
            <div class="caption" style="background-color:#eef1f6;width:200px;">

                <h5>
                    AADHAR CARD</h5>
                <p>Aadhaar number is a 12-digit random number issued by the UIDAI (“Authority”) to the residents of India after satisfying the verification process laid down by the Authority. Any individual, irrespective of age and gender, who is a resident of India, may voluntarily enrol to obtain Aadhaar number. </p>

            </div>
            </a>
        </div>

        <div class="col-sm-4">
            <img src="bhamashah-card-yojna-646x330.jpg" alt="Nature" style="width:200px;height:200px;">
            <div class="caption" style="background-color:#eef1f6;width:200px;">
                <h5>BHAMASHAH CARD</h5>
                <p>Bhamashah Yojana is a scheme introduced by the Government of Rajasthan to transfer financial and non-financial benefits of governmental schemes directly to women recipients in a transparent way.The scheme was inaugurated by Chief Minister Vasundhara Raje on 15 August 2014.</p>

            </div>
        </div>
        <div class="col-sm-4">
            <img src="castecrtfct.jpg" alt="Nature" style="width:200px;height:200px;">
            <div class="caption" style="background-color:#eef1f6;width:200px;">
                <h>CASTE CERTIFICATE</h>
                <p>A Caste Certificate is the proof of one's belonging to a particular caste, especially in case one belongs to any of the 'Scheduled Castes', as specified in the Indian Constitution. The Government felt that the Scheduled Castes and Tribes need special encouragement and opportunities to progress at the same pace as the rest of the citizenry. </p>

            </div>
        </div>

    </div>
    <div class="row" style="margin-top:50px;">
        <div class="col-sm-4">
            <img src="marrcrtfct.jpg" alt="Lights" class="img-responsive;" style="width:200px;height:200px;">
            <div class="caption" style="background-color:#eef1f6;width:200px;">

                <h5>
                    MARRIAGE CERTIFICATE</h5>
                <p>A marriage certificate is an official statement that two people are married.It is a legal proof you are married and the most vital document of a marriage. In 2006, the Supreme Court made it compulsory to register the marriage for the women protection
                </p>

            </div>
        </div>

        <div class="col-sm-4">
            <img src="incmcrtfct.jpg" alt="Lights" class="img-responsive;" style="width:200px;height:200px;">
            <div class="caption" style="background-color:#eef1f6;width:200px;">
                <h>INCOME CERTIFICATE</h>
                <p>Income certificate is required for claiming scholarship and also for admission in educational institutions and hostels. The certificate can be obtained by applying to Tehsil / Sub_tehsil offices under Revenue Administration Department.</p>
            </div>

        </div>
        <div class="col-sm-4">
            <img src="birth-certificate-250x250.png" alt="Nature" style="width:200px;height:200px;">
            <div class="caption" style="background-color:#eef1f6;width:200px;">
                <h>BIRTH CERTIFICATE</h>
                <p>UA birth certificate is a vital record that documents the birth of a child. The term "birth certificate" can refer to either the original document certifying the circumstances of the birth or to a certified copy of or representation of the ensuing registration of that birth. Depending on the jurisdiction, a record of birth might or might not contain verification of the event by such as a midwife or doctor.</p>

            </div>
        </div>

    </div>
</div>
</body>
</html>