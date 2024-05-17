<?php
include_once 'Models/Config.php';
class member {
    private $Status;
    private $FullName;
    private $Cin;
    private $Date;
    private $BirthPlace;
    private $Email;
    private $Phone;
    private $Gender;
    private $Photo;// 
    private $Academiclvl;
    private $Speciality;
    private $Intrests;
    private $Activities; 
    private $Objectives;
    private $image;
    public function adherent ($Status='',$FullName='',$Cin='',$Date='',$BirthPlace='',$Email='',$Phone='',$Gender='',$Photo='',$Academiclvl='',$Speciality='',$Intrests='',$Activities='',$Objectives=''){
        $this->Status = $Status;
        $this->FullName = $FullName;
        $this->Cin = $Cin;
        $this->Date = $Date;
        $this->BirthPlace = $BirthPlace;
        $this->Email = $Email;
        $this->Phone = $Phone;
        $this->Gender = $Gender;
        $this->Photo = $Photo;
        $this->Academiclvl = $Academiclvl;
        $this->Speciality = $Speciality;
        $this->Intrests = $Intrests;
        $this->Activities = $Activities;
        $this->Objectives = $Objectives;
        
    }

    /**
     * Get the value of Status
     */ 
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * Set the value of Status
     *
     * @return  self
     */ 
    public function setStatus($Status)
    {
        $this->Status = $Status;

        return $this;
    }
    /**
     * Get the value of FullName
     */ 
    public function getFullName()
    {
        return $this->FullName;
    }
    /**
     * Set the value of FullName
     *
     * @return  self
     */ 
    public function setFullName($FullName)
    {
        $this->FullName = $FullName;

        return $this;
    }
    /**
     * Get the value of Cin
     */ 
    public function getCin()
    {
        return $this->Cin;
    }
    /**
     * Set the value of Cin
     *
     * @return  self
     */ 
    public function setCin($Cin)
    {
        $this->Cin = $Cin;

        return $this;
    }
    /**
     * Get the value of Date
     */ 
    public function getDate()
    {
        return $this->Date;
    }
    /**
     * Set the value of Date
     *
     * @return  self
     */ 
    public function setDate($Date)
    {
        $this->Date = $Date;

        return $this;
    }
    /**
     * Get the value of BirthPlace
     */ 
    public function getBirthPlace()
    {
        return $this->BirthPlace;
    }
    /**
     * Set the value of BirthPlace
     *
     * @return  self
     */ 
    public function setBirthPlace($BirthPlace)
    {
        $this->BirthPlace = $BirthPlace;

        return $this;
    }

    /**
     * Get the value of Email
     */ 
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * Set the value of Email
     *
     * @return  self
     */ 
    public function setEmail($Email)
    {
        $this->Email = $Email;

        return $this;
    }

    /**
     * Get the value of Phone
     */ 
    public function getPhone()
    {
        return $this->Phone;
    }

    /**
     * Set the value of Phone
     *
     * @return  self
     */ 
    public function setPhone($Phone)
    {
        $this->Phone = $Phone;

        return $this;
    }

    /**
     * Get the value of Gender
     */ 
    public function getGender()
    {
        return $this->Gender;
    }

    /**
     * Set the value of Gender
     *
     * @return  self
     */ 
    public function setGender($Gender)
    {
        $this->Gender = $Gender;

        return $this;
    }

    /**
     * Get the value of Photo
     */ 
    public function getPhoto()
    {
        return $this->Photo;
    }

    /**
     * Set the value of Photo
     *
     * @return  self
     */ 
    public function setPhoto($Photo)
    {
        $this->Photo = $Photo;

        return $this;
    }

    /**
     * Get the value of Academiclvl
     */ 
    public function getAcademiclvl()
    {
        return $this->Academiclvl;
    }

    /**
     * Set the value of Academiclvl
     *
     * @return  self
     */ 
    public function setAcademiclvl($Academiclvl)
    {
        $this->Academiclvl = $Academiclvl;

        return $this;
    }

    /**
     * Get the value of Speciality
     */ 
    public function getSpeciality()
    {
        return $this->Speciality;
    }

    /**
     * Set the value of Speciality
     *
     * @return  self
     */ 
    public function setSpeciality($Speciality)
    {
        $this->Speciality = $Speciality;

        return $this;
    }

    /**
     * Get the value of Intrests
     */ 
    public function getIntrests()
    {
        return $this->Intrests;
    }

    /**
     * Set the value of Intrests
     *
     * @return  self
     */ 
    public function setIntrests($Intrests)
    {
        $this->Intrests = $Intrests;

        return $this;
    }

    /**
     * Get the value of Activities
     */ 
    public function getActivities()
    {
        return $this->Activities;
    }

    /**
     * Set the value of Activities
     *
     * @return  self
     */ 
    public function setActivities($Activities)
    {
        $this->Activities = $Activities;

        return $this;
    }

    /**
     * Get the value of Objectives
     */ 
    public function getObjectives()
    {
        return $this->Objectives;
    }

    /**
     * Set the value of Objectives
     *
     * @return  self
     */ 
    public function setObjectives($Objectives)
    {
        $this->Objectives = $Objectives;

        return $this;
    }

 
    public function create(){
        $v = connexion::DbConnexion()->prepare("insert into member(full_name,Cin,birth_date,birth_place,phone,email,gender,education_level,speciality,centres_of_interest,activities_to_engage_in,objectives_to_engage,status,id_admin,image_membre_url) values(?,?,?,?,?,?,?,?,?,?,?,?,?,1,?);");
        $v->bindParam(1,$this->FullName);
        $v->bindParam(2,$this->Cin);
        $v->bindParam(3,$this->Date);
        $v->bindParam(4,$this->BirthPlace);
        $v->bindParam(5,$this->Phone);
        $v->bindParam(6,$this->Email);
        $v->bindParam(7,$this->Gender);
        $v->bindParam(8,$this->Academiclvl);
        $v->bindParam(9,$this->Speciality);
        $v->bindParam(10,$this->Intrests);
        $v->bindParam(11,$this->Activities);
        $v->bindParam(12,$this->Objectives);
        $v->bindParam(13,$this->Status);
        $v->bindParam(14,$this->Photo);
        $v->execute();
        return $v ;
    }

  
}
?>