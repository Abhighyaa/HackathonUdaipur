<?php
include 'model.php';
class task {


    public function register()
    {
        if ($_SERVER['REQUEST_METHOD']=='POST') {


            $formvalues[0] = $_POST['UserName'];
            $formvalues[1] = $_POST['UserEmail'];
            $formvalues[2] = $_POST['UserMobileNumber'];
            $formvalues[3] = $_POST['UserGender'];
            $formvalues[4] = $_POST['UserPassword'];
            $formvalues[5] = $_POST['UserDobDate'];
            $formvalues[6] = $_POST['UserDobMonth'];
            $formvalues[7] = $_POST['UserDobYear'];
            $m = new model();
            $value =$this->check_mailid($formvalues[0]);
            if($value==true)
            {
                $m->insert($formvalues);
                $m1 = $m->select($formvalues[1],$formvalues[4]);

                if($m1[0]['email-id'] == $formvalues[1])
                {
                    $_SESSION['id'] = $m1[0]['id'];
                    header("location:account.php?user_id=".$_SESSION['id']);
                }
                else
                {
                    header('location:index1.php');
                }
            }
            else
            {
                $this->value = "User already register with this scholar number..";

            }
        }

    }
    public function check_mailid($mailid)
    {
        $m = new model();
        $value =$m->check_mailid($mailid);
        if(empty($value))
        {
            return true;

        }
        else
        {
            return false;
        }
    }
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD']=='POST') {
            $emailid = $_POST['UserEmail'];
            $password = $_POST['UserPassword'];
            $m = new model();
            $m1 = $m->select($emailid,$password);
            if($m1[0]['password']==$password)
            {
                $_SESSION['id'] = $m1[0]['id'];

                header("location:account.php?user_id=".$_SESSION['id']);
            }
            else
            {
                header('location:login.php');
            }
        }

    }
    public function sessionset()
    {
        if(isset($_SESSION['id']))
            return true;
        else
            return false;

    }
    public function getuserdata($user_id)
    {
        if(isset($_SESSION['id']))
        {
            //$user_id = $_SESSION['id'];
            $m= new model();
            $data = $m->getuserdata($user_id);
            return $data;
        }
    }
    public function adminlogin()
    {
        if ($_SERVER['REQUEST_METHOD']=='POST') {
            $emailid = $_POST['AdminEmail'];
            $password = $_POST['AdminPassword'];
            $m = new model();
            $m1 = $m->adminselect($emailid,$password);
            if($m1[0]['password']==$password)
            {
                $_SESSION['id'] = $m1[0]['id'];

                header("location:aadharcardclients.php");
            }
            else
            {
                header('location:login.php');
            }
        }

    }
    public function aadharregistration() {

        $formvalues[0] = $_POST['ClientName'];
        $formvalues[1] = $_POST['ClientEmail'];
        $formvalues[2] = $_POST['ClientMobileNumber'];
        $formvalues[3] = $_POST['ClientGender'];
        $formvalues[4] = $_POST['ClientFatherName'];
        $formvalues[5] = $_POST['ClientAddress'];
        $formvalues[6] = $_POST['ClientCity'];
        $formvalues[7] = $_POST['ClientState'];
        $formvalues[8] = $_POST['ClientPincode'];

        $uploads_dir = 'AadharClientFiles/';
        $tmp_name = $_FILES["ClientImage"]["tmp_name"];
        $formvalues[9] = $_FILES["ClientImage"]["name"];
        move_uploaded_file($tmp_name,$uploads_dir.$formvalues[9]);

        $tmp_name1 = $_FILES["ClientAddressProof"]["tmp_name"];
        $formvalues[10] = $_FILES["ClientAddressProof"]["name"];
        move_uploaded_file($tmp_name1,$uploads_dir.$formvalues[10]);

        $formvalues[11] = $_POST['ClientDobDate'];
        $formvalues[12] = $_POST['ClientDobMonth'];
        $formvalues[13] = $_POST['ClientDobYear'];

        $m = new model();
        $m->aadharinsert($formvalues);
    }
    public function adharcardclientsdetails() {
        $m = new model();
        return $m->adharcardclientsdetails();
    }
    public function getadhardata($user_id)
    {
            $m= new model();
            $data = $m->getadhardata($user_id);
            return $data;

    }
    public function validateadhardata($userid) {
        $msg = "Dear User, ";
        $way2sms_account_username = '9694442980';
        $way2sms_account_password = '9694442980';
        if ($_SERVER['REQUEST_METHOD']=='POST') {
            if(!$formvalues[0] = $_POST['name']) {
                $msg .= "Name, ";
            }
            if(!$formvalues[1] = $_POST['dob']){
                $msg .= "Date of Birth, ";
            }
            if(!$formvalues[2] = $_POST['gender']){
                $msg .= "Gender ,";
            }
            if(!$formvalues[3] = $_POST['fathername']){
                $msg .= "Father Name ,";
            }
            if(!$formvalues[4] = $_POST['address']){
                $msg .= "Address, ";
            }
            if(!$formvalues[5] = $_POST['address_proof']){
                $msg .= "Address Proof, ";
            }
            if(!$formvalues[6] = $_POST['mobile_number']){
                $msg .= "Mobile Number, ";
            }
            if(!$formvalues[7] = $_POST['emailid']){
                $msg .= "Email Id, ";
            }
            if(!$formvalues[8] = $_POST['pincode']){
                $msg .= "Pincode, ";
            }
            if(!$formvalues[9] = $_POST['city']){
                $msg .= "City, ";
            }
            if(!$formvalues[10]= $_POST['state']){
                $msg .= "State, ";
            }
            if(!$formvalues[11]= $_POST['idproof']){
                $msg .= "Id Proof";
            }
            include('way2sms-api.php');
            $m = new model();
            $somedata = $m->getsomeadhardata($userid);
            if($msg === "Dear User, "){
                include('phpqrcode/qrlib.php');
                $text = "localhost/HackathonUpdaipur/userdetails.php?userid=".$userid;
                $folder="images/";
                $file_name = $somedata[0][1]. ".png";
                $file_name = str_replace(' ', '', $file_name);
                $file_name= $folder.$file_name;
                QRcode::png($text,$file_name);
                echo "<img src=".$file_name.">";
                $msg = "Your Aadhar Card application has been validate and access you QrCode using below link and visit
                at your local government center for next process";
                sendWay2SMS ( $way2sms_account_username , $way2sms_account_password , $somedata[0] , $msg);
                return "Valid Detials has been sent to the " . $somedata[0][1] ." his registration number ". $somedata[0][0]. "
                with generated QrCode";
            } else {
                $msg .= " are not valid details.Please re-enter your invalid details at our site using below link. Thank You";
                sendWay2SMS ( $way2sms_account_username , $way2sms_account_password , $somedata[0] , $msg);
                return "InValid Details Has been sent to the ". $somedata[0][1] ." his registration number ". $somedata[0][0];
            }


        }

    }

}

?>