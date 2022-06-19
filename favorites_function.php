<?php

//define variables
$favorite_user = mysqli_real_escape_string($dbc, trim(['(however this session data is defined)']));
$favorite_product  = mysqli_real_escape_string($dbc, trim($_POST['favorite_product']));

//check if favorite already exists
$q1 = "SELECT * FROM FAVORITE WHERE favorite_user = '$favorite_user' AND favorite_product = '$favorite_product'";
$r1 = @mysqli_query($dbc, $q1); 
if(mysqli_num_rows($r1) > 0){
    //favorite already exists, output a message or whatever
} else {
    //run insert statement
    $q2 = "INSERT into FAVORITE (favorite_user, favorite_product) VALUES ('$favorite_user', '$favorite_product')";
    $r2 = @mysqli_query($dbc, $q2); 

}

?>