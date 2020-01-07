<?php

$PageTitle="New Page Title";

function customPageHeader(){?>
  <!--Arbitrary HTML Tags-->
<?php }

include_once('header.php');
?>
	<!-- USER SIGNUP -->
	<section class="section">
  <div class="columns is-mobile is-centered">
  <div class="column is-one-third">
  <div class="field">
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>
			<label class="label">Navn</label>
			<input class="input" type="text" name="navn" value="<?php echo $navn; ?>">
		<div class="input-group">
			<label class="label">Email</label>
			<input class="input" type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label class="label">Password</label>
			<input class="input" type="password" name="password_1">
		</div>
		<div class="input-group">
			<label class="label">Confirm password</label>
			<input class="input" type="password" name="password_2">
    </div>
</div>
		<div class="input-group">
			<button class="button is-success" type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Er du allerede en bruger? <a href="login.php">Log ind</a>
		</p>
	</form>
</body>
</html>