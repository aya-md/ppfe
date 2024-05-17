<?php 
include_once 'C:\xampp\htdocs\nnn\ppfe\coeurs-de-compassion\Models\Config.php';
class accomodation{
    private $id_accomodation;
    private $accomodation_value;
    private $type;
    private $appliances_quality;
    private $electricity;
    private $electricity_bill;
    private $water_service;
    private $water_bill;

    public function accomodation($accomodation_value='',$type='',$appliances_quality='',$electricity='',$electricity_bill='',$water_service='',$water_bill=''){
        $this->accomodation_value=$accomodation_value;
        $this->type=$type;
        $this->appliances_quality=$appliances_quality;
        $this->electricity=$electricity;
        $this->electricity_bill=$electricity_bill;
        $this->water_service=$water_service;
        $this->water_bill=$water_bill;

        
    }


    /**
     * Get the value of id_accomodation
     */ 
    public function getId_accomodation()
    {
        return $this->id_accomodation;
    }

    /**
     * Set the value of id_accomodation
     *
     * @return  self
     */ 
    public function setId_accomodation($id_accomodation)
    {
        $this->id_accomodation = $id_accomodation;

        return $this;
    }

    /**
     * Get the value of accomodation_value
     */ 
    public function getAccomodation_value()
    {
        return $this->accomodation_value;
    }

    /**
     * Set the value of accomodation_value
     *
     * @return  self
     */ 
    public function setAccomodation_value($accomodation_value)
    {
        $this->accomodation_value = $accomodation_value;

        return $this;
    }

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of appliances_quality
     */ 
    public function getAppliances_quality()
    {
        return $this->appliances_quality;
    }

    /**
     * Set the value of appliances_quality
     *
     * @return  self
     */ 
    public function setAppliances_quality($appliances_quality)
    {
        $this->appliances_quality = $appliances_quality;

        return $this;
    }

    /**
     * Get the value of electricity
     */ 
    public function getElectricity()
    {
        return $this->electricity;
    }

    /**
     * Set the value of electricity
     *
     * @return  self
     */ 
    public function setElectricity($electricity)
    {
        $this->electricity = $electricity;

        return $this;
    }

    /**
     * Get the value of electricity_bill
     */ 
    public function getElectricity_bill()
    {
        return $this->electricity_bill;
    }

    /**
     * Set the value of electricity_bill
     *
     * @return  self
     */ 
    public function setElectricity_bill($electricity_bill)
    {
        $this->electricity_bill = $electricity_bill;

        return $this;
    }

    /**
     * Get the value of water_service
     */ 
    public function getWater_service()
    {
        return $this->water_service;
    }

    /**
     * Set the value of water_service
     *
     * @return  self
     */ 
    public function setWater_service($water_service)
    {
        $this->water_service = $water_service;

        return $this;
    }

    /**
     * Get the value of water_bill
     */ 
    public function getWater_bill()
    {
        return $this->water_bill;
    }

    /**
     * Set the value of water_bill
     *
     * @return  self
     */ 
    public function setWater_bill($water_bill)
    {
        $this->water_bill = $water_bill;

        return $this;
    }

    public function create(){
        $sqlquery = connexion::DbConnexion()->prepare("insert into accomodation(accomodation_value,type,appliances_quality,electricity,electricity_bill,water_service,water_bill) values(?,?,?,?,?,?,?);");
        $sqlquery->bindParam(1,$this->accomodation_value);
        $sqlquery->bindParam(2,$this->type);
        $sqlquery->bindParam(3,$this->appliances_quality);
        $sqlquery->bindParam(4,$this->electricity);
        $sqlquery->bindParam(5,$this->electricity_bill);
        $sqlquery->bindParam(6,$this->water_service);
        $sqlquery->bindParam(7,$this->water_bill);
        $sqlquery->execute();
        $lastIdStmt = connexion::DbConnexion()->query("SELECT id_accomodation from accomodation order by id_accomodation DESC limit 1");
        $lastId = $lastIdStmt->fetchColumn();
       return $lastId;
        
    }
   
}

?>