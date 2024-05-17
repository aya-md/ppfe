<?php
include_once 'Models/Config.php';
class widow{
    private $id_widow;
    private $full_name;
    private $education_level;
    private $birth_date;
    private $job;
    private $salery;
    private $CIN;
    private $RAMEED_card;
    private $validity;
    private $funds_type;
    private $funds_value;

    public function aide($full_name='',$education_level='',$birth_date='',$job='',$salery='',$CIN='',$RAMEED_card='',$validity='',$funds_type='',$funds_value=''){
        $this->full_name=$full_name;
        $this->education_level=$education_level;
        $this->birth_date=$birth_date;
        $this->job=$job;
        $this->salery=$salery;
        $this->CIN=$CIN;
        $this->RAMEED_card=$RAMEED_card;
        $this->validity=$validity;
        $this->funds_type=$funds_type;
        $this->funds_value=$funds_value;
    }

    

    /**
     * Get the value of id_widow
     */ 
    public function getId_widow()
    {
        return $this->id_widow;
    }

    /**
     * Set the value of id_widow
     *
     * @return  self
     */ 
    public function setId_widow($id_widow)
    {
        $this->id_widow = $id_widow;

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
     * Get the value of education_level
     */ 
    public function getEducation_level()
    {
        return $this->education_level;
    }

    /**
     * Set the value of education_level
     *
     * @return  self
     */ 
    public function setEducation_level($education_level)
    {
        $this->education_level = $education_level;

        return $this;
    }

    /**
     * Get the value of birth_date
     */ 
    public function getBirth_date()
    {
        return $this->birth_date;
    }

    /**
     * Set the value of birth_date
     *
     * @return  self
     */ 
    public function setBirth_date($birth_date)
    {
        $this->birth_date = $birth_date;

        return $this;
    }

    /**
     * Get the value of job
     */ 
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Set the value of job
     *
     * @return  self
     */ 
    public function setJob($job)
    {
        $this->job = $job;

        return $this;
    }

    /**
     * Get the value of salery
     */ 
    public function getSalery()
    {
        return $this->salery;
    }

    /**
     * Set the value of salery
     *
     * @return  self
     */ 
    public function setSalery($salery)
    {
        $this->salery = $salery;

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
     * Get the value of RAMEED_card
     */ 
    public function getRAMEED_card()
    {
        return $this->RAMEED_card;
    }

    /**
     * Set the value of RAMEED_card
     *
     * @return  self
     */ 
    public function setRAMEED_card($RAMEED_card)
    {
        $this->RAMEED_card = $RAMEED_card;

        return $this;
    }

    /**
     * Get the value of validity
     */ 
    public function getValidity()
    {
        return $this->validity;
    }

    /**
     * Set the value of validity
     *
     * @return  self
     */ 
    public function setValidity($validity)
    {
        $this->validity = $validity;

        return $this;
    }

    /**
     * Get the value of funds_type
     */ 
    public function getFunds_type()
    {
        return $this->funds_type;
    }

    /**
     * Set the value of funds_type
     *
     * @return  self
     */ 
    public function setFunds_type($funds_type)
    {
        $this->funds_type = $funds_type;

        return $this;
    }

    /**
     * Get the value of funds_value
     */ 
    public function getFunds_value()
    {
        return $this->funds_value;
    }

    /**
     * Set the value of funds_value
     *
     * @return  self
     */ 
    public function setFunds_value($funds_value)
    {
        $this->funds_value = $funds_value;

        return $this;
    }

    public function create($idacc,$idaid){
        $sqlquery = connexion::DbConnexion()->prepare("insert into widow(full_name,education_level,birth_date,job,salery,CIN,RAMEED_card,validity,funds_type,funds_value,id_admin,id_accomodation,id_aide) values(?,?,?,?,?,?,?,?,?,?,1,?,?);");
        $sqlquery->bindParam(1,$this->full_name);
        $sqlquery->bindParam(2,$this->education_level);
        $sqlquery->bindParam(3,$this->birth_date);
        $sqlquery->bindParam(4,$this->job);
        $sqlquery->bindParam(5,$this->salery);
        $sqlquery->bindParam(6,$this->CIN);
        $sqlquery->bindParam(7,$this->RAMEED_card);
        $sqlquery->bindParam(8,$this->validity);
        $sqlquery->bindParam(9,$this->funds_type);
        $sqlquery->bindParam(10,$this->funds_value);
        $sqlquery->bindParam(11,$idacc);
        $sqlquery->bindParam(12,$idaid);
        $sqlquery->execute();
        $lastIdStmt = connexion::DbConnexion()->query("SELECT id_widow from widow order by id_widow DESC limit 1");
        $lastId = $lastIdStmt->fetchColumn();
       return $lastId;
    }
}
?>