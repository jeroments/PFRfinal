<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulaire d'inscription</title>
    <link rel="stylesheet" href="login.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
    />
    <link rel="stylesheet" href="inscription.css" />
  </head>
  <body>
    <!--------------------------------------------------------------  Nav --------------------------------------------------------------------------------------------------->
    <header>
      <a href="index.php"><img class="logo" src="img/logo.jpg" /></a>
      <div class="bx bx-menu" id="menu-icon"></div>
      <nav>
        <ul class="navbar">
          <li><a href="index.php">Accueil</a></li>
          <li><a href="#produits">Nos produits</a></li>
          <li><a href="#livraison">Livraison</a></li>
          <li><a href="#about">A propos de nous</a></li>
          <li><a href="form.html">Contactez nous</a></li>
          <li><a href="">Inscription</a></li>
        </ul>
      </nav>
    </header>
    <!-------------------------------------------------------------------Fin NAV ---------------------------------------------------------------------------------------------->

    <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>

    </section>

    <footer>
      <section class="contact" id="contact">
        <div class="social">
          <a href="#"><i class="bx bxl-facebook"></i></a>
          <a href="#"><i class="bx bxl-twitter"></i></a>
          <a href="#"><i class="bx bxl-instagram"></i></a>
          <a href="#"><i class="bx bxl-youtube"></i></a>
        </div>
        <div class="links">
          <a href="#">Mentions légales</a>
          <a href="#">Conditions générales</a>
          <a href="#">Politique de confidentialité</a>
        </div>
      </section>
  
    </footer>
  </body>
</html>
