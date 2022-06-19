<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

// Need two helper files:
include('login_functions.php');
require('db.php');

// Check the login:
list ($check, $data) = check_login($dbc, $_POST['email'], $_POST['pass'], $_POST['user_role']);

if ($check) { // OK!

	// Set the session data:
	
	session_start();
	
	$_SESSION['user_id'] = $data['user_id'];
	$_SESSION['user_name'] = $data['user_name'];
	$_SESSION['user_email'] = $data['email'];
	$_SESSION['user_role'] = $data['user_role'];

	// Redirect:
	//redirect_user('loggedin.php');
	header('Location: loggedin.php');
	exit();

} else { // Unsuccessful!

	// Assign $data to $errors for login_page.inc.php:
	$errors = $data;

}

mysqli_close($dbc); // Close the database connection.

} // End of the main submit conditional.

// Create the page:
//include('includes/loginform.php');
?>
