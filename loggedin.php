<?php # Script 12.9 - loggedin.php #2
// The user is redirected here from login.php.
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start(); // Start the session.
require('db.php');
// If no session value is present, redirect the user:
if (!isset($_SESSION['user_id'])) {

	// Need the functions:
	require('login_functions.php');
	redirect_user();

}

$user_id = $_SESSION['user_id'];
$user_name = $_SESSION['user_name'];
$user_email = $_SESSION['user_email'];
$user_role = $_SESSION['user_role'];

// Set the page title and include the HTML header:
$page_title = 'Logged In!';
include('inc_header_session.php');
?>

<style>
	main{
        display: flex;
        margin: 2rem auto;
        
    }
    .account_menu{
        background-image: url("https://images.pexels.com/photos/2193600/pexels-photo-2193600.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
        background-repeat: no-repeat;
        height: 85vh;
        width: 30vw;
        /* position: fixed; */
        /* top: 13vh; */
        /* left: 0; */
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        color: #fff;
    }
    .account_menu h2{
        font-size: 4rem;
        letter-spacing: 1.5px;
        text-shadow: 1px 1px #000, -1px -1px #000, -1px 1px #000, 1px -1px #000, 0 1px #000, 0 -1px #000, 1px 0 #000, -1px 0 #000;
    }
    .account_menu ul{
        list-style: none;
    }
    .account_menu a{
        color: #fff;
        text-decoration: none;
        font-size: 3rem;
        letter-spacing: 1.5px;
        text-shadow: 1px 1px #000, -1px -1px #000, -1px 1px #000, 1px -1px #000, 0 1px #000, 0 -1px #000, 1px 0 #000, -1px 0 #000;
    }
    .account_menu a:hover{
        color: #FF206e;
    }
    .account_page{
        height: 85vh;
        overflow-y: scroll;
        width: 68vw;
        padding: 1rem;
    }
    .account_page h2{
        text-align: left;
    }
    .account_sections{
        height: 100%;
    }
    
    .section h2{
        text-align: center;
    }
    
    .recommended{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        margin: 0 auto;
    }
    .recommended h2{
        text-align: left;
    }
    
    .menu_item{
        width: 25%;
        display: inline-block;
        vertical-align: top;
        margin: 1rem auto;
    }

    .image_container{
        max-width: 100%;
    }
    .menu_image{
        width: 100%;
    }

    .accountinfo{
        padding: 2rem;
    }
    .accountinfo h2{
        text-align: center;
    }

    @media only screen and (max-width: 1000px){
        main{
            flex-direction: column;
            height: auto;
        }
        .account_menu{
            width: 100vw;
            max-height: 50vh;
            justify-content: center;
        }
        .account_menu h2{
            font-size: 5rem;
        }
        .account_menu h3 a{
            font-size: 2rem;
            margin: 1rem;
        }

        .account_menu ul{
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            width: 100vw;
            margin: 0rem auto;
        }
        .account_page{
            width: 100vw;
            height: auto;
        }
        .recommended{
            display: flex;
            justify-content: center;
            align-items: center;
        }
    }
	</style>
<body>

<main>
<section class="account_menu">
 <h2><?php echo "Hello " . $_SESSION['user_name'] . "!"; ?></h2>
 <ul>
     <li><h3><a href="#accountinfo">Account</a></h3></li>
     <li><h3><a href="#favorites">Favorites</a></h3></li>
     <!-- <li><h3><a href="">Reviews</a></h3></li> -->
	 <li><h3><a href="logout.php">LOGOUT</a></h3></li>
     <?php if($user_role == 1){
         echo '<li><h3><a href="admin.php">ADMIN</a></li></h3>';
     }?>
</ul>
</section>

<article class="account_page">

<section class="recommended section">
<h2>Recommended for you</h2>    

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
  <p><strong><span class="pink">' . $row['product_price'] . '</strong></span></p>
  </div></a>';
}

 echo '</ul>';
mysqli_free_result($r);
// mysqli_close($dbc);
  ?>
</section>


<section id="favorites" class="favorites section">
<h2>Your Favorites</h2>

<?php
$user_id = $_SESSION['user_id'];
$q = "SELECT favorite_user, product_id, product_name, category_name, product_price, product_desc, product_img FROM FAVORITE
LEFT JOIN PRODUCT ON favorite_product=product_id
LEFT JOIN CATEGORY on product_category=category_id
WHERE favorite_user = '$user_id'
AND product_active = 1";  
$r = @mysqli_query($dbc, $q);

echo '<ul>';?>

<?php while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {?>
  
	<?php echo '<a href="product_listing.php?id=' . $row['product_id'] . '">';?>
  <?php echo '<div class="menu_item">'; ?>

  <?php //echo '<img class="menu_image" src="images/coffeemug.png">'; 
  echo '<div class="image_container"><img class="menu_image" src="data:image/jpeg;base64,'.base64_encode($row['product_img']).'"/></div>';
  
  ?>
  
  <?php echo '<p><strong>' . $row['product_name'] . '</strong></p> 
  <p><strong><span class="pink">' . $row['product_price'] . '</strong></span></p>
  </div></a>';
}

echo '</ul>';
mysqli_free_result($r);
// mysqli_close($dbc);
  ?>

</section>
<section class="accountinfo section">
    <h2 id="accountinfo">Account Info</h2>
    <?php 
    echo '<p><strong> User Name: </strong>' . $user_name . '</p>';
    echo '<p><strong> User ID: </strong>' . $user_id . '</p>';
    echo '<p><strong>User Email: </strong>' . $user_email . '</p>';
    echo '<p><strong> User Role: </strong>' . $user_role . '</p>';
    ?>
    
</section>
</article>
</main>

<?php include('includes/footer.php'); ?>