<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>GEBUCO-EPP</title>
  <link rel="stylesheet" href="../../vendors/feather/feather.css">
  <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
  <link rel="shortcut icon" href="../../images/favicon.png" />
  <style>
    /* Vos styles CSS personnalisés ici */
  </style>
</head>
<body>
<div class="container-scroller">
  <div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="content-wrapper d-flex align-items-center auth px-0">
      <div class="row w-100 mx-0">
        <div class="col-lg-4 mx-auto">
          <div class="auth-form-light text-left py-5 px-4 px-sm-5">
            <div class="brand-logo">
              <img src="../../images/logo.svg" alt="logo">
            </div>
            <h4>Nouveau ici ?</h4>
            <h6 class="font-weight-light">Inscription facile en quelques étapes</h6>
            <form class="pt-3" id="register-form" action="{{ route('register.submit') }}" method="POST" onsubmit="return validateForm()">
              @csrf
                <div class="form-group">
                <select class="form-control form-control-lg" name="user_type" id="user_type">
                  <option value="">Sélectionnez le type d'utilisateur</option>
                  <option value="Administrateur">Administrateur</option>
                  <option value="Contrôleur Budgétaire">Contrôleur Budgétaire</option>
                  <option value="Comptable">Comptable</option>
                  <option value="Ordonnateur">Ordonnateur</option>
                </select>
                <div class="invalid-feedback" id="user_type-error"></div>
              </div>
              <div class="form-group">
                <input type="password" class="form-control form-control-lg" name="password" id="password" placeholder="Mot de passe">
                <div class="invalid-feedback" id="password-error"></div>
              </div>
              <div class="mt-3">
                <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" id="signup-button">S'INSCRIRE</button>
              </div>
              <div class="text-center mt-4 font-weight-light">
                Déjà un compte ? <a href="{{ route('login') }}" class="text-primary">Connectez-vous</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  function validateForm(event) {
    event.preventDefault() ;
    alert('Button clicked') ; // Affiche un message lorsque le bouton est cliqué

    // Récupérer les éléments d'entrée du formulaire
    var matricule = document.getElementById('matricule').value.trim() ;
    var user_type = document.getElementById('user_type').value.trim() ;
    var password = document.getElementById('password').value.trim() ;
    var isValid = true ;

    // Valider les champs de saisie
    if (matricule.length !== 6 || isNaN(matricule)) {
      document.getElementById('matricule-error').innerText = 'Le matricule doit être composé de 6 chiffres' ;
      isValid = false ;
    } else {
      document.getElementById('matricule-error').innerText = '' ;
    }

    if (user_type === '') {
      document.getElementById('user_type-error').innerText = 'Veuillez sélectionner le type d'utilisateur' ;
      isValid = false ;
    } else {
      document.getElementById('user_type-error').innerText = '' ;
    }

    if (password === '') {
      document.getElementById('password-error').innerText = 'Veuillez entrer le mot de passe' ;
      isValid = false ;
    } else {
      document.getElementById('password-error').innerText = '' ;
    }

    console.log('Validation du formulaire effectuée') ;
    return isValid ;
  }

  // Ajout d'un écouteur d'événement pour l'événement de clic sur le bouton
  var signupBtn = document.getElementById('signup-button') ;
  signupBtn.addEventListener('click', validateForm) ;
</script>

</body>
</html>

