<?php
include 'controller.php';
$obj = new task();
$data = $obj->adharcardclientsdetails();
?>
<html>
<head>
    <?php
    include_once('bootstrap.php')

    ?>
</head>
<body>
    <div class="container">
      
       <div class="row">
             <h2>Aadhar Card Client Details</h2>
          <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">s.no.</th>
      <th scope="col">ID</th>
     <th scope="col"> More Details</th>
      
    </tr>
  </thead>
  <tbody>
  <?php
  $count = 1;
  foreach($data as $value) {

    ?>
    <tr>
      <th scope="row"><?php echo $count ?></th>
      <td><?php echo $value[0]?></td>
        <td><a href="adminvalform.php?userid=<?php echo $value[0]?>">Click here</a></td>

    </tr>
<?php
      $count++;
  }
?>
  </tbody>
</table>

          </div>
        </div>
    </body>
</html>