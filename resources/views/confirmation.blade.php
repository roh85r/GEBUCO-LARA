<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>GEBUCO-EPP - Confirmation d'inscription</title>
  <link rel="stylesheet" href="../../vendors/feather/feather.css">
  <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
  <link rel="shortcut icon" href="../../images/favicon.png" />
  <style>
    /* Ajoutez ici vos styles CSS personnalisés */
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
            <h4>Confirmation d'inscription</h4>
            <p class="mt-3">Merci pour votre inscription ! Votre matricule attribué est : <strong>{{ $matricule }}</strong>.</p>
            <p>Vous pouvez maintenant vous connecter en utilisant ce matricule.</p>
            <div class="mt-3">
              <a href="{{ route('login') }}" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Se connecter</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
