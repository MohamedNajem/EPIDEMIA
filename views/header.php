<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>EPIDEMIA</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="monStyle.css">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
        <a class="navbar-brand pl-5" href="index.php">EPIDEMIA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="index.php?uc=pays&action=list" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gestion des pays</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="index.php?uc=pays&action=list">Liste des pays</a>
                        <a class="dropdown-item" href="index.php?uc=pays&action=add">Ajouter un pays</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="index.php?uc=zone&action=list" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-male"></i> Gestion des zones</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="index.php?uc=zone&action=list">Liste des zones</a>
                        <a class="dropdown-item" href="index.php?uc=zone&action=add">Ajouter un zone</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="index.php?uc=pointSurveillance&action=list" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-flag"></i> Gestion des
                        points de surveillance</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="index.php?uc=pointSurveillance&action=list">Liste des points de surveillance</a>
                        <a class="dropdown-item" href="index.php?uc=pointSurveillance&action=add">Ajouter un point de surveillance</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="index.php?uc=user&action=list" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gestion des
                        utilisateurs</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="index.php?uc=user&action=list">Liste des utilisateurs</a>
                        <a class="dropdown-item" href="index.php?uc=user&action=add">Ajouter un utilisateur</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="index.php?uc=role&action=list" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gestion des
                        roles</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="index.php?uc=role&action=list">Liste des roles</a>
                        <a class="dropdown-item" href="index.php?uc=role&action=add">Ajouter un role</a>
                    </div>
                </li>
                <a href="conx.php" class=" btn btn-outline-danger btn-sm right"> DECONNECTER </a>
            </ul>
        </div>
    </nav>