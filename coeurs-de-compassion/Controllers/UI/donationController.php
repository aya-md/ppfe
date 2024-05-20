<?php
include_once 'C:\xampp\htdocs\nnn\ppfe\coeurs-de-compassion\Models\UI\donationModel.php';
include_once 'C:\xampp\htdocs\nnn\ppfe\coeurs-de-compassion\Models\UI\donorModel.php';
if (isset($_POST['btn-donation'])) {

    $donvalue = $_POST['don'];
    $date = date('Y-m-d h:i:s');

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $adress = $_POST['Adress'];




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


    if (true) {
        $msg = '<div class="alert alert-success alert-dismissable">
	                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	                You have successfully made a donation
	            </div>';
    } else {

        $msg = '<div class="alert alert-danger alert-dismissable">
	                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	                Error
	            </div>';
    }
}
if (isset($_POST['btn-delete'])) {
    $id = $_POST['iddon'];
    $don = new donation();
    $don->delete($id);
}
