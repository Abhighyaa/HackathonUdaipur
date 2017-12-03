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
      <form class="form-login" action="validateadhardata.php" method="post">
        <h2 class="form-login-heading" style="margin-left:90px;">Aadhar Card Details Verification </h2>


          <table class="table">
              <thead class="thead-light">
              <tr>
                  <th scope="col">S.No.</th>
                  <th scope="col">Field Name</th>
                  <th scope="col">Vaild/Non-Vaild</th>

              </tr>
              </thead>
              <tbody>
                  <tr>
                      <th scope="row">1</th>
                      <td>Name: <?php echo $data[0][1]?></td>
                      <td>
                          <label class="radio-inline">
                              <input type="radio" name="name" value="1" required>Valid
                          </label>
                          <label class="radio-inline">
                              <input type="radio" name="name" value="0" required>Not Valid
                          </label>
                      </td>

                  </tr>
                  <tr>
                      <th scope="row">2</th>
                      <td>Date Of Birth: <?php echo $data[0][12] . "/" . $data[0][13] . "/" . $data[0][14]?></td>
                      <td>
                          <label class="radio-inline">
                              <input type="radio" name="dob" value="1" required>Valid
                          </label>
                          <label class="radio-inline">
                              <input type="radio" name="dob" value="0" required>Not Valid
                          </label>
                      </td>

                  </tr>
                  <tr>
                      <th scope="row">3</th>
                      <?php
                      $data[0][4] ? $value = "Female" : $value = "Male";
                      ?>
                      <td>Gender: <?php echo $value?></td>
                      <td>
                          <label class="radio-inline">
                              <input type="radio" name="gender" value="1" required>Valid
                          </label>
                          <label class="radio-inline">
                              <input type="radio" name="gender" value="0" required>Not Valid
                          </label>
                      </td>

                  </tr>
                  <tr>
                      <th scope="row">4</th>
                      <td>Father's Name: <?php echo $data[0][5]?></td>
                      <td>
                          <label class="radio-inline">
                              <input type="radio" name="fathername" value="1" required>Valid
                          </label>
                          <label class="radio-inline">
                              <input type="radio" name="fathername" value="0" required>Not Valid
                          </label>
                      </td>

                  </tr>
                  <tr>
                      <th scope="row">5</th>
                      <td>Address: <?php echo $data[0][6]?></td>
                      <td>
                          <label class="radio-inline">
                              <input type="radio" name="address" value="1" required>Valid
                          </label>
                          <label class="radio-inline">
                              <input type="radio" name="address" value="0"  required>Not Valid
                          </label>
                      </td>

                  </tr>
                  <tr>
                      <th scope="row">6</th>
                      <td>Address Proof: <a href="AadharClientFiles/<?php echo $data[0][10]?>">Click Here</a></td>
                      <td>
                          <label class="radio-inline">
                              <input type="radio" name="address_proof" value="1" required>Valid
                          </label>
                          <label class="radio-inline">
                              <input type="radio" name="address_proof" value="0" required>Not Valid
                          </label>
                      </td>

                  </tr>
                  <tr>
                      <th scope="row">7</th>
                      <td>Mobile Number: <?php echo $data[0][3]?></td>
                      <td>
                          <label class="radio-inline">
                              <input type="radio" name="mobile_number" value="1" required>Valid
                          </label>
                          <label class="radio-inline">
                              <input type="radio" name="mobile_number" value="0" required>Not Valid
                          </label>
                      </td>

                  </tr>
                  <tr>
                      <th scope="row">8</th>
                      <td>Email Id: <?php echo $data[0][2]?></td>
                      <td>
                          <label class="radio-inline">
                              <input type="radio" name="emailid" value="1" required>Valid
                          </label>
                          <label class="radio-inline">
                              <input type="radio" name="emailid" value="0" required>Not Valid
                          </label>
                      </td>

                  </tr>
                  <tr>
                      <th scope="row">9</th>
                      <td>Pincode: <?php echo $data[0][9]?></td>
                      <td>
                          <label class="radio-inline">
                              <input type="radio" name="pincode" value="1" required>Valid
                          </label>
                          <label class="radio-inline">
                              <input type="radio" name="pincode" value="0" required>Not Valid
                          </label>
                      </td>

                  </tr>
                  <tr>
                      <th scope="row">10</th>
                      <td>City: <?php echo $data[0][7]?></td>
                      <td>
                          <label class="radio-inline">
                              <input type="radio" name="city" value="1" required>Valid
                          </label>
                          <label class="radio-inline">
                              <input type="radio" name="city" value="0" required>Not Valid
                          </label>
                      </td>

                  </tr>
                  <tr>
                      <th scope="row">11</th>
                      <td>State: <?php echo $data[0][8]?></td>
                      <td>
                          <label class="radio-inline">
                              <input type="radio" name="state" value="1" required>Valid
                          </label>
                          <label class="radio-inline">
                              <input type="radio" name="state" value="0" required>Not Valid
                          </label>
                      </td>

                  </tr>
                  <tr>
                      <th scope="row">12</th>
                      <td>Id Proof: <a href="AadharClientFiles/<?php echo $data[0][11]?>">Click Here</a></td>
                      <td>
                          <label class="radio-inline">
                              <input type="radio" name="idproof" value="1" required>Valid
                          </label>
                          <label class="radio-inline">
                              <input type="radio" name="idproof" value="0" required>Not Valid
                          </label>
                      </td>

                  </tr>
              </tbody>
          </table>
          <input type="hidden" name="controller" value="task">
          <input type="hidden" name="function" value="validateadhardata">
          <input type="hidden" name="userid" value="<?php echo $_GET['userid']?>">
          <button type="submit" class="btn btn-primary">Validate</button>
          </form>
            </div>
        <div class="col-sm-4">
            
        </div>
      </div>  
  </body>
</html>