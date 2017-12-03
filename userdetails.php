<?php
require 'controller.php';
$userid = $_GET['userid'];
$obj = new task();
$data = $obj->getadhardata($userid);
?>
<html>
<head>
    <?php
    include_once('bootstrap.php')

    ?>
    <style>
        input[type=checkbox] {
            zoom: 1.5;
        }

    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-8">
                <h2 class="form-login-heading" style="margin-left:90px;">Aadhar Card Details Verification </h2>


                <table class="table">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">S.No.</th>
                        <th scope="col">Field Name</th>


                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Name: <?php echo $data[0][1]?></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Date Of Birth: <?php echo $data[0][12] . "/" . $data[0][13] . "/" . $data[0][14]?></td>


                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <?php
                        $data[0][4] ? $value = "Female" : $value = "Male";
                        ?>
                        <td>Gender: <?php echo $value?></td>


                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Father's Name: <?php echo $data[0][5]?></td>

                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Address: <?php echo $data[0][6]?></td>


                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>Address Proof: <a href="AadharClientFiles/<?php echo $data[0][10]?>">Click Here</a></td>

                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td>Mobile Number: <?php echo $data[0][3]?></td>


                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td>Email Id: <?php echo $data[0][2]?></td>

                    </tr>
                    <tr>
                        <th scope="row">9</th>
                        <td>Pincode: <?php echo $data[0][9]?></td>
                    </tr>
                    <tr>
                        <th scope="row">10</th>
                        <td>City: <?php echo $data[0][7]?></td>
                    </tr>
                    <tr>
                        <th scope="row">11</th>
                        <td>State: <?php echo $data[0][8]?></td>
                    </tr>
                    <tr>
                        <th scope="row">12</th>
                        <td>Id Proof: <a href="AadharClientFiles/<?php echo $data[0][11]?>">Click Here</a></td>
                    </tr>
                    </tbody>
                </table>

        </div>
        <div class="col-sm-4">

        </div>
    </div>
</body>
</html>