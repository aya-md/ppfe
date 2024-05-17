<?php
include_once 'C:\xampp\htdocs\nnn\ppfe\coeurs-de-compassion\Models\Config.php';
class kafil{
private $id_kafil;
private $full_name;
private $CIN;
private $phone;
private $adress;

public function kafil($full_name='',$CIN='',$phone='',$adress=''){
    $this->full_name=$full_name;
    $this->CIN=$CIN;
    $this->phone=$phone;
    $this->adress=$adress;
}





/**
 * Get the value of id_kafil
 */ 
public function getId_kafil()
{
return $this->id_kafil;
}

/**
 * Set the value of id_kafil
 *
 * @return  self
 */ 
public function setId_kafil($id_kafil)
{
$this->id_kafil = $id_kafil;

return $this;
}

/**
 * Get the value of full_name
 */ 
public function getFull_name()
{
return $this->full_name;
}

/**
 * Set the value of full_name
 *
 * @return  self
 */ 
public function setFull_name($full_name)
{
$this->full_name = $full_name;

return $this;
}

/**
 * Get the value of CIN
 */ 
public function getCIN()
{
return $this->CIN;
}

/**
 * Set the value of CIN
 *
 * @return  self
 */ 
public function setCIN($CIN)
{
$this->CIN = $CIN;

return $this;
}

/**
 * Get the value of phone
 */ 
public function getPhone()
{
return $this->phone;
}

/**
 * Set the value of phone
 *
 * @return  self
 */ 
public function setPhone($phone)
{
$this->phone = $phone;

return $this;
}

/**
 * Get the value of adress
 */ 
public function getAdress()
{
return $this->adress;
}

/**
 * Set the value of adress
 *
 * @return  self
 */ 
public function setAdress($adress)
{
$this->adress = $adress;

return $this;
}
public function create($idacco,$idaid){
    $sqlquery = connexion::DbConnexion()->prepare("insert into kafil(full_name,CIN,phone,adress,id_admin,id_accomodation,id_aide) values(?,?,?,?,1,?,?);");
    $sqlquery->bindParam(1,$this->full_name);
    $sqlquery->bindParam(2,$this->CIN);
    $sqlquery->bindParam(3,$this->adress);
    $sqlquery->bindParam(4,$this->phone);
    $sqlquery->bindParam(5,$idacco);
    $sqlquery->bindParam(6,$idaid);
    $sqlquery->execute();
    $lastIdStmt = connexion::DbConnexion()->query("SELECT id_kafil from kafil order by id_kafil DESC limit 1");
    $lastId = $lastIdStmt->fetchColumn();
   return $lastId;
}
}



?>