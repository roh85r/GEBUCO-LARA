<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>GEBUCO-EPP</title>
  <!-- CSS -->
  <link rel="stylesheet" href="{{ asset('vendors/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.base.css') }}">
  <link rel="stylesheet" href="{{ asset('css/vertical-layout-light/style.css') }}">
  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="{{ asset('images/logo.png') }}" alt="logo">
              </div>
              <h4>Bonjour ! Commençons par le début</h4>
              <form class="pt-3" action="{{ route('login') }}" method="POST">
                @csrf <!-- Ajoutez ceci pour assurer la sécurité CSRF -->
                <div class="form-group">
                  <input type="text" name="username" class="form-control form-control-lg" placeholder="Nom d'utilisateur" required>
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg" placeholder="Mot de passe" required>
                </div>
                <div class="form-group">
                  <select name="type_utilisateur" class="form-control form-control-lg" required>
                    <option value="" disabled selected>Type d'utilisateur</option>
                    <option value="Administrateur">Administrateur</option>
                    <option value="Ordonnateur">Ordonnateur</option>
                    <option value="Controleur Budgetaire">Contrôleur Budgétaire</option>
                    <option value="Comptable">Comptable</option>
                  </select>
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Se connecter</button>
                </div>
                <p class="text-muted mt-2">Veuillez remplir les champs ci-dessus pour vous connecter.</p>
              </form>
              <div class="my-2 d-flex justify-content-between align-items-center">
                <div class="form-check">
                  <label class="form-check-label text-muted">
                    <input type="checkbox" class="form-check-input">
                    Garder ma session ouverte
                  </label>
                </div>
                <a href="#" class="auth-link text-black">Mot de passe oublié ?</a>
              </div>
              <div class="mb-2">
                <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                  <i class="ti-facebook mr-2"></i>Se connecter avec facebook
                </button>
              </div>
              <div class="text-center mt-4 font-weight-light">
              Vous n'avez pas de compte ?<a href="{{ route('register') }}" class="text-primary">Créer</a>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- JavaScript -->
  <script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>
  <script src="{{ asset('js/off-canvas.js') }}"></script>
  <script src="{{ asset('js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('js/template.js') }}"></script>
  <script src="{{ asset('js/settings.js') }}"></script>
  <script src="{{ asset('js/todolist.js') }}"></script>
</body>

</html>
