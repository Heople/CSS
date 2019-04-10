<?php

header('Access-Control-Allow-Origin: *');

//On utilise la fonction htmlspecialchars pour nous protéger contre une insertion malicieuse
$identifiant = htmlspecialchars($_POST['identifiant']);
$mdp = htmlspecialchars($_POST['mdp']);

// Connexion à la BDD en PDO
try {
  // $bdd = new PDO('mysql:host=localhost;dbname=e_kine','root','Ah#19!');
  $bdd = new PDO('mysql:host=localhost;dbname=e_kine','root','');
  $bdd->exec('SET NAMES "utf8"');
}
catch (Exeption $e) {
  die('Erreur : ' .$e->getMessage())  or die(print_r($bdd->errorInfo()));
}

// On utilise une requête préparée pour sécuriser notre requête contre une injection SQL
$req = $bdd->prepare("SELECT * FROM logkine WHERE User= ? AND Password= ?");
$req->execute(array($identifiant, md5($mdp)));


$result = $req->fetchAll(PDO::FETCH_ASSOC);

//On récupère la valeur de l'id
foreach ($result as $row) {
  $id = $row['Id'];
}

//Si il y a un résultat (et donc que les informations sont corrects)
   if (!empty($result)) {
     //On place deux valeurs dans un tableau, la première qui va permettre l'authentification, et une seconde qui sera gardée en mémoire et qui sera utilisée dans d'autres requetes. On envoi le résultat au controleur
     echo json_encode(array("state" => "success","Id" => $id));
   }
//sinon, on renvoi une erreur
   else {
     echo json_encode(array("state" => "error"));
   }


 ?>
