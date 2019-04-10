$(document).ready(function() {

  // Mise a jour du DOM pour voir si le script est actif
  $('#message-login').html("Script Ready");

  //Fonction lancée à l'appuit du bouton de validation
  $('.button-auth').click(function() {
    //Récuperation des informations saisies par l'utilisateur
    $identifiant = $("#input-identifiant").val();
    $mdp = $('#input-password').val();
    $keep = $('#keep').is(':checked');
    console.log("clic");
    //On vérifie que l'utilisateur à renseigné un champs
    if (!$identifiant.length && !$mdp.length) {
      $('#message-login').html('Veuillez remplir les champs');
    } else {
      //Envoi des identifiants au fichier php en charge du traitement
      $.ajax({
        type: 'POST',
        //Lien vers le fichier
        url: "php/verifauth.php",
        //Type de data au retour des résultats
        dataType: 'json',
        data: {
          //Informations passée au PHP
          identifiant: $identifiant,
          mdp: $mdp
        },
        // Fonction lancée à la fin de traitement PHP
        success: function(data) {
          if (data.state === "success") {
            //On garde en mémoire l'id de l'utilisateur (Cookie pour navigateur, localstorage pour mobile)
            Cookies.set('id_kine', data.Id);
            console.log (Cookies.get('id_kine'));
            console.log(data);



            //Si les identifiants sont corrects, alors on permet la connexion et on fait un redirection
             window.location.replace("patient.php");
          } else {
            //Sinon, on affiche une erreur
            console.log("derro");
            $('#message-login').html('Identifiant ou mot de passe incorrect');
          }
        }
      })
    }



  });



});
