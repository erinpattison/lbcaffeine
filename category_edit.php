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
<?php
//fetch ID

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

//upload sql goes here
     
  //field array [0]category_id [1]category_name [2]category_desc
    $category_name= trim($_POST['category_name']);    
    $category_desc = trim($_POST['category_desc']);
      
        $update_query =
        "UPDATE CATEGORY
        SET category_name = '$category_name',
        category_desc = '$category_desc'
        WHERE category_id = '$id'
        LIMIT 1" ;
    
    // testing
    // echo $update_query;
    
    $update_result = mysqli_query($dbc, $update_query);
    
    
    if($update_result) {
        header("Location: category.php?msg=ok");
        exit;
    }
    else{
        echo "Update Failed.";
    }
    
    exit("$update_query");
}

//retrive category info



$q = "SELECT * FROM CATEGORY where category_id=$id";
$r = @mysqli_query($dbc, $q);


if (mysqli_num_rows($r) == 1) { // Valid category ID, show the form.
  echo "<h2>Update Category</h2>";
  // convert category info into array
  $row = mysqli_fetch_array($r, MYSQLI_NUM);
  //array [0]category_id [1]category_name [2]category_desc
  // Create the form:
  echo '<form action="category_edit.php" method="post" >
  <input type="hidden" name="id" value="' . $id . '">
   <p> Category Name: <input type="text" name="category_name"  value="' . $row[1] . '" required>
     <p>Description: <br><textarea rows="5" cols="60" name="category_desc" value="' . $row[2] . '">' . $row[2] . '</textarea></p>
  </p>  
      <p><input type="submit" value="submit"></p>
 </form>';

} 
else { // Not a valid  ID.
    echo '<p class="error">This page has been accessed in error.</p>';
}

?>

</section>
</main>
<?php include('includes/footer.php');