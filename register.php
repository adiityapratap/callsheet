<?php

include('controllers/server.php');

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
		<div class="control">
			<label class="label">Navn</label>
			<input class="input" type="text" name="navn" value="<?php echo $navn; ?>">
		</div>
		<label class="label">Profession</label>
		<div class="select">
			<select class="input" type="text" name="profession" value="<?php echo $profession; ?>">
			<option>Skuespiller</option>
      		<option>Producent / Caster</option>
			</select>
		</div>
		<div class="control">
			<label class="label">Email</label>
			<input class="input" type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="control">
			<label class="label">Password</label>
			<input class="input" type="password" name="password">
		</div>
		<div class="control">
			<label class="label">Confirm password</label>
			<input class="input" type="password" name="passwordConf">
    	</div>

		<div class="control">
			<button class="button is-success" type="submit" name="signup-btn">Ansøg</button>
		</div>
		<p>
			Er du allerede en bruger? <a href="login.php">Log ind</a>
		</p>
	</form>
</div>
</div>
</div>
</section>


<?php
include_once('footer.php');
?>