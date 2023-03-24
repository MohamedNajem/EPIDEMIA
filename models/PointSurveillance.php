<?php

class PointSurveillance{
    private $idPs;
    private $nomPs;
    private $idZone;

    /**
     * @return mixed
     */
    public function getIdPs()
    {
        return $this->idPs;
    }

    /**
     * @param mixed $idPs
     */
    public function setIdPs($idPs)
    {
        $this->idPs = $idPs;
    }

    /**
     * @return mixed
     */
    public function getNomPs()
    {
        return $this->nomPs;
    }

    /**
     * @param mixed $nomPs
     */
    public function setNomPs($nomPs)
    {
        $this->nomPs = $nomPs;
    }

    /**
     * @return mixed
     */
    public function getIdZone()
    {
        return $this->idZone;
    }

    /**
     * @param mixed $idZone
     */
    public function setIdZone($idZone)
    {
        $this->idZone = $idZone;
    }


    public static function findAll($nom="", $zone="Tous")
    {
        $texteReq="SELECT *, ps.idPs as numero, ps.nomPs as 'nomPs', z.nomZ as 'nomZone' FROM point_surveillance ps, zone z WHERE ps.idZone=z.idZ";
        if ($nom != "") {
            $texteReq .= " AND ps.nomPs LIKE '%" . $nom . "%'";
        }
        if ($zone != "Tous") {
            $texteReq .= " AND z.idZ =" . $zone;
        }
        $texteReq.=" ORDER BY ps.nomPs";
        $db = DBConnexion::getInstance();
        $sql = $texteReq;
        $lesResultats = $db->query($sql)->fetchAll(2);
        return $lesResultats;
    }

    public static function add(PointSurveillance $ps)
    {
        $db=DBConnexion::getInstance();
        $sql = "INSERT INTO point_surveillance(idPs,nomPs,idZone) VALUES(null,'".$ps->getNomPs()."','".$ps->getIdZone()."')";
        $nb=$db->exec($sql);
        return $nb;
    }

    public static function findById($id)
    {
        $db = DBConnexion::getInstance();
        $sql = "SELECT * FROM point_surveillance WHERE idPs = $id";
        $leResultat = $db->query($sql)->fetch(2);
        return $leResultat;
    }

    public static function update(PointSurveillance $ps)
    {
        $db = DBConnexion::getInstance();
        $sql = "UPDATE point_surveillance 
                SET nomPs = '".$ps->getNomPs()."', idZone = '".$ps->getIdZone()."'
                WHERE idPs = ".$ps->getIdPs();
        $nb = $db->exec($sql);
        return $nb;
    }

    public static function delete($id)
    {
        $db = DBConnexion::getInstance();
        $sql = "DELETE FROM point_surveillance WHERE idPs = $id";
        $nb = $db->exec($sql);
        return $nb;
    }

    public static function nbPsByZone($idZone)
    {
        $db = DBConnexion::getInstance();
        $sql = "SELECT COUNT(idPs) as nbPsByZone FROM point_surveillance WHERE idZone = $idZone";
        $leResultat = $db->query($sql)->fetch(2);
        return $leResultat;
    }

}
