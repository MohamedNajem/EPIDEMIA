<?php ob_start();

session_start();
if (empty($_SESSION)) {
    header("location:http://localhost/EPIDEMIA");
}
if (isset($_GET['deconnexion'])) {
    session_unset();
    session_destroy();
    header("location:http://localhost/EPIDEMIA");
}
include("models/Pays.php");
include("models/PointSurveillance.php");
include("models/Role.php");
include("models/User.php");
include("models/Zone.php");
include("models/DBConnexion.php");
include("views/header.php");
include("views/messagesFlash.php");

$uc = empty($_GET['uc']) ? "accueil" : $_GET['uc'];

switch($uc){
case 'accueil' :
include('views/accueil.php');
break;
case 'pays' :
include('controllers/paysController.php');
break;
case 'pointSurveillance':
    include('controllers/pointSurveillanceController.php');
    break;
case 'role':
    include('controllers/roleController.php');
    break;
case 'user':
    include('controllers/userController.php');
    break;
case 'zone' :
    include('controllers/zoneController.php');
    break;

}
include("views/footer.php");
?>