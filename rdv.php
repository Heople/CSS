<!-- rdv.php -->
<?php
session_start(); //démarrage de la session pour toujours avec accès aux variables de session

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>e-kiné - Mes rendez-vous</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="lib/jquery-3.3.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
<!--    appel des différents scripts qui seront utilisés-->


    <script type="text/javascript" src="controllers/rdvcontroller.js"></script>
<!--    on définit le controlleur (angular) que l'on va utiliser pour afficher les données-->
    <title>Mes prochains rdv</title>
</head>

<body class="bg-fiche">
  <nav>
    <img src="img/logo.png" alt="Logo e-Kiné">
      <ul class="navigation">
          <!-- <li class="menu-item"><a href=""><div class="nav-item">Acceuil</div></a></li> -->
          <li class="menu-item"><a href=""><div class="nav-item nav-active">Mes patients</div></a></li>
          <li class="menu-item"><a href=""><div class="nav-item">Mes RDV</div></a></li>
          <li class="menu-item"><a href=""><div class="nav-item">Programmes</div></a></li>
      </ul>

  </nav>
    <div class="container" ng-app="myapp">
<!--        ng-app correspond au module angular -->
        <div ng-controller="rdvcontroller" class="prog-container">
            <!--  le controlleur utilisé-->
          <header>
            <h1>Mes prochains rendez-vous</h1>
            <a class="deco-button" href="">se deconnecter</a>
          </header>
          <div class="main-rdv">
            <h3>Rechercher un rendez-vous</h3>
            <input placeholder="Nom du patient" class="search-rdv" type="text" ng-model="task" />
    <!--        modèle utilisé pour récupéré les données -->
            <h3>Prochains rendez-vous</h3>
              <table class="table table-bordered">
                  <tr class="table-head-rdv">
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Date</th>
                    <th>Heure</th>
                  </tr>
  <!--                définition des différentes colonnes à afficher-->
                  <tr class="table-space" ng-repeat="x in rdv | filter: task">
  <!--                    grâce au ng-repeat, on affiche les lignes une par une grâce aux données présentes dans le scope-->

                      <td>{{x.Nom}}</td>
                      <td>{{x.Prenom}}</td>
                      <td>{{x.Date}}</td>
                      <td>{{x.Heure}}</td>

                  </tr>
              </table>
          </div>



        </div>
    </div>

</body>

</html>
