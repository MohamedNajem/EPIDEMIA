<?php
require_once "models/DBconnexion.php";
require_once "models/User.php";

$message="";
      $user= new User();

      if(isset($_POST['valider'])){
        $user->setEmail($_POST['email']);
        $user->setPassword($_POST['password']);
       
        $user =User::findUser($user);
        if($user==null){
            $message = '<div class="text-white alert alert-danger">Erreur cette login n\'existe pas </div>';
        }else{
            session_start();
            $_SESSION['idU'] = $user['idU'];
            $_SESSION['nomU'] = $user['nomU'];
            $_SESSION['prenomU'] = $user['prenomU'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['password'] = $user['password'];
            $_SESSION['idRole'] = $user['idRole'];
            
          
            header('location: index.php?uc=zone&action=list');
        }
       
      }

        
          
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EPIDEMIA</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.css">
    <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.css">
    <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.css">
   
    <!-- Font Icon --> 

    
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    
</head>
<body>


    <div class="main"  style="background-image:url('assets/img/depositphotos_9968183-stock-photo-build-bank.jpg') ;height: 1000px;">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                     
                        <div class="text center">
                        <h2 class="form-title">Connexion</h2>
                        <form  method="post">
                        <?=$message?>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                                <label for="floatingPassword">Password</label>
                            </div>
                            <button type="submit" name="valider" class="btn btn-primary py-3 w-100 mb-4">Se connecter</button>
                        </form>
                            
                        </div>
                    </div>
                    <div class="signup-image">

                        <a href="#" class="signup-image-link">Bienvenue</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
</body>
</html>
