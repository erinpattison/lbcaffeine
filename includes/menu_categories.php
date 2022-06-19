<?php 
$q = "SELECT * FROM CATEGORY";
$r = @mysqli_query($dbc, $q);


echo '<ul>';

// Fetch and print all the records....

while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {

	echo '<li><h2 class="category_h2"><a href="">' . $row['category_name'] . ' </a></h2></li>';
} // End of WHILE loop.

echo '</ul>';

mysqli_free_result($r);
// mysqli_close($dbc);
  ?>