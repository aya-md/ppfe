<?php
include_once 'Models/UI/donationModel.php';
include_once 'Models/UI/donorModel.php';
if(isset($_POST['btn-donation'])){
   
    $donvalue = $_POST['don'];
    $date = date('Y-m-d h:i:s');

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $adress =$_POST['Adress'] ;




    $don = new donation();
    $don->setDonValue($donvalue);
    $don->setDate($date);
    $d = $don->create();

    $donor = new donor();
    $donor->setFirstn($fname);
    $donor->setLastn($lname);
    $donor->setEmail($email);
    $donor->setAdress($adress);

    $donor->create($d);
   
   
   if($don->create() and $donor->create($d)){
    $msg = '<div class="alert alert-success alert-dismissable">
	                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	                You have successfully added an Account # 
	            </div>';
            
               
	}else{

		$msg = '<div class="alert alert-danger alert-dismissable">
	                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	                Error
	            </div>';
       
                 
              
    }

   
   
}




?>