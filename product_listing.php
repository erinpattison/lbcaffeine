<?php 
session_start();
if(isset($_SESSION['user_id'])){
  require('inc_header_session.php');
} else {
  require('inc_header_public.php');
}
require('db.php');

?>
<style>
    main{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
    }
    .listing_image{ 
        max-width: 30vw;
        height: 30vw;
        /* border: 3px solid #0a0a0a; */
        margin: 5rem;
    }
    #product_image{
        width: 100%;
    }

    .listing_info{
        width: 45vw;
        margin: 5rem;
        padding: 1rem;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        /* border: 3px solid #0a0a0a; */
    }

    .listing_info h2{
        text-align: center;
    }
    .bottom_row{
        margin: 2rem auto;
        width: 75%;
        display: flex;
        justify-content: space-between;
        font-size: 2rem;
    }
    .bottom_row button{
        background-color: #FF206e;
        height: 3rem;
        width: 30rem;
        cursor: pointer;
    }
    .notif{
        text-align: center;
    }
    @media only screen and (max-width:1330px){
        .listing_image, .listing_info{
            margin: 2rem auto;
        }
    }

    @media only screen and (max-width: 950px){
        main{
            flex-direction: column;
        }

        .listing_info{
            width: 99vw;
        }

        .listing_image{
            max-width: 85vw;
            height: 70vw;
        }
        .bottom_row{
            flex-direction: column;
            text-align: center;
            padding: 1rem;
        }
    }
</style>
<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){

//check if user is logged in
    if(isset($_SESSION['user_id'])){
    //define variables 
    $favorite_user = intval(trim($_POST['favorite_user'])); 
    $favorite_product  = intval(trim($_POST['favorite_product']));

    //check if favorite already exists
    $q1 = "SELECT * FROM FAVORITE WHERE favorite_user = '$favorite_user' AND favorite_product = '$favorite_product'";
    $r1 = @mysqli_query($dbc, $q1); 
        if(mysqli_num_rows($r1) > 0){
            //favorite already exists, output a message or whatever
            echo '<p class="notif">You already added this product to your favorites.'; 
        } else {
            //run insert statement
            $q2 = "INSERT INTO FAVORITE (favorite_user, favorite_product) VALUES ('$favorite_user', '$favorite_product')";
            $r2 = @mysqli_query($dbc, $q2); 
            if ($r2){
                //if successful
                echo '<h2 class="notif">Product added to your favorites.</h2>'; 
                }
        }
    }
else {
    echo '<p class="notif">Please <strong><a href="index.php#loginform">sign in or register</a></strong> if you want to add favorites.'; 
}

}
?>
<?php
$id = $_GET['id'];

$q = "SELECT * FROM PRODUCT WHERE product_active = 1 AND product_id = $id";
$r = @mysqli_query($dbc, $q);

while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
    echo '<main>';

    echo '<section class="listing_image">'; 
    echo '<img id="product_image" src="data:image/jpeg;base64,'.base64_encode($row['product_img']).'"/>';
  
    echo '</section>';
    echo '<section class="listing_info">';
    echo '<h2>' . $row['product_name'] . '</h2>';
    echo '<p>' . $row['product_desc'] . '</p>';
    echo '<div class="bottom_row">';
    echo '<p><strong><span class="pink">' . $row['product_price'] . '</span></strong></p>';
    
    
    echo ' <form action="product_listing.php?id=' . $id . '" method="POST">
        <input type="hidden" name="favorite_user" value="'. intval(trim($_SESSION['user_id'])) . '">
        <input type="hidden" name="favorite_product" value="' . $id . '">
    <p><button class="favorite">Add to Favorites</button></p>
    </form>';

    echo '</div>';
    echo '</section>';
    echo '</main>';
}


mysqli_free_result($r);

  ?>

  <?php include('includes/slogan.php'); ?>
  <?php include('includes/footer.php'); ?>