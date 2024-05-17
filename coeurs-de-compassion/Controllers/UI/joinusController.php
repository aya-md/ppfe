<?php
include_once 'C:\xampp\htdocs\nnn\ppfe\coeurs-de-compassion\Models\UI\joinusModel.php';


if (isset($_POST['joinus-btn-submit'])){
 
  
    $Status = $_POST['Status'];
    $Full_name = $_POST['FullName'];
    $CIN = $_POST['CIN'];
    $birth_date = date('Y-m-d',((int)$_POST['Date']));
    $birth_place = $_POST['BirthPlace'];
    $Phone = $_POST['Phone'];
    $email = $_POST['Email'];
    $Gender = $_POST['gender'];
    $image_membre_url = $_POST['uploaded_image'];


    $education_level = $_POST['education_level'];
    $speciality = $_POST['speciality'];
    $centres_of_interest = $_POST['centres_of_interest'];
    $activities_to_engage_in = $_POST['activities_to_engage_in'];
    $objectives_to_engage = $_POST['objectives_to_engage'];
  
    $v = new member();
    $v->setStatus($Status);
    $v->setFullName($Full_name);
    $v->setCIN($CIN);
    $v->setDate($birth_date);
    $v->setBirthPlace($birth_place);
    $v->setemail($email);
    $v->setPhone($Phone);
    $v->setGender($Gender);
    $v->setPhoto($image_membre_url);
    $v->setAcademiclvl($education_level);
    $v->setspeciality($speciality);
    $v->setIntrests($centres_of_interest);
    $v->setActivities($activities_to_engage_in);
    $v->setObjectives($objectives_to_engage);

    $v->create();
}
?>