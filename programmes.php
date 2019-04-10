<?php
header('Access-Control-Allow-Origin: http://ekine.iut-velizy.uvsq.fr', true);
session_start();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>e-kiné - Ajouter un programme à un patient</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.7/angular.min.js"></script>
    <script type="text/javascript" src="lib/jquery-3.3.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <script type="text/javascript" src="js/angular-route.min.js"></script>
    <script type="text/javascript" src="js/ng-youtube-embed.min.js"></script>
    <script type="text/javascript" src="controllers/programmecontroller.js"></script>
    <script type="text/javascript" src="js/louise.js"></script>
    <!-- <script type="text/javascript" src="js/js.js"></script> -->
<!--    appel des différents scripts qui seront utilisés-->

</head>

<body class="bg-fiche" ng-app="myapp">
<!--    module utilisé-->
  <nav>
    <img src="img/logo.png" alt="Logo e-Kiné">
      <ul class="navigation">
          <!-- <li class="menu-item"><a href=""><div class="nav-item">Acceuil</div></a></li> -->
          <li class="menu-item"><a href=""><div class="nav-item nav-active">Mes patients</div></a></li>
          <li class="menu-item"><a href=""><div class="nav-item">Mes RDV</div></a></li>
          <li class="menu-item"><a href=""><div class="nav-item">Programmes</div></a></li>
      </ul>
  </nav>
<!--        menu-->
    <div ng-controller="programmecontroller" class="prog-container">
<!--            choix du controlleur qu'on utilise pour afficher les données dans la vue -->
      <header>
        <h1>Programmes</h1>
        <a class="deco-button" href="">se deconnecter</a>
      </header>
      <div class="main-prog-container">
        <div class="information-programme">
          <h1 class="h1-programme">Entrez le nom du programme</h1>
          <div>
            <input class="titre-prog" placeholder="Ex : Titre du programme" type="" ng-model="TitreProgramme" />
            <!-- ng-model sert à passer les données du modèle vers la vue eet s'assure que les données présentes dans la vue et le modèle sont les mêmes-->
          </div>
          <h1 class="h1-programme">Entrez le nom d'un exercice</h1>
          <div>
            <input class="search-bar-exos" placeholder="Ex : triple salto du bras droit." list="listeExercice" type="" ng-model="SelectExercice" ng-change="Truc(SelectExercice)" />
            <!-- barre de recherche permettant de chercher les exercices; ng-change detecte quand la valeur de ng-model change-->
              <datalist class="option-exo"id="listeExercice">
                  <!-- liste déroulante où tous les exercices récupérés par la requête sont affichés grâce à ng-repeat; la valeur de chaque exercice est récupéree grâce au scope-->
                  <option ng-repeat="exercice in exercices" value="{{exercice.Nom_exo}}">
              </datalist>
              <p class="erreur-programme"></p>
          </div>
          <br/>
          <br/>
      Répétition : <input type="number" min="0" max="120" id=frequence></input>
      Durée : <input type="number" min="0" max="120" id=recurrence></input>
      <div class="description-infos">
        <h3>Titre : {{Nom_exo}}</h3>

        <p>Description :</p>
        <p class="description" style="width: 500px;">{{Description}}</p>
      <!--    nom de l'exercice et description récupéré grâce au scope-->

      <div class="video-programme">
      <ng-youtube-embed
          video="videoURL"
          autoplay="false"
          color="black"
          disablekb="true"
          end="20"
          width="340px"
          height="220px"
            >
      </ng-youtube-embed>
    </div>

      </div>



          <button class="add-exercice" ng-model="SelectExercice" ng-click="AddExercice">Ajouter cet exercice</button>

        <!--    ng-click définit les directives à effectuer lorsqu'on appuye sur un des boutons-->
        </div>
        <div class="affichage-container">

        <div class="affichage">

        </div>
        <button class="add-programme" ng-model="AddtExercice" ng-click="AddProgramme">Ajouter ce programme</button>
      </div>

    </div>

  </div>






</body>

</html>
