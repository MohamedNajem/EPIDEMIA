<?php
class Role{
    private $idR;
    private $nomR;
    private $etat;

    /**
     * @return mixed
     */
    public function getIdR()
    {
        return $this->idR;
    }

    /**
     * @param mixed $idR
     */
    public function setIdR($idR)
    {
        $this->idR = $idR;
    }

    /**
     * @return mixed
     */
    public function getNomR()
    {
        return $this->nomR;
    }

    /**
     * @param mixed $nomR
     */
    public function setNomR($nomR)
    {
        $this->nomR = $nomR;
    }

    /**
     * @return mixed
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param mixed $etat
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }


    public static function add(Role $role)
    {
        $db = DBConnexion::getInstance();
        $sql = "INSERT INTO role(idR,nomR) VALUES(null, '".$role->getNomR()."')";
        return $db->exec($sql);
    }

    public static function findAll()
    {
        $db = DBConnexion::getInstance();//Ouverture de la connexion
        $sql = "SELECT * FROM role";
        $lesResultats = $db->query($sql)->fetchAll(2);
        return $lesResultats;
    }

    public static function findById($id)
    {
        $db = DBConnexion::getInstance();
        $sql = "SELECT * FROM role WHERE idR = $id";
        $leResultat = $db->query($sql)->fetch(2);
        return $leResultat;
    }

    public static function update(Role $role)
    {
        $db = DBConnexion::getInstance();
        $sql = "UPDATE role SET nomR = '".$role->getNomR()."' WHERE idR = ".$role->getIdR();
        $nb = $db->exec($sql);
        return $nb;
    }

    public static function delete($id)
    {
        $db = DBConnexion::getInstance();
        $sql = "DELETE FROM role WHERE idR = $id";
        $nb = $db->exec($sql);
        return $nb;
    }

}
