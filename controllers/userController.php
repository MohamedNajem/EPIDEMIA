<?php
$action = $_GET['action'];
switch($action){
    case 'list' :
        // traitement du formulaire de recherche
        $nom="";
        $roleSel="Tous";
        if(!empty($_POST['nom']) || !empty($_POST['role'])){
            $nom= $_POST['nom'];
            $roleSel= $_POST['role'];
        }
        $lesRoles=Role::findAll();
        $lesUsers=User::findAll($nom, $roleSel);
        include('views/user/list.php');
        break;
    case 'add' :
        $mode="Ajouter";
        $lesRoles=Role::findAll();
        include('views/user/add.php');
        break;
    case 'update' :
        $mode="Modifier";
        $lesRoles = Role::findAll();
        $user = User::findById($_GET['id']);
        include('views/user/add.php');
        break;
    case 'delete' :
        $nb=User::delete($_GET['id']);
        if($nb==1){
            $_SESSION['message']=["success"=>"L'utilisateur a bien été supprimé"];
        }else{
            $_SESSION['message']=["danger"=>"L'utilisateur n'a pas été supprimé"];
        }
        header('location: index.php?uc=user&action=list');
        exit();
        break;

    case 'validerForm' :
        $user= new User();
        if(empty($_POST['id'])){ // cas d'une création
            $user->setNom($_POST['nom']);
            $user->setPrenom($_POST['prenom']);
            $user->setEmail($_POST['email']);
            $user->setPassword($_POST['password']);
            $user->setIdRole($_POST['idRole']);
            $nb=User::add($user);
            $message = "ajouté";
        }else{ //  cas d'une modif
            $user->setId($_POST['id']);
            $user->setNom($_POST['nom']);
            $user->setPrenom($_POST['prenom']);
            $user->setEmail($_POST['email']);
            $user->setPassword($_POST['password']);
            $user->setIdRole($_POST['idRole']);
            $nb=User::update($user);
            $message = "modifié";
        }
        if($nb==1){
            $_SESSION['message']=["success"=>"L'utilisateur a bien été $message"];
        }else{
            $_SESSION['message']=["danger"=>"L'utilisateur a bien été $message"];
        }
        header('location: index.php?uc=user&action=list');
        exit();
        break;
}
?>