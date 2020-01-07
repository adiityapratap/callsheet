<?php 
	session_start();

	require_once 'sendEmails.php';

	// variable declaration
	$navn = "";
	$profession = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$conn = mysqli_connect('mysql101.unoeuro.com', 'callsheet_dk', 'F3d3mikk3l', 'callsheet_dk_db');

	// REGISTER USER
	if (isset($_POST['signup-btn'])) {

		if (empty($_POST['navn'])) {
			$errors['navn'] = 'Navn required';
		}
		if (empty($_POST['profession'])) {
			$errors['profession'] = 'Profession required';
		}
		if (empty($_POST['email'])) {
			$errors['email'] = 'Email required';
		}
		if (empty($_POST['password'])) {
			$errors['password'] = 'Password required';
		}
		if (isset($_POST['password']) && $_POST['password'] !== $_POST['passwordConf']) {
			$errors['passwordConf'] = 'The two passwords do not match';
		}
		
		$navn = $_POST['navn'];
		$profession = $_POST['profession'];
		$email = $_POST['email'];
		$token = bin2hex(random_bytes(50)); // generate unique token
		$password = password_hash($_POST['password'], PASSWORD_DEFAULT); //encrypt password
	
		// Check if email already exists
		$sql = "SELECT * FROM users WHERE email='$email' LIMIT 1";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			$errors['email'] = "Email already exists";
		}
	
		if (count($errors) === 0) {
			$query = "INSERT INTO users SET navn=?, profession=?, email=?, token=?, password=?";
			$stmt = $conn->prepare($query);
			$stmt->bind_param('sssss', $navn, $profession, $email, $token, $password);
			$result = $stmt->execute();
	
			if ($result) {
				$user_id = $stmt->insert_id;
				$stmt->close();
	
		// Send verification email to user
		sendVerificationEmail($email, $token);
	
				$_SESSION['id'] = $user_id;
				$_SESSION['email'] = $email;
				$_SESSION['verified'] = false;
				$_SESSION['message'] = 'You are logged in!';
				$_SESSION['type'] = 'alert-success';
				header('location: index.php');
			} else {
				$_SESSION['error_msg'] = "Database error: Could not register user";
			}
		}
	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login-btn'])) {
		if (empty($_POST['email'])) {
			$errors['email'] = 'Email required';
		}
		if (empty($_POST['password'])) {
			$errors['password'] = 'Password required';
		}
		$email = $_POST['email'];
		$password = $_POST['password'];
	
		if (count($errors) === 0) {
			$query = "SELECT * FROM users WHERE email=? LIMIT 1";
			$stmt = $conn->prepare($query);
			$stmt->bind_param('ss', $email, $password);
	
			if ($stmt->execute()) {
				$result = $stmt->get_result();
				$user = $result->fetch_assoc();
				if (password_verify($password, $user['password'])) { // if password matches
					$stmt->close();
	
					$_SESSION['id'] = $user['id'];
					$_SESSION['email'] = $user['email'];
					$_SESSION['verified'] = $user['verified'];
					$_SESSION['message'] = 'You are logged in!';
					$_SESSION['type'] = 'alert-success';
					header('location: index.php');
					exit(0);
				} else { // if password does not match
					$errors['login_fail'] = "Wrong email / password";
				}
			} else {
				$_SESSION['message'] = "Database error. Login failed!";
				$_SESSION['type'] = "alert-danger";
			}
		}
	}
?>