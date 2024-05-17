<?php
include_once 'C:\xampp\htdocs\nnn\ppfe\coeurs-de-compassion\Models\UI\accomodationModel.php';
include_once 'C:\xampp\htdocs\nnn\ppfe\coeurs-de-compassion\Models\UI\aideModel.php';
include_once 'C:\xampp\htdocs\nnn\ppfe\coeurs-de-compassion\Models\UI\fatherModel.php';
include_once 'C:\xampp\htdocs\nnn\ppfe\coeurs-de-compassion\Models\UI\kafilModel.php';
include_once 'C:\xampp\htdocs\nnn\ppfe\coeurs-de-compassion\Models\UI\OrphaneModel.php';
include_once 'C:\xampp\htdocs\nnn\ppfe\coeurs-de-compassion\Models\UI\widowModel.php';


if(isset($_POST['orphan-btn-submit']) or isset($_POST['widow-btn-submit'])){
        $fnameorph=$_POST['nameorph'];
        $birth_date=date('Y-m-d',((int)$_POST['dateorph']));
        $CINorph=$_POST['cinorph'];
        $Health_status=$_POST['hsorph'];
        $health_problems=$_POST['hporph'];
        $gender=$_POST['genderorph'];
        $edulevl = $_POST['edulevel'];
    
        $fnameFather=$_POST['namef'];
        $death_date=date('Y-m-d',((int)$_POST['datef']));
        $job=$_POST['jobf'];
        $employer=$_POST['emplf'];
        $social_insurence=$_POST['scinf'];
    
        $accomodation_value=$_POST['accomvalue'];
        $type=$_POST['accotype'];
        $appliances_quality=$_POST['appliances'];
        $electricity=$_POST['electricity'];
        $electricity_bill=$_POST['elecbill'];
        $water_service=$_POST['water'];
        $water_bill=$_POST['waterbill'];
    
        $type_aide=$_POST['typea'];
        $value_aide=$_POST['valuea'];
        $frequency_aide=$_POST['frequencyaid'];
    
        $o=new orphan();
          $o->setFull_name($fnameorph);
          $o->setBirth_date($birth_date);
          $o->setCIN($CINorph);
          $o->setHealth_status($Health_status);
          $o->setHealth_problems($health_problems);
          $o->setGender($gender);
          $o->setEduLevel($edulevl);
    
       
        
        $f=new father();
          $f->setFull_name($fnameFather);
          $f->setDeath_date($death_date);
          $f->setJob($job);
          $f->setEmployer($employer);
          $f->setSocial_insurence($social_insurence);
        
        $ac=new accomodation();
          $ac->setAccomodation_value($accomodation_value);
          $ac->setType($type);
          $ac->setAppliances_quality($appliances_quality);
          $ac->setElectricity($electricity);
          $ac->setElectricity_bill($electricity_bill);
          $ac->setWater_service($water_service);
          $ac->setWater_bill($water_bill);
        
          $ai=new aide();
          $ai->setType_aide($type_aide);
          $ai->setValue_aide($value_aide);
          $ai->setFrequency_aide($frequency_aide);
    
         
         $fkac = $ac->create();
         $fkai = $ai->create();
         $fkf =$f->create();
        

} 
if (isset($fkk)){
         $o->createOK(NULL,$fkk,$fkf);
        }
      
       
        if (isset($_POST['orphan-btn-submit'])){
      
          $fnamekafil=$_POST['namek'];
          $CINkaf=$_POST['CINkaf'];
          $adress=$_POST['adressk'];
          $phone=$_POST['phonek'];
        
          $k=new kafil();
          $k->setFull_name($fnamekafil);
          $k->setCIN($CINkaf);
          $k->setAdress($adress);
          $k->setPhone($phone);
        
          $fkk = $k->create($fkac,$fkai);
        }
if(isset($_POST['widow-btn-submit'])){
  $fnamewidow = $_POST['fnamewidow'];
  $datewidow = date('Y-m-d',((int)$_POST['datewidow']));
  $cinwidow = $_POST['cinwidow'];
  $edulevelwidow = $_POST['edulevelwidow'];
  $jobwidow = $_POST['jobwidow'];
  $salarywidow = $_POST['salarywidow'];
  $RAMEED = $_POST['RAMEED'];
  $ramidval = $_POST['ramidval'];
  $benefitwidow = $_POST['benefitwidow'];
  $valuebenefit = $_POST['valuebenefit'];

  $w = new widow();
  $w->setFull_name($fnamewidow);
  $w->setEducation_level($edulevelwidow);
  $w->setBirth_date($datewidow);
  $w->setJob($jobwidow);
  $w->setSalery($salarywidow);
  $w->setCIN($cinwidow);
  $w->setRAMEED_card($RAMEED);
  $w->setValidity($ramidval);
  $w->setFunds_type($benefitwidow);
  $w->setFunds_value($valuebenefit);
 
 $widowid = $w->create($fkac,$fkai);
 
 $o->createOK($widowid,NULL,$fkf);

}


?>