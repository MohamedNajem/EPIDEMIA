<?php
require_once "models/DBconnexion.php";
require_once "models/User.php";

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
                        <?=$message?>
                        <div class="text center">
                        <h2 class="form-title">Connexion</h2>
                        <form method="POST" class="register-form" id="register-form">
                            
                            <div class="form-group">
                                <label for="login"><i class="zmdi zmdi-account"></i></label>
                                <input type="text" name="ut" id=".['nomR']." placeholder="Votre login"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="" id=".['password']." placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>Se souvenir de moi</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="Valider" id="signup" class="form-submit" value="Se connecter"/>
                            </div>
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