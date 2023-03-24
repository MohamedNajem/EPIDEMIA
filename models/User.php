<?php

class User{
    private $id;
    private $nom;
    private $prenom;
    private $email;
    private $password;
    private $idRole;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getIdRole()
    {
        return $this->idRole;
    }

    /**
     * @param mixed $idRole
     */
    public function setIdRole($idRole)
    {
        $this->idRole = $idRole;
    }

    public static function findAll($nom="", $role="Tous")
    {
        $texteReq="SELECT *, u.id as numero, u.nom as 'nomUser', r.nomR as 'nomRole' FROM user u, role r WHERE u.idRole=r.idR ";
        if ($nom != "") {
            $texteReq .= " AND u.nom LIKE '%" . $nom . "%'";
        }
        if ($role != "Tous") {
            $texteReq .= " AND r.idR =" . $role;
        }
        $texteReq.=" ORDER BY u.nom";
        $db = DBConnexion::getInstance();
        $sql = $texteReq;
        $lesResultats = $db->query($sql)->fetchAll(2);
        return $lesResultats;
    }

    public static function add(User $user)
    {
        $db=DBConnexion::getInstance();
        $sql = "INSERT 
                INTO user (id,nom,prenom,email,password,idRole) 
                VALUES(null,'".$user->getNom()."','".$user->getPrenom()."','".$user->getEmail()."','".$user->getPassword()."','".$user->getIdRole()."')";
        $nb=$db->exec($sql);
        return $nb;
    }

    public static function findById($id)
    {
        $db = DBConnexion::getInstance();
        $sql = "SELECT * FROM user WHERE id = $id";
        $leResultat = $db->query($sql)->fetch(2);
        return $leResultat;
    }

    public static function update(User $user)
    {
        $db = DBConnexion::getInstance();
        $sql = "UPDATE user 
                SET nom = '".$user->getNom()."', prenom = '".$user->getPrenom()."', email = '".$user->getEmail()."', password = '".$user->getPassword()."', idRole = '".$user->getIdRole()."' 
                WHERE id = ".$user->getId();
        $nb = $db->exec($sql);
        return $nb;
    }

    public static function delete($id)
    {
        $db = DBConnexion::getInstance();
        $sql = "DELETE FROM user WHERE id = $id";
        $nb = $db->exec($sql);
        return $nb;
    }
    public static function findUser(User $user)
    {
        $db = DBConnexion::getInstance();
        $sql = "SELECT * FROM user WHERE email = '".$user->getEmail()."' and password = '".$user->getPassword()."'";
        $leResultat = $db->query($sql)->fetch(2);
        return $leResultat;
    }


}
