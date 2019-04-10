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
    <script type="text/javascript" src="controllers/prendrerdvcontroller.js"></script>
    <!--    appel des différents scripts qui seront utilisés-->

    <title>Nouveau rendez-vous </title>
</head>
<body class="bg-fiche" ng-app="myapp">
  <nav>
    <img src="img/logo.png" alt="Logo e-Kiné">
      <ul class="navigation">
          <!-- <li class="menu-item"><a href=""><div class="nav-item">Acceuil</div></a></li> -->
          <li class="menu-item"><a href=""><div class="nav-item nav-active">Mes patients</div></a></li>
          <li class="menu-item"><a href=""><div class="nav-item">Mes RDV</div></a></li>
          <li class="menu-item"><a href=""><div class="nav-item">Programmes</div></a></li>
      </ul>

  </nav>
<!--   module utilisé -->
    <div ng-controller="prendrerdvcontroller" class="prog-container">
      <!--        controlleur utilisé -->
      <header>
        <h1>Enregistrer un rendez-vous</h1>
        <a class="deco-button" href="">se deconnecter</a>
      </header>
      <div class="main-prendre-rdv">
        <h1>Informations du rendez vous</h1>
        Choisir le patient :<br>
        <input class="choisirpatient" placeholder="Ex : Louise Bouque" list="listepatient" type="" ng-model="SelectPatient" ng-change="Truc(SelectPatient)" />
<!--        input permettant de chercher un patient; ng-change detecte quand la valeur de ng-model change-->
        <datalist id="listepatient">
            <option ng-repeat="patient in patients" value="{{patient.Nom}} {{patient.Prenom}}">
<!--                on affiche dans la liste déroulante le nom et le prénom du patient récupéré grâce au scope-->
        </datalist><br />

        Choisir la date (jj/mm/aaaa) : <br> <input type="date"id='daterdv' required></input><br />
        Choisir l'heure : <br><input id='heurerdv' type="time"required></input></br>
        Description de la prochaine séance : <br><textarea id='descriptionseancepro'></textarea>
<!--        différents input à remplir -->
        <button class='add_rdv'>Ajouter le rdv<br></button>
      </div>



    </div>
</body>

</html>
