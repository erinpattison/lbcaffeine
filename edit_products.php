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

<main class="admin_main">

<?php include('includes/adminmenu.php'); ?>

<section class="admin_section">

<!-- / // /// ////START [DELETE COMMENT WHEN DONE]//// /// // / -->
<?php

//fetch product ID

require('db.php');
if ( (isset($_GET['id'])) && (is_numeric($_GET['id'])) ) { // From inventory.php
  $id = $_GET['id'];

} 
elseif ( (isset($_POST['id'])) && (is_numeric($_POST['id'])) ) { // Form submission.
  $id = $_POST['id'];
} 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
// error verification goes here

    // print_r($_POST);

    //img check
    if(!empty($_FILES["image"]["name"])) { 
      // Get img file info 
      $fileName = basename($_FILES["image"]["name"]); 
      $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
      //allowed formats
      $allowed = array('jpg','png','jpeg','gif');
         //If valid type, define image for upload
         if(in_array($fileType, $allowed)){
             $image = $_FILES['image']['tmp_name']; 
             $product_img = addslashes(file_get_contents($image));           
             } 
          else {$errors[] = 'Error invalid image file type.';}
     } 
     


//upload sql goes here

  //field array [0]product_id [1]product_name [2]product_category [3]product_price [4]product_desc [5]product_cal [6]product_active [7]product_img
    $product_name = trim($_POST['product_name']);    
    $product_category = intval(trim($_POST['product_category']));
    $product_price = trim($_POST['product_price']);
    $product_desc = trim($_POST['product_desc']);
    $product_cal = trim($_POST['product_cal']);
    $product_active = intval(trim($_POST['product_active']));

    
     //query if valid image
     if (isset($product_img)){
        $update_query =
        "UPDATE PRODUCT
        SET product_name = '$product_name',
        product_category = '$product_category',
        product_price = '$product_price',
        product_desc = '$product_desc',
        product_cal = '$product_cal',
        product_active = '$product_active',
        product_img = '$product_img'
        WHERE product_id = '$id'
        LIMIT 1" ;
        }
     else //keeps current img data
        { $update_query =
            "UPDATE PRODUCT
            SET product_name = '$product_name',
            product_category = '$product_category',
            product_price = '$product_price',
            product_desc = '$product_desc',
            product_cal = '$product_cal',
            product_active = '$product_active'
            WHERE product_id = '$id'
            LIMIT 1" ;

        }


    // testing
    // echo $update_query;
    
    $update_result = mysqli_query($dbc, $update_query);
    
    
    if($update_result) {
        header("Location: inventory.php?msg=ok");
        exit;
    }
    else{
        echo "Update Failed.";
    }
    
    exit("$update_query");
}

//retrive product info
$q = "SELECT * FROM PRODUCT where product_id=$id";
$r = @mysqli_query($dbc, $q);

//retrieve category info
$cat_query = "SELECT * FROM CATEGORY";
$cat_result = mysqli_query($dbc, $cat_query);


if (mysqli_num_rows($r) == 1) { // Valid product ID, show the form.
  echo "<h2>Update product</h2>";
  // convert product info into array
  $row = mysqli_fetch_array($r, MYSQLI_NUM);
  //array [0]product_id [1]product_name [2]product_category [3]product_price [4]product_desc [5]product_cal [6]product_active [7]product_img
  // Create the form:
  echo '<form action="edit_products.php" method="post" enctype="multipart/form-data">
  <input type="hidden" name="id" value="' . $id . '">
   <p> Product Name: <input type="text" name="product_name"  value="' . $row[1] . '" required>
   <p>Category:
 <select type="text" name="product_category" value="' . $row[2] . '" >';
  while ($cat_row = mysqli_fetch_assoc($cat_result)) {
  echo "<option value='" . $cat_row['category_id'] . "'>" . $cat_row['category_name'] . "</option>";
  }
  echo "</select></p>";
  echo '<p>Product Price: <input type="number" step="0.01" name="product_price" value="' . $row[3] . '" ></p>
      <p>Calories (if applicable): <input type="number"  name="product_cal" value="' . $row[5] . '"> Cal</p>
      <p>Description: <br><textarea rows="5" cols="60" maxlength="160" name="product_desc" value="' . $row[4] . '">' . $row[4] . '</textarea></p>
      <p>Status:
        <select type="text" name="product_active" value="' . $row[6] . '" required>
        <option value=1 >Active</option>
        <option value=0>Inactive</option>
        </select></p>  
     <p>New Product Image: <input type="file" name="image" ></p>


        <p><input type="submit" value="submit"></p>
 </form>';

} 
else { // Not a valid  ID.
    echo '<p class="error">This page has been accessed in error.</p>';
}

?>

</section>

<?php include('includes/slogan.php'); ?>
</main>


<?php// mysqli_close($dbc); ?>