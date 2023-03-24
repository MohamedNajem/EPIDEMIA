<?php

class Zone{
      private $idZ;
      private $nomZ;
      private $nbPersonnesTotal;
      private $nbPersonnesSympt;
      private $nbPersonnesPosi;
      private $idPays;

    /**
     * @return mixed
     */
    public function getIdZ()
    {
        return $this->idZ;
    }

    /**
     * @param mixed $idZ
     */
    public function setIdZ($idZ)
    {
        $this->idZ = $idZ;
    }

    /**
     * @return mixed
     */
    public function getNomZ()
    {
        return $this->nomZ;
    }

    /**
     * @param mixed $nomZ
     */
    public function setNomZ($nomZ)
    {
        $this->nomZ = $nomZ;
    }

    /**
     * @return mixed
     */
    public function getNbPersonnesTotal()
    {
        return $this->nbPersonnesTotal;
    }

    /**
     * @param mixed $nbPersonnesTotal
     */
    public function setNbPersonnesTotal($nbPersonnesTotal)
    {
        $this->nbPersonnesTotal = $nbPersonnesTotal;
    }

    /**
     * @return mixed
     */
    public function getNbPersonnesSympt()
    {
        return $this->nbPersonnesSympt;
    }

    /**
     * @param mixed $nbPersonnesSympt
     */
    public function setNbPersonnesSympt($nbPersonnesSympt)
    {
        $this->nbPersonnesSympt = $nbPersonnesSympt;
    }

    /**
     * @return mixed
     */
    public function getNbPersonnesPosi()
    {
        return $this->nbPersonnesPosi;
    }

    /**
     * @param mixed $nbPersonnesPosi
     */
    public function setNbPersonnesPosi($nbPersonnesPosi)
    {
        $this->nbPersonnesPosi = $nbPersonnesPosi;
    }

    /**
     * @return mixed
     */
    public function getIdPays()
    {
        return $this->idPays;
    }

    /**
     * @param mixed $idPays
     */
    public function setIdPays($idPays)
    {
        $this->idPays = $idPays;
    }

    public static function findAll($nom="", $pays="Tous")
    {
        $texteReq="SELECT *, z.idZ as numero, z.nomZ as 'libZone', p.nomP as 'libPays' FROM zone z, pays p WHERE z.idPays=p.idP";
        if ($nom != "") {
            $texteReq .= " AND z.nomZ LIKE '%" . $nom . "%'";
        }
        if ($pays != "Tous") {
            $texteReq .= " AND p.idP =" . $pays;
        }
        $texteReq.=" ORDER BY z.nomZ";
        $db = DBConnexion::getInstance();
        $sql = $texteReq;
        $lesResultats = $db->query($sql)->fetchAll(2);
        return $lesResultats;
    }

    public static function add(Zone $zone)
    {
        $db=DBConnexion::getInstance();
        $sql = "INSERT 
                INTO zone (idZ,nomZ,nbPersonnesTotal,nbPersonnesSympt,nbPersonnesPosi,idPays) 
                VALUES(null,'".$zone->getNomZ()."','".$zone->getNbPersonnesTotal()."','".$zone->getNbPersonnesSympt()."','".$zone->getNbPersonnesPosi()."','".$zone->getIdPays()."')";
        $nb=$db->exec($sql);
        return $nb;
    }

    public static function findById($id)
    {
        $db = DBConnexion::getInstance();
        $sql = "SELECT * FROM zone WHERE idZ = $id";
        $leResultat = $db->query($sql)->fetch(2);
        return $leResultat;
    }

    public static function update(Zone $zone)
    {
        $db = DBConnexion::getInstance();
        $sql = "UPDATE zone 
                SET nomZ = '".$zone->getNomZ()."', nbPersonnesTotal = '".$zone->getNbPersonnesTotal()."', nbPersonnesSympt = '".$zone->getNbPersonnesSympt()."', nbPersonnesPosi = '".$zone->getNbPersonnesPosi()."', idPays = '".$zone->getIdPays()."' 
                WHERE idZ = ".$zone->getIdZ();
        $nb = $db->exec($sql);
        return $nb;
    }

    public static function delete($id)
    {
        $db = DBConnexion::getInstance();
        $sql = "DELETE FROM zone WHERE idZ = $id";
        $nb = $db->exec($sql);
        return $nb;
    }


}
