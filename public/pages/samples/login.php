<?php
// Informations de connexion à la base de données
$serveur = "localhost"; // ou adresse IP du serveur MySQL
$nom_utilisateur = "root"; // nom d'utilisateur MySQL
$mot_de_passe = ""; // mot de passe MySQL
$base_de_donnees = "logindb"; // nom de la base de données

try {
    // Créer une connexion à la base de données avec PDO
    $connexion = new PDO("mysql:host=$serveur;dbname=$base_de_donnees", $nom_utilisateur, $mot_de_passe);
    
    // Définir le mode de gestion des erreurs PDO à EXCEPTION
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    
} catch(PDOException $e) {
    // En cas d'erreur, afficher le message d'erreur
    echo "Erreur de connexion à la base de données: " . $e->getMessage();
}

// Vérification du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier que les champs username et password ne sont pas vides
    if (!empty($_POST["username"]) && !empty($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Requête pour vérifier l'existence de l'utilisateur
        $requete = $connexion->prepare("SELECT * FROM register WHERE username = ?");
        $requete->execute([$username]);
        $utilisateur = $requete->fetch(PDO::FETCH_ASSOC);

        if ($utilisateur) {
            // Vérification du mot de passe
            if (password_verify($password, $utilisateur['password'])) {
                echo "Connexion réussie !";
                // Rediriger l'utilisateur vers la page d'accueil ou toute autre page souhaitée
                 header("Location: /skydash/index.php");
                 exit();
            } else {
                echo "Mot de passe incorrect";
            }
        } else {
            echo "Nom d'utilisateur incorrect";
        }
    } else {
      
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>GEBUCO-EPP</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/feather/feather.css">
  <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
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
              <h4>Bonjour ! Commençons par le début</h4>
              
              <form class="pt-3" action="login.php" method="POST">
    <div class="form-group">
        <input type="text" name="username" class="form-control form-control-lg" placeholder="Username">
    </div>
    <div class="form-group">
        <input type="password" name="password" class="form-control form-control-lg" placeholder="Password">
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
                Vous n'avez pas de compte ?<a href="register.php" class="text-primary">Créer</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
