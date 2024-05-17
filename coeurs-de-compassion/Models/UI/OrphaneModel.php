<?php 
include_once 'C:\xampp\htdocs\nnn\ppfe\coeurs-de-compassion\Models\Config.php';

class orphan {
    private $id_orphan;
    private $full_name;
    private $birth_date;
    private $CIN;
    private $Health_status;
    private $health_problems;
    private $gender;
    private $EduLevel;
       
    public function orphan ($full_name='',$birth_date='',$CIN='',$Health_status='',$health_problems='',$gender='',$EduLevel=''){
        $this->full_name=$full_name;
        $this->birth_date=$birth_date;
        $this->Health_status=$Health_status;
        $this->health_problems=$health_problems;
        $this->gender=$gender;
        $this->EduLevel = $EduLevel;
    }
    

    /**
     * Get the value of id_orphan
     */ 
    public function getId_orphan()
    {
        return $this->id_orphan;
    }

    /**
     * Set the value of id_orphan
     *
     * @return  self
     */ 
    public function setId_orphan($id_orphan)
    {
        $this->id_orphan = $id_orphan;

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
     * Get the value of Health_status
     */ 
    public function getHealth_status()
    {
        return $this->Health_status;
    }

    /**
     * Set the value of Health_status
     *
     * @return  self
     */ 
    public function setHealth_status($Health_status)
    {
        $this->Health_status = $Health_status;

        return $this;
    }

    /**
     * Get the value of health_problems
     */ 
    public function getHealth_problems()
    {
        return $this->health_problems;
    }

    /**
     * Set the value of health_problems
     *
     * @return  self
     */ 
    public function setHealth_problems($health_problems)
    {
        $this->health_problems = $health_problems;

        return $this;
    }

    /**
     * Get the value of gender
     */ 
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set the value of gender
     *
     * @return  self
     */ 
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }
    public function getEduLevel()
    {
        return $this->EduLevel;
    }

    /**
     * Set the value of EduLevel
     *
     * @return  self
     */ 
    public function setEduLevel($EduLevel)
    {
        $this->EduLevel = $EduLevel;

        return $this;
    }

    public function createOK($idwidow,$idkafil,$idfather){
        $sqlquery = connexion::DbConnexion()->prepare("insert into orphan(full_name,birth_date,CIN,Health_status,health_problems,gender,id_admin,id_widow,id_kafil,id_father,EduLevel) values(?,?,?,?,?,?,1,?,?,?,?);");
        $sqlquery->bindParam(1,$this->full_name);
        $sqlquery->bindParam(2,$this->birth_date);
        $sqlquery->bindParam(3,$this->CIN);
        $sqlquery->bindParam(4,$this->Health_status);
        $sqlquery->bindParam(5,$this->health_problems);
        $sqlquery->bindParam(6,$this->gender);
        $sqlquery->bindParam(7,$idwidow);
        $sqlquery->bindParam(8,$idkafil);
        $sqlquery->bindParam(9,$idfather);
        $sqlquery->bindParam(10,$this->EduLevel);

        $sqlquery->execute();
        return $sqlquery;
    }


  
}




?>