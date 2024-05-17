<?php 
include_once 'Models/Config.php';
class father{
    private $id_father;
    private $full_name;
    private $death_date;
    private $job;
    private $employer;
    private $social_insurence;
    
    public function father($full_name='',$death_date='',$job='',$employer='',$social_insurence=''){
        $this->death_date=$death_date;
        $this->job=$job;
        $this->employer=$employer;
        $this->social_insurence=$social_insurence;
    }
    


    /**
     * Get the value of id_father
     */ 
    public function getId_father()
    {
        return $this->id_father;
    }

    /**
     * Set the value of id_father
     *
     * @return  self
     */ 
    public function setId_father($id_father)
    {
        $this->id_father = $id_father;

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
     * Get the value of death_date
     */ 
    public function getDeath_date()
    {
        return $this->death_date;
    }

    /**
     * Set the value of death_date
     *
     * @return  self
     */ 
    public function setDeath_date($death_date)
    {
        $this->death_date = $death_date;

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
     * Get the value of employer
     */ 
    public function getEmployer()
    {
        return $this->employer;
    }

    /**
     * Set the value of employer
     *
     * @return  self
     */ 
    public function setEmployer($employer)
    {
        $this->employer = $employer;

        return $this;
    }

    /**
     * Get the value of social_insurence
     */ 
    public function getSocial_insurence()
    {
        return $this->social_insurence;
    }

    /**
     * Set the value of social_insurence
     *
     * @return  self
     */ 
    public function setSocial_insurence($social_insurence)
    {
        $this->social_insurence = $social_insurence;

        return $this;
    }

    public function create(){
        $sqlquery = connexion::dbconnexion()->prepare("insert into father(full_name,death_date,job,employer,social_insurence) values(?,?,?,?,?);");
        $sqlquery->bindParam(1,$this->full_name);
        $sqlquery->bindParam(2,$this->death_date);
        $sqlquery->bindParam(3,$this->job);
        $sqlquery->bindParam(4,$this->employer);
        $sqlquery->bindParam(5,$this->social_insurence);
        $sqlquery->execute();
        $lastIdStmt = connexion::DbConnexion()->query("SELECT id_father from father order by id_father DESC limit 1");
        $lastId = $lastIdStmt->fetchColumn();
       return $lastId;
    }
}
?>