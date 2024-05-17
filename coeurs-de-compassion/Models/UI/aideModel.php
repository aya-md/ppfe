<?php
include_once 'C:\xampp\htdocs\nnn\ppfe\coeurs-de-compassion\Models\Models\Config.php';
class aide{
    private $id_aide;
    private $type_aide;
    private $value_aide;
    private $frequency_aide;

    public function aide($type_aide='',$value_aide='',$frequency_aide=''){
        $this->type_aide=$type_aide;
        $this->value_aide=$value_aide;
        $this->frequency_aide=$frequency_aide;
    }

    

    /**
     * Get the value of id_aide
     */ 
    public function getId_aide()
    {
        return $this->id_aide;
    }

    /**
     * Set the value of id_aide
     *
     * @return  self
     */ 
    public function setId_aide($id_aide)
    {
        $this->id_aide = $id_aide;

        return $this;
    }

    /**
     * Get the value of type_aide
     */ 
    public function getType_aide()
    {
        return $this->type_aide;
    }

    /**
     * Set the value of type_aide
     *
     * @return  self
     */ 
    public function setType_aide($type_aide)
    {
        $this->type_aide = $type_aide;

        return $this;
    }

    /**
     * Get the value of value_aide
     */ 
    public function getValue_aide()
    {
        return $this->value_aide;
    }

    /**
     * Set the value of value_aide
     *
     * @return  self
     */ 
    public function setValue_aide($value_aide)
    {
        $this->value_aide = $value_aide;

        return $this;
    }

    /**
     * Get the value of frequency_aide
     */ 
    public function getFrequency_aide()
    {
        return $this->frequency_aide;
    }

    /**
     * Set the value of frequency_aide
     *
     * @return  self
     */ 
    public function setFrequency_aide($frequency_aide)
    {
        $this->frequency_aide = $frequency_aide;

        return $this;
    }

    public function create(){
        $sqlquery = connexion::DbConnexion()->prepare("insert into aide(type_aide,value_aide,frequency_aide) values(?,?,?);");
        $sqlquery->bindParam(1,$this->type_aide);
        $sqlquery->bindParam(2,$this->value_aide);
        $sqlquery->bindParam(3,$this->frequency_aide);
        $sqlquery->execute();
        $lastIdStmt = connexion::DbConnexion()->query("SELECT id_aide from aide order by id_aide DESC limit 1");
        $lastId = $lastIdStmt->fetchColumn();
       return $lastId;
    }
}
?>