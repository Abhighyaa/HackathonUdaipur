<?php
include 'dbhandler.php';
class model

{

    public function check_mailid($mailid)
    {
        $query = "select id from user_registration where email-id = $mailid;";
        $db = new DataBase();
        $value = $db->check_mailid($query);
        return $value;

    }
    public function insert($formvalues)
    {
        $query = "INSERT INTO `user_registration`(`name`, `email-id`, `mobile`, `gender`, `password`, `dob_date`, `dob_month`, `dob_year`) VALUES ('$formvalues[0]','$formvalues[1]',
'$formvalues[2]','$formvalues[3]','$formvalues[4]','$formvalues[5]','$formvalues[6]','$formvalues[7]')";
        $db = new DataBase();
        $db->insert($query);
    }
    public function aadharinsert($formvalues)
    {
        $query = "INSERT INTO `aadhar_registration`(`name`, `email`, `mobile`, `gender`, `father`, `address`, `city`, `state`, `pincode`, `photo`, `idproof`, `dob_date`, `dob_month`, `dob_year`) VALUES ('$formvalues[0]','$formvalues[1]',
'$formvalues[2]','$formvalues[3]','$formvalues[4]','$formvalues[5]','$formvalues[6]','$formvalues[7]','$formvalues[8]','$formvalues[9]','$formvalues[10]','$formvalues[11]','$formvalues[12]','$formvalues[13]')";
        $db = new DataBase();
        $db->insert($query);
    }
    public function select($email,$passd)
    {
        $query = "select * from user_registration where `email-id` = '$email' and `password` = '$passd'";
        $db = new DataBase();
        $data =  $db->select($query);
        return $data;
    }
    public function adminselect($email,$passd)
    {
        $query = "select * from user_registration where `email-id` = '$email' and `password` = '$passd'";
        $db = new DataBase();
        $data =  $db->select($query);
        return $data;
    }
    public function getuserdata($user_id)
    {
        $query = "select * from user_registration where id=".$user_id;
        $db = new DataBase();
        $userdata = $db->getuserdata($query);
        return $userdata;
    }
    public function adharcardclientsdetails()
    {
        $query = "SELECT * FROM `aadhar_registration`";
        $db = new DataBase();
        $userdata = $db->getuserdata($query);
        return $userdata;
    }
    public function getadhardata($user_id)
    {
        $query = "select * from aadhar_registration where id=".$user_id;
        $db = new DataBase();
        $userdata = $db->getuserdata($query);
        return $userdata;
    }
    public function getsomeadhardata($user_id)
    {
        $query = "select mobile,name from aadhar_registration where id=".$user_id;
        $db = new DataBase();
        $userdata = $db->getuserdata($query);
        return $userdata;
    }

}