<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="login.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"/>
</head>
<body>
<!--------------------------------------------------------------  Nav --------------------------------------------------------------------------------------------------->
<header>
      <a href="index.php"><img class="logo" src="images/logo.jpg" /></a>
      <div class="bx bx-menu" id="menu-icon"></div>
      <nav>
        <ul class="navbar">
          <li><a href="index.php">Accueil</a></li>
          <li><a href="#produits">Nos produits</a></li>
          <li><a href="#livraison">Livraison</a></li>
          <li><a href="#about">A propos de nous</a></li>
          <li><a href="form.html">Contactez nous</a></li>
        </ul>
      </nav>
    </header>
<!-------------------------------------------------------------------Fin NAV ---------------------------------------------------------------------------------------------->
<form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</section>
</body>
</html>