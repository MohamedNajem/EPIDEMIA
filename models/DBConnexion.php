<?php
class DBConnexion
{
    private static $serveur = 'mysql:host=localhost';
    private static $bdd = 'dbname=epidemia_db';
    private static $user = 'root';
    private static $mdp = '';
    private static $monPdo;
    private static $unPdo = null;

    private function __construct()
    {
        DBConnexion::$unPdo = new PDO(DBConnexion::$serveur . ';' . DBConnexion::$bdd, DBConnexion::$user, DBConnexion::$mdp);
        DBConnexion::$unPdo->query("SET CHARACTER SET utf8");
        DBConnexion::$unPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function __destruct()
    {
        DBConnexion::$unPdo = null;
    }

    /**
     *    Fonction statique qui cree l'unique instance de la classe
     * Appel : $instanceDBConnexion = DBConnexion::getDBConnexion();
     * @return l'unique objet de la classe DBConnexion
     */
    public static function getInstance()
    {
        if (self::$unPdo == null) {
            self::$monPdo = new DBConnexion();
        }
        return self::$unPdo;
    }

}

?>
