<?php
class Pays{
    private $idP;
    private $nomP;
    private $population;

    /**
     * @return mixed
     */
    public function getIdP()
    {
        return $this->idP;
    }

    /**
     * @param mixed $idP
     */
    public function setIdP($idP)
    {
        $this->idP = $idP;
    }

    /**
     * @return mixed
     */
    public function getNomP()
    {
        return $this->nomP;
    }

    /**
     * @param mixed $nomP
     */
    public function setNomP($nomP)
    {
        $this->nomP = $nomP;
    }

    /**
     * @return mixed
     */
    public function getPopulation()
    {
        return $this->population;
    }

    /**
     * @param mixed $population
     */
    public function setPopulation($population)
    {
        $this->population = $population;
    }

    public static function add(Pays $pays)
    {
        $db = DBConnexion::getInstance();
        $sql = "INSERT INTO pays(idP,nomP,population) VALUES(null, '".$pays->getNomP()."', '".$pays->getPopulation()."')";
        return $db->exec($sql);
    }

    public static function findAll()
    {
        $db = DBConnexion::getInstance();//Ouverture de la connexion
        $sql = "SELECT * FROM pays";
        $lesResultats = $db->query($sql)->fetchAll(2);
        return $lesResultats;
    }

    public static function findById($id)
    {
        $db = DBConnexion::getInstance();
        $sql = "SELECT * FROM pays WHERE idP = $id";
        $leResultat = $db->query($sql)->fetch(2);
        return $leResultat;
    }

    public static function update(Pays $pays)
    {
        $db = DBConnexion::getInstance();
        $sql = "UPDATE pays SET nomP = '".$pays->getNomP()."', population = '".$pays->getPopulation()."' WHERE idP = ".$pays->getIdP();
        $nb = $db->exec($sql);
        return $nb;
    }

    public static function delete($id)
    {
        $db = DBConnexion::getInstance();
        $sql = "DELETE FROM pays WHERE idP = $id";
        $nb = $db->exec($sql);
        return $nb;
    }

}
