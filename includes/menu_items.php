<section class="category">
<h2>HOT DRINKS</h2>

<?php 
$q = "SELECT * FROM PRODUCT WHERE product_active = 1 AND product_category = 1";
$r = @mysqli_query($dbc, $q);



echo '<ul>';?>

<?php while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {?>
  
	<?php echo '<a href="product_listing.php?id=' . $row['product_id'] . '">';?>
  <?php echo '<div class="menu_item">'; ?>

  <?php //echo '<img class="menu_image" src="images/coffeemug.png">'; 
  echo '<div class="image_container"><img class="menu_image" src="data:image/jpeg;base64,'.base64_encode($row['product_img']).'"/></div>';
  
  ?>
  
  <?php echo '<p><strong>' . $row['product_name'] . '</strong></p> 
  <p><strong><span class="pink">' . $row['product_price'] . '</span></strong></p> 
  <p>' . $row['product_desc'] . '</p>
  </div></a>';
}

 echo '</ul>';
mysqli_free_result($r);
// mysqli_close($dbc);
  ?>
</section>

<section class="category">
<H2>COLD DRINKS</H2>

<?php 
$q = "SELECT * FROM PRODUCT WHERE product_active = 1 AND product_category = 2";
$r = @mysqli_query($dbc, $q);



echo '<ul>';?>

<?php while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {?>
  
	<?php echo '<a href="product_listing.php?id=' . $row['product_id'] . '">';?>
  <?php echo '<div class="menu_item">'; ?>

  <?php //echo '<img class="menu_image" src="images/coffeemug.png">'; 
  echo '<div class="image_container"><img class="menu_image" src="data:image/jpeg;base64,'.base64_encode($row['product_img']).'"/></div>';
  
  ?>
  
  <?php echo '<p><strong>' . $row['product_name'] . '</strong></p> 
  <p><strong><span class="pink">' . $row['product_price'] . '</span></strong></p> 
  <p>' . $row['product_desc'] . '</p>
  </div></a>';
}

 echo '</ul>';
mysqli_free_result($r);
// mysqli_close($dbc);
  ?>
</section>

<section class="category">
<H2>BISTRO</H2>

<?php 
$q = "SELECT * FROM PRODUCT WHERE product_active = 1 AND product_category = 3";
$r = @mysqli_query($dbc, $q);



echo '<ul>';?>

<?php while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {?>
  
	<?php echo '<a href="product_listing.php?id=' . $row['product_id'] . '">';?>
  <?php echo '<div class="menu_item">'; ?>

  <?php //echo '<img class="menu_image" src="images/coffeemug.png">'; 
  echo '<div class="image_container"><img class="menu_image" src="data:image/jpeg;base64,'.base64_encode($row['product_img']).'"/></div>';
  
  ?>
  
  <?php echo '<p><strong>' . $row['product_name'] . '</strong></p> 
  <p><strong><span class="pink">' . $row['product_price'] . '</span></strong></p> 
  <p>' . $row['product_desc'] . '</p>
  </div></a>';
}

 echo '</ul>';
mysqli_free_result($r);
// mysqli_close($dbc);
  ?>
</section>


<section class="category">
<H2>BAKERY and GRAB & GO</H2>

<?php 
$q = "SELECT * FROM PRODUCT WHERE product_active = 1 AND product_category = 4";
$r = @mysqli_query($dbc, $q);



echo '<ul>';?>

<?php while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {?>
  
  <?php echo '<a href="product_listing.php?id=' . $row['product_id'] . '">';?>
  <?php echo '<div class="menu_item">'; ?>

  <?php //echo '<img class="menu_image" src="images/coffeemug.png">'; 
  echo '<div class="image_container"><img class="menu_image" src="data:image/jpeg;base64,'.base64_encode($row['product_img']).'"/></div>';
  
  ?>
  
  <?php echo '<p><strong>' . $row['product_name'] . '</strong></p> 
  <p><strong><span class="pink">' . $row['product_price'] . '</span></strong></p> 
  <p>' . $row['product_desc'] . '</p>
  </div></a>';
}

 echo '</ul>';
mysqli_free_result($r);
// mysqli_close($dbc);
  ?>
  </section>

  <section class="category">
  <H2>DRY GOODS AND MERCHANDISE</H2>

<?php 
$q = "SELECT * FROM PRODUCT WHERE product_active = 1 AND product_category = 5";
$r = @mysqli_query($dbc, $q);



echo '<ul>';?>

<?php while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {?>
  
	<?php echo '<a href="product_listing.php?id=' . $row['product_id'] . '">';?>
  <?php echo '<div class="menu_item">'; ?>

  <?php //echo '<img class="menu_image" src="images/coffeemug.png">'; 
  echo '<div class="image_container"><img class="menu_image" src="data:image/jpeg;base64,'.base64_encode($row['product_img']).'"/></div>';
  
  ?>
  
  <?php echo '<p><strong>' . $row['product_name'] . '</strong></p> 
  <p><strong><span class="pink">' . $row['product_price'] . '</span></strong></p> 
  <p>' . $row['product_desc'] . '</p>
  </div></a>';
}

 echo '</ul>';
mysqli_free_result($r);
// mysqli_close($dbc);
  ?>
  </section>


