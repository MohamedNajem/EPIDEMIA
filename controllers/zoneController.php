<?php
$action = $_GET['action'];
switch($action){
        case 'list' :
        // traitement du formulaire de recherche
        $nom="";
        $paysSel="Tous";
        if(!empty($_POST['nom']) || !empty($_POST['pays'])){
            $nom= $_POST['nom'];
            $paysSel= $_POST['pays'];
        }
        $lesPays=Pays::findAll();
        $lesZones=Zone::findAll($nom, $paysSel);
        include('views/zone/list.php');
        break;
    case 'add' :
        $mode="Ajouter";
        $lesPays=Pays::findAll();
        include('views/zone/add.php');
        break;
    case 'update' :
        $mode="Modifier";
        $lesPays = Pays::findAll();
        $laZone = Zone::findById($_GET['id']);
        include('views/zone/add.php');
        break;
    case 'delete' :
        $nb=Zone::delete($_GET['id']);
        if($nb==1){
            $_SESSION['message']=["success"=>"La zone a bien été supprimé"];
        }else{
            $_SESSION['message']=["danger"=>"La zone n'a pas été supprimé"];
        }
        header('location: index.php?uc=zone&action=list');
        exit();
        break;

    case 'validerForm' :
        $zone= new Zone();
        if(empty($_POST['idZ'])){ // cas d'une création
            $zone->setNomZ($_POST['nomZ']);
            $zone->setNbPersonnesTotal($_POST['nbPersonnesTotal']);
            $zone->setNbPersonnesSympt($_POST['nbPersonnesSympt']);
            $zone->setNbPersonnesPosi($_POST['nbPersonnesPosi']);
            $zone->setIdPays($_POST['idPays']);
            $nb=Zone::add($zone);
            $message = "ajouté";
        }else{ //  cas d'une modif
            $zone->setIdZ($_POST['idZ']);
            $zone->setNomZ($_POST['nomZ']);
            $zone->setNbPersonnesTotal($_POST['nbPersonnesTotal']);
            $zone->setNbPersonnesSympt($_POST['nbPersonnesSympt']);
            $zone->setNbPersonnesPosi($_POST['nbPersonnesPosi']);
            $zone->setIdPays($_POST['idPays']);
            $nb=Zone::update($zone);
            $message = "modifié";
        }
        if($nb==1){
            $_SESSION['message']=["success"=>"La zone a bien été $message"];
        }else{
            $_SESSION['message']=["danger"=>"La zone a bien été $message"];
        }
        header('location: index.php?uc=zone&action=list');
        exit();
        break;
}
?>