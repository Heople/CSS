<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>e-kiné - Rechercher un patient</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="lib/jquery-3.3.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <script type="text/javascript" src="controllers/fichepatientcontroller.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!--    appel des différents scripts qui seront utilisés-->

    <title>Mon patient</title>
</head>

<body ng-app="myapp" class="bg-fiche">
    <!--        module utilisé -->
    <nav>
      <img src="img/logo.png" alt="Logo e-Kiné">
        <ul class="navigation">
            <!-- <li class="menu-item"><a href=""><div class="nav-item">Acceuil</div></a></li> -->
            <li class="menu-item"><a href=""><div class="nav-item nav-active">Mes patients</div></a></li>
            <li class="menu-item"><a href=""><div class="nav-item">Mes RDV</div></a></li>
            <li class="menu-item"><a href=""><div class="nav-item">Programmes</div></a></li>
        </ul>

    </nav>
    <div ng-controller="fichepatientcontroller" class="prog-container">
<!--        controlleur utilisé -->
<header>
  <h1>Mes patients</h1>
  <a class="deco-button" href="">se deconnecter</a>
</header>
<div class="fiche-patient-box">
  <div class="fiche-gauche">
    <img class="photo" src="img/photo.jpg" alt="Photo du patient">
    <h4>Programme</h4>
    <div class="fiche-exo-box">
      Exo 1 : Rééduction du génoux
    </div>
    <div class="fiche-exo-box">
      Exo 1 : Rééduction du génoux
    </div>
    <div class="fiche-exo-box">
      Exo 1 : Rééduction du génoux
    </div>
  </div>
  <div class="fiche-mid">
    <div class="header-info">
      <!-- <p class="nom-prenom"><span class="fiche-nom">ouadhi</span> Samy</p> -->
      <p class="nom-prenom"><span class="fiche-nom">{{Nom}}</span> {{Prenom}}</p>
      <p>Patient depuis le : 12 / 12 / 12</p>

      <p>{{Age}} ans</p>
      <p>{{Tel}}</p>


      <!-- <p class="fiche-email">samyouadhi@gmail.com</p> -->
      <p class="fiche-email">{{Email}}</p>



    </div>
    <div class="antecedent-rdv">
      <h3>Antécédents</h3>
      <div class="antecedent-area">
        {{Antecedents}}
      </div>
      <h3>Prochain rendez-vous</h3>
      <p class="date-rdv">
        <strong>Date</strong><br><br>
        15/04/2019 - 14h30
      </p>
      <br>
      <div class="fiche-description-rdv">
        <p>Descriptif de la prochaine séance</p>
        <p></p>
      </div>
    </div>



  </div>
  <div class="feedback-field">
    <h3>Feedback</h3>
    <button class="add_programme"><a href="programmes.php"><i class="fas fa-plus"></i>Ajouter programme</a></button>


    <!-- Feedback du programme (douleur/10): {{FeedBack}} <br />
    Feedback des exercices (douleur/10): {{FeedBackexo}} -->
  </div>

</div>


<!--        retour de toutes les informations présentes dans les différents scopes -->

    </div>
</body>

</html>
