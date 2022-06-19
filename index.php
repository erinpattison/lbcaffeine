<?php 
session_start();
if(isset($_SESSION['user_id'])){
  require('inc_header_session.php');
} else {
  require('inc_header_public.php');
}
?>

<style>
   .login_main{
  min-height: 100vh;
  display: flex;
  flex-direction: row;
  justify-content: center;
  flex-wrap: wrap;
  margin-top: 1.5rem;
}
  .login_aside{
  width: 35vw;
  padding: 2rem;
  margin: 1rem;
  min-height: 70vh;
  max-height: 70vh;
  border: 5px solid #0a0a0a;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

@media only screen and (max-width: 850px){
 .login_aside{
   width: 90vw;
   margin: 1rem auto;
 }
 .login_aside form{
   text-align: center;
   margin: 0rem auto;
 }
 .featured{
   width: 90vw;
 }
 .carousel{
   width: 100%;
 } 
}
  </style>

<!-- HERO IMAGE -->
<?php 
$text = "<h1>Welcome to <span class='pink'>LBC</span>AFFEINE</h1>";
include('includes/hero.php'); ?>
<div class="clear"></div>

<main class="login_main">

    <aside class="login_aside">
      <?php include('includes/loginform.php') ?>
       
    </aside>

    <?php include('includes/carousel.php'); ?>
 
    <?php include('includes/slogan.php'); ?>
</main>

<?php include('includes/footer.php') ?>

</body>
</html>