<?php
include_once 'C:\xampp\htdocs\nnn\ppfe\coeurs-de-compassion\Models\Config.php';
include_once 'C:\xampp\htdocs\nnn\ppfe\coeurs-de-compassion\Models\UI\donorModel.php';
class donation
{
    private $idDon;
    private $date;
    private $donValue;

    public function __construct($idDon = '', $date = '', $donValue = '')
    {
        $this->idDon = $idDon;
        $this->date = $date;
        $this->donValue = $donValue;
    }
    /**
     * Get the value of idDon
     */
    public function getIdDon()
    {
        return $this->idDon;
    }

    /**
     * Set the value of idDon
     *
     * @return  self
     */
    public function setIdDon($idDon)
    {
        $this->idDon = $idDon;

        return $this;
    }

    /**
     * Get the value of date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of donValue
     */
    public function getDonValue()
    {
        return $this->donValue;
    }

    /**
     * Set the value of donValue
     *
     * @return  self
     */
    public function setDonValue($donValue)
    {
        $this->donValue = $donValue;

        return $this;
    }

    public function create()
    {
        $sql = connexion::DbConnexion()->exec("insert into donation (datedon,id_admin,don_value) values ('" . $this->date . "',1," . $this->donValue . ");");
        $lastIdStmt = connexion::DbConnexion()->query("SELECT id_donation from donation order by id_donation DESC limit 1");
        $lastId = $lastIdStmt->fetchColumn();
        return $lastId;
    }

    public static function getAll()
    {
        $sql = connexion::DbConnexion()->prepare("select id_donation,datedon,don_value,first_name,last_name,email	from donation JOIN donor ON donation.id_donation = donor.iddon");
        $sql->execute();
        $liste = array();

        while ($objet = $sql->fetch(PDO::FETCH_OBJ)) {
            $don = new donation($objet->id_donation, $objet->datedon, $objet->don_value);
            $donor = new donor($objet->first_name, $objet->last_name, '', $objet->email);
            $liste[] = [
                'donation' => $don,
                'donor' => $donor
            ];
        }
        $sql->closeCursor();

        return $liste;
    }
    public static function delete($id)
    {
        $sql = connexion::DbConnexion()->exec("DELETE FROM donation WHERE id_donation = '" . $id . "' ;");
        return $sql;
    }
}
