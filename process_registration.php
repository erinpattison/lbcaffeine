<?php
require("inc_header_public.php");
?>

<main class="process_login_main">
<section id="section_process_login">

<?php 


if ($_SERVER['REQUEST_METHOD'] == 'POST') { //this checks that the form was submitted using the POST method


    require('db.php'); // connect to the db TESTED- SUCCESS

	$errors = []; // Initialize an error array.

	// Check for a username:
	if (empty($_POST['user_name'])) {//if first name field is empty
		$errors[] = 'Please enter a user name'; //push the error array containing this message
	} else { //if not empty
		$user_name = mysqli_real_escape_string($dbc, trim($_POST['user_name'])); //set the variable $fn 
	}
	
	// Check for email:
	if (empty($_POST['user_email'])) {
		$errors[] = 'Please enter an email address';
	} else {
		$user_email = mysqli_real_escape_string($dbc, trim($_POST['user_email']));
	}

	if(!empty($_POST['user_password'])){
        if($_POST['user_password'] != $_POST['confirm_password']){
            $errors[] = 'Your passwords do not match.';
        } else {
            $user_password = mysqli_real_escape_string($dbc, trim($_POST['user_password']));
			//$user_password = password_hash(trim($_POST['user_password']), PASSWORD_DEFAULT);
			//$user_password = $_POST['user_password'];
			//$hashed_password = password_hash($password, PASSWORD_DEFAULT);
        }
    } else {
        $errors[] = 'Please enter a password';
    }

    $user_role = 2;
    $user_lastlogin = date('Y-m-d H:i:s');

	//$email_query = "SELECT * FROM  USERS WHERE user_email=? LIMIT 1";
	
	if (empty($errors)) { // If everything's OK.
	
	
		// Register the user in the database...
	
		
		if(!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)) {
			exit('Invalid email address'); 
		}
		$select = mysqli_query($dbc, "SELECT `user_email` FROM `USERS` WHERE `user_email` = '".$_POST['user_email']."'") or exit(mysqli_error($dbc));
		if(mysqli_num_rows($select)) {
			exit('This email is already being used');
			
		}
		
		//Make the query:
		// $q = "INSERT INTO USERS (user_name, user_email, user_password) VALUES ('$user_name', '$user_email','$user_password')";
        $q = "INSERT INTO USERS (user_name, user_email, user_password, user_role, user_lastlogin) 
    VALUES ('$user_name', '$user_email', '$user_password', '$user_role', '$user_lastlogin')";
		$r = @mysqli_query($dbc, $q); // Run the query.
		
		
		if ($r) { // If it ran OK.
			// Print a message:

			echo '<h2>REGISTRATION SUCCESS</h2>';
            header('Location: menu.php');
		} else { // If it did not run OK.
			// Public message:
			echo '<h1>System Error</h1>
			<p class="error">You could not be registered due to a system error. We apologize for any inconvenience.</p>';
            echo $q;
		} // End of if ($r) IF.

		mysqli_close($dbc); // Close the database connection.
		// Include the footer and quit the script:
		include('includes/footer.html');
		exit();
	} else { // Report the errors.
        echo "<div class='errorscreen'>";
		echo '<h2>Error!</h2>
		<p class="error">The following error(s) occurred:<br>';
		foreach ($errors as $msg) { // Print each error.
			echo " - $msg<br>\n";
		}
		echo '</p><p>Please try again.</p><p><br></p>';
        echo "</div>";

	} // End of if (empty($errors)) IF.

	mysqli_close($dbc); // Close the database connection.

} // End of the main Submit conditional.

?>

</section>


</main>
<?php include('includes/footer.php'); ?>
