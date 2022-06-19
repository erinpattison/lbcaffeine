
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') { //this checks that the form was submitted using the POST method


require('db.php'); // connect to the db TESTED- SUCCESS

$errors = []; // Initialize an error array.

// Check for product name:
if (empty($_POST['product_name'])) {
    $errors[] = 'Please add a Product Name';
} else { 
    $product_name = mysqli_real_escape_string($dbc, trim($_POST['product_name'])); 
}

// Check for product category:
if (empty($_POST['product_category'])) {
    $errors[] = 'Please select a product category';
} else {
    $product_category = mysqli_real_escape_string($dbc, trim($_POST['product_category']));
}

// Check for an email address:
if (empty($_POST['product_price'])) {
    $errors[] = 'Please enter the product price';
} else {
    $product_price = mysqli_real_escape_string($dbc, trim($_POST['product_price']));
}

// Can be null
  $product_cal = mysqli_real_escape_string($dbc, trim($_POST['product_cal']));
  $product_desc = mysqli_real_escape_string($dbc, trim($_POST['product_desc']));
  $product_active = mysqli_real_escape_string($dbc, trim($_POST['product_active']));

// include('includes/process_upload.php');
 // If IMG is attached
 if(!empty($_FILES["image"]["name"])) { 
 // Get img file info 
 $fileName = basename($_FILES["image"]["name"]); 
 $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
 //allowed formats
 $allowed = array('jpg','png','jpeg','gif');
    //If valid type, define image for upload
    if(in_array($fileType, $allowed)){
        $image = $_FILES['image']['tmp_name'];
        // $image = $fileName; 
        $product_img = addslashes(file_get_contents($image));           
        } 
     else {$errors[] = 'Error invalid image file type.';}
     } 
else {$product_img = null;
}

    if (empty($errors)) { // If everything's OK.
   
    // Make the query:
    $q = "INSERT INTO PRODUCT (product_name, product_category, product_price, product_desc, product_cal, product_active, product_img) 
    VALUES ('$product_name', '$product_category', '$product_price', '$product_desc', '$product_cal', '$product_active', '$product_img')";
    $r = @mysqli_query($dbc, $q); // Run the query.

    if ($r) { // If it ran OK.
        // Print a message:    
        echo 'Product succesfully added to inventory.';
        header('Location: inventory.php');
    } else { // If it did not run OK.
        // Public message:
        echo '<strong>Error</strong>: Product could not be added to inventory. Please try again.';
        echo $q;
        
    } // End of if ($r) IF.

    mysqli_close($dbc); // Close the database connection.
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