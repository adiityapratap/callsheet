<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Callsheet</title>
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>

 <!-- NAV BAR -->
 <nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="index.php">
        <img src="img/logocs.png" width="130" height="40">
      </a>
  
      <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>
  
    <div id="navbarBasicExample" class="navbar-menu">
      <div class="navbar-start">


        <a href="profile.php" class="navbar-item">
          Min Profil
        </a>
        <a href="castings.php" class="navbar-item">
            Castings 
          </a>
  
       
        </div>
      </div>
  
      <div class="navbar-end">
        <div class="navbar-item">
          <div class="buttons">
          <?php if (isset($_SESSION['message'])): ?>
        <div class="notification is-primary <?php echo $_SESSION['type'] ?>">
          <?php
            unset($_SESSION['message']);
            unset($_SESSION['type']);
          ?>
        <?php endif;?>

        <h4>Velkommen <?php echo $_SESSION['navn']; ?></h4>
        <a href="logout.php" style="color: red">Logout</a>
</div>
        <?php if (!$_SESSION['verified']): ?>
          <div class="notification is-warning">
            Før du kan bruge din konto bedes du verificere din konto via det link vi lige har sendt til dig på
            <strong><?php echo $_SESSION['id']; ?></strong>
          </div>
        <?php else: ?>
        <?php endif;?>
        </div>
            <a href="register.php" class="button is-primary">
              <strong>Sign up</strong>
            </a>
            <a href="login.php" class="button is-light">
              Log in
            </a>
          </div>
        </div>
      </div>
    </div>
  </nav>

	