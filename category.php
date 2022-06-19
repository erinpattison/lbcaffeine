<?php require('db.php'); ?>
<?php 
session_start();
if(isset($_SESSION['user_id'])){
  require('inc_header_session.php');
} else {
  require('inc_header_public.php');
}
?>



<div class="admin_hero">
<h1><?php echo "<p>Hello, " . $_SESSION['user_name'] . "</p>"; ?></h1>
</div>

<?php //include('includes/mobilemenu.php'); ?>

<main class="inventory_main">

<?php include('includes/adminmenu.php')?>

<section class="inventory_section">
<?php 

// # records to display
$display = 18;

// Determine how many pages there are...
if (isset($_GET['p']) && is_numeric($_GET['p'])) { // Already been determined.

	$pages = $_GET['p'];

} else { // Need to determine.

	// Count the number of records:
	$q = "SELECT COUNT(category_id) FROM CATEGORY";
	$r = @mysqli_query($dbc, $q);
	$row = @mysqli_fetch_array($r, MYSQLI_NUM);
	$records = $row[0];

	// Calculate the number of pages...
	if ($records > $display) { // More than 1 page.
		$pages = ceil ($records/$display);
	} else {
		$pages = 1;
	}

} // End of p IF.

// Determine where in the database to start returning results...
if (isset($_GET['s']) && is_numeric($_GET['s'])) {
	$start = $_GET['s'];
} else {
	$start = 0;
}
// / // /// ////PUTTING SORTABLE TABLE SWITCH HERE//// /// // / //



// / // /// ////END TABLE SWITCH//// /// // / //

// Define the query:
$q = "SELECT * FROM CATEGORY ORDER BY category_id ASC LIMIT $start, $display";

$r = @mysqli_query($dbc, $q);

// Table header:
echo '<table id="inventory_table">
<thead>
<tr>
	<th align="left"><strong>ID</strong></th>
	<th align="left"><strong>CATEGORY</strong></th>
	<th align="left"><strong>DESCRIPTION</strong></th>
</tr>
</thead>
<tbody>
';

// Fetch and print all the records....

$bg = '#dcdcdc'; // Set the initial background color.

while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {

	$bg = ($bg=='#dcdcdc' ? '#ffffff' : '#dcdcdc'); // Switch the background color.

	echo '<tr bgcolor="' . $bg . '">
		<td align="left" data-column="Category ID"><a href="category_edit.php?id=' . $row['category_id'] . '">' . $row['category_id'] . ' </a></td>
		<td align="left" data-column="Category Name">' . $row['category_name'] . '</td>
        <td align="left" data-column="Description">' . $row['category_desc'] . '</td>
		
	</tr>';

} // End of WHILE loop.

echo '</tbody></table>';
mysqli_free_result($r);
mysqli_close($dbc);

// Make the links to other pages, if necessary.
if ($pages > 1) {

	// Add some spacing and start a paragraph:
	echo '<br><p>';

	// Determine what page the script is on:
	$current_page = ($start/$display) + 1;

	// If it's not the first page, make a Previous link:
	if ($current_page != 1) {

		echo '<a href="category.php?s=' . ($start - $display) . '&p=' . $pages . '">Previous</a> ';
	}

	// Make all the numbered pages:
	for ($i = 1; $i <= $pages; $i++) {
		if ($i != $current_page) {
			echo '<a href="category.php?s=' . (($display * ($i - 1))) . '&p=' . $pages . '">' . $i . '</a> ';
		} else {
			echo $i . ' ';
		}
	} // End of FOR loop.

	// If it's not the last page, make a Next button:
	if ($current_page != $pages) {
		echo '<a href="category.php?s=' . ($start + $display) . '&p=' . $pages . '">Next</a>';
	}

	echo '</p>'; // Close the paragraph.

} // End of links section.
?>
</section>

<?php include('includes/slogan.php'); ?>
</main>

<?php
include('includes/footer.php');
?>