
<?php 
session_start();
if(isset($_SESSION['user_id'])){
  require('inc_header_session.php');
} else {
  require('inc_header_public.php');
}
?>

<style>
  .admin_menu{
  min-width: 15%;
  max-width: 20%;
  height: 75vh;
  max-height: 100%;
  float: left;
  background-color: #dcdcdc;
  margin: 0;
}

.admin_menu ul{
  list-style: none;
}

.admin_menu ul li{
  margin: 2rem auto;
  padding: 2rem;
  display: block;
}
.admin_menu li:hover{
  background-color: #ccc;
}
  </style>

<?php if($_SESSION['user_role'] != 1){
  header("Location: error.php");
}
?>

<div class="admin_hero">
<!--Udated $_SESSION['username'] to $_SESSION['user_name'] to match database -chris 11-18-->
<h1><?php echo "<p>Hello " . $_SESSION['user_name'] . "</p>"; ?></h1>
</div>

<?php include('includes/addproduct.php') ?>
<main class="admin_main">

<?php include('includes/adminmenu.php'); ?>

<?php     require('db.php');
   $cat_query = "SELECT * FROM CATEGORY";
   $cat_result = mysqli_query($dbc, $cat_query);
   ?>

<section class="admin_section">
<!----Form updated to be sticky (couldnt get <select> sticky)-chris 11-18---->
<form action="admin.php" method="post" id="product_form" enctype="multipart/form-data"> 
  <h2>Add A Product</h2>
  <input type="hidden" name="product_id">
  <p> Product Name: <input type="text" name="product_name" placeholder="Product Name" value="<?php if (isset($_POST['product_name'])) echo $_POST['product_name']; ?>"></p>
  <p>Category:
  <?php 
   echo "<select type='text' name='product_category' required>";
   while ($cat_row = mysqli_fetch_assoc($cat_result)) {
    echo "<option value='" . $cat_row['category_id'] . "'>" . $cat_row['category_name'] . "</option>";
    }
    echo "</select>";
?> </p>
    <p>Product Price: <input type="number" step='0.01' name="product_price" placeholder="ex. 5.99" value="<?php if (isset($_POST['product_price'])) echo $_POST['product_price']; ?>"></p>
     <p>Calories (if applicable): <input type="number"  name="product_cal" placeholder="0" value="<?php if (isset($_POST['product_cal'])) echo $_POST['product_cal']; ?>"> Cal</p>
     <p>Description: <br><textarea rows="5" cols="60" name="product_desc" A smooth blend with rich notes and rich flavor, roasted on-location, and brewed fresh every day. Available in Dark, Medium and Light roast. Lorem Ipsum Dolor.
placeholder="Product Description" value="<?php if (isset($_POST['product_desc'])) echo $_POST['product_desc']; ?>">Product Description</textarea></p>
     <p>Product Status:
    <select type="text" name="product_active"  required>
    <option value=1>Active</option>
     <option value=0>Inactive</option></p>
   </select>
     <p>Product Image: <input type="file" name="image"></p>
     <p><input type="submit" value="submit"></p>
</form>

</section>
</main>

<?php include('includes/slogan.php');?>
<?php include('includes/footer.php') ?>