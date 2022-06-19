<?php 
session_start();
if(isset($_SESSION['user_id'])){
  require('inc_header_session.php');
} else {
  require('inc_header_public.php');
}
?>

<div class="admin_hero">
<!--Udated $_SESSION['username'] to $_SESSION['user_name'] to match database -chris 11-18-->
<h1><?php echo "<p>Hello, " . $_SESSION['user_name'] . "</p>"; ?></h1>
</div>
<?php include('includes/addproduct.php') ?>
<main class="admin_main">

<?php //include('includes/mobilemenu.php'); ?>
<?php include('includes/adminmenu.php'); ?>

<section class="admin_section">

<?php
// Check for form submission:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	require('db.php'); // Connect to the db.

	$errors = []; // Initialize an error array.

	// Check for department name:
	if (empty($_POST['category_name'])) {
		$errors[] = 'Please name the category.';
	} else {
		$cn = mysqli_real_escape_string($dbc, trim($_POST['category_name']));
	}

	// Check for a employee num:
	if (empty($_POST['category_desc'])) {
		$errors[] = 'Please describe the category';
     } else {
		$cd = mysqli_real_escape_string($dbc, trim($_POST['category_desc']));
	}


	if (empty($errors)) { // If everything's OK.

		// Register the user in the database...

		// Make the query:
		$q = "INSERT INTO CATEGORY (category_name, category_desc) VALUES ('$cn', '$cd')";

        //encryption broken SHA2('$p', 512)
		$r = @mysqli_query($dbc, $q); // Run the query.  
		if ($r) { // If it ran OK.

			// Print a message:
            header("Location: category.php?msg=ok");

    } else { // If it did not run OK.

        // Public message:
        echo '<h1>System Error</h1>
        <p class="error">You could not be registered due to a system error. We apologize for any inconvenience.</p>';

        // Debugging message:
        echo '<p>' . mysqli_error($dbc) . '<br><br>Query: ' . $q . '</p>';

    } // End of if ($r) IF.

    mysqli_close($dbc); // Close the database connection.

    // Include the footer and quit the script:
    include('includes/footer.html');
    exit();

} else { // Report the errors.

    echo '<h1>Error!</h1>
    <p class="error">The following error(s) occurred:<br>';
    foreach ($errors as $msg) { // Print each error.
        echo " - $msg<br>\n";
    }
    echo '</p><p>Please try again.</p><p><br></p>';

} // End of if (empty($errors)) IF.

mysqli_close($dbc); // Close the database connection.

} // End of the main Submit conditional.
?>


<form action="category_add.php" method="post">
<h2>Register Category</h2>
	<p>Category Name: <input type="text" name="category_name" size="15" maxlength="30" value="<?php if (isset($_POST['category_name'])) echo $_POST['category_name']; ?>"></p>
    <p>Description: <br><textarea rows="5" cols="60" name="category_desc" placeholder="Category Description" value="<?php if (isset($_POST['category_desc'])) echo $_POST['category_desc']; ?>">Category Description</textarea></p>
	<p><input type="submit" name="submit" value="Add"></p>
</form>

</main>
</section>
<?php include('includes/footer.php'); ?>