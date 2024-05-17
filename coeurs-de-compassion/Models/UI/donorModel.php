<?php
include_once 'Models/Config.php';
class donor
{
    private $id;
    private $firstn;
    private $lastn;
    private $adress;
    private $Email;

    public function __construct($firstn = '', $lastn = '', $adress = '', $Email = '')
    {
        $this->firstn = $firstn;
        $this->lastn = $lastn;
        $this->adress = $adress;
        $this->Email = $Email;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of firstn
     */
    public function getFirstn()
    {
        return $this->firstn;
    }

    /**
     * Set the value of firstn
     *
     * @return  self
     */
    public function setFirstn($firstn)
    {
        $this->firstn = $firstn;

        return $this;
    }

    /**
     * Get the value of lastn
     */
    public function getLastn()
    {
        return $this->lastn;
    }

    /**
     * Set the value of lastn
     *
     * @return  self
     */
    public function setLastn($lastn)
    {
        $this->lastn = $lastn;

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
    public function create($iddon)
    {

        $sqlquery = connexion::DbConnexion()->prepare("insert into donor (first_name,last_name,email,id_admin,adress,iddon) values (?,?,?,1,?,?);");
        $sqlquery->bindParam(1, $this->firstn);
        $sqlquery->bindParam(2, $this->lastn);
        $sqlquery->bindParam(3, $this->adress);
        $sqlquery->bindParam(4, $this->Email);
        $sqlquery->bindParam(5, $iddon);
        $sqlquery->execute();

        return $sqlquery;
    }

}




?>