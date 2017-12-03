<?php
if(isset($_POST['generate_text']))
{
 include('phpqrcode/qrlib.php'); 
 $text=$_POST['qr_text'];
 $folder="images/";
 $a = (string)rand(0,100);
 $file_name = $a . ".png";
 $file_name= $folder.$file_name;
 QRcode::png($text,$file_name);
 echo "<img src=images/" . $a.  ".png>";
 
 //To Display Code Without Storing
 //QRcode::png($text);
}
?>