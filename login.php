<?php
include('controllers/server.php');

$PageTitle="New Page Title";

function customPageHeader(){?>
  <!--Arbitrary HTML Tags-->
<?php }

include_once('header.php');
include('errors.php');
?>

<section class="section">
  <div class="columns is-mobile is-centered">
  <div class="column is-one-third">

<form method="post" action="login.php">

		<div class="input-group">
			<label class="label">Email</label>
			<input class="input" type="text" name="email" >
    </div>

    <div class="input-group">
			<label class="label">Password</label>
			<input class="input" type="password" name="password">
    </div>
    
    <div class="input-group">
			<button type="submit" class="button" name="login_user">Login</button>
    </div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
    </p>
  </form>
  </div>
    </div>

 
</section>

<?php
include_once('footer.php');
?>