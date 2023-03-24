<?php
$action=$_GET['action'];
switch($action){
    case 'list':
        $lesRoles = Role::findAll();
        include('views/role/list.php');
        break;
    case 'add' :
        $mode="Ajouter";
        include('views/role/add.php');
        break;
    case 'update' :
        $mode="Modifier";
        $leRole=Role::findById($_GET['id']);
        include('views/role/add.php');
        break;
    case 'delete' :
        $idRole = $_GET['id'];
        $nb=Role::delete($idRole);
        if($nb==1){
            $_SESSION['message']=["success"=>"Le role a bien été supprimé"];
        }else{
            $_SESSION['message']=["danger"=>"Le role n'a pas été supprimé"];
        }
        header('location: index.php?uc=role&action=list');
        exit();
        break;

    case 'valideForm' :
        $role= new Role();
        if(empty($_POST['idR'])){ // cas d'une création
            $role->setNomR($_POST['nomR']);
            $nb=Role::add($role);
            $message = "ajouté";
        }else{ //  cas d'une modif
            $role->setIdR($_POST['idR']);
            $role->setNomR($_POST['nomR']);
            $nb=Role::update($role);
            $message = "modifié";
        }
        if($nb==1){
            $_SESSION['message']=["success"=>"Le role a bien été $message"];
        }else{
            $_SESSION['message']=["danger"=>"Le role n'a pas été $message"];
        }
        header('location: index.php?uc=role&action=list');
        exit();
        break;
}
?>