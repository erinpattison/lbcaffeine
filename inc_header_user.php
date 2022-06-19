<!DOCTYPE html>
<html>
    <head>
        <title><?php $page_title ?></title>
        <link rel="stylesheet" href="stylesheets/styles.css">
        <link rel="stylesheet" href="stylesheets/responsivestyles.css">
        <meta name="viewport" content="width=device-width,initial-scale=1">
    </head>
    <body>
    <header>
  <div class="left">
  <a id ="home_button" href="index.php"><img src="images/coffeebean.png"></a>
  <h1><span class="pink">LBC</span><span class="color">AFFEINE</span></h1>
  </div>
    <?php
        // check that session exists or kick them out
        session_start();
         // debugging to dump session variables on page - print_r($_SESSION);
         
        if (isset($_SESSION['user_id']) == 2) { //admin access

        // show navigation menu
            echo "<nav class='right'>
                <a href='index.php'>Home</a>  
                <a href='user_account.php'>Account</a>  
                <a href='logout.php'>Logout</a>
                </nav>";
        } else {
            // no session - kick them out.
            echo "<p>Sorry, you do not have permission to access this page.</p>";
            header("Location:login.php");
            exit();
        }
    ?>
    </header>
    
  
    <!-- <body> 
    

 
    </header>-->