<?php 
session_start();
if(isset($_SESSION['user_id'])){
  require('inc_header_session.php');
} else {
  require('inc_header_public.php');
}
?>
<style>
.menu_main{
  min-height: 100vh;
  width: 99vw;
  display: flex;
  flex-direction: column;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
}

.menu_section{
  width: 90vw;
  margin: 0 auto;
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
}

.menu_section a{
  text-decoration: none;
  color: #000;
}

.menu_section h2{
  text-align: center;
}

.menu_item{
  width: 20vw;
  height: 60vh;
  padding: 1rem;
  margin: 1rem;
  display: inline-block;
  overflow: hidden;
}

.menu_item:hover{
  transform: scale(1.01);
}

.image_container{
  width: 20vw;
  height: 20vw;
  display: flex;
  align-items: center;
  justify-content: center;
}
.image_container:hover{
  /* background-color: #FF206e; */
}

.menu_image{
  max-width: 100%;
  text-align: center;
}

.menu_categories{
  display: flex;
  height: 10vh;
  width: 100vw;
  justify-content: center;
}

.menu_categories ul{
  display: flex;
  justify-content: space-around;
  width: 80%;
  list-style: none;
}

.menu_categories ul li a{
  text-decoration: none;
  color: #000;
}

.menu_categories a:hover{
  color: #FF206e;
}

.menu_header{
  font-size: 5rem;
}

@media only screen and (max-width:800px){
  .menu_section{
  width: 99vw;
  padding: 1rem;
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
}
.menu_item{
  width: 40vw;
  min-height: 50vh;
  /* max-height: 65vh; */
  padding: 1rem;
  margin: 1rem;
  display: inline-block;
  overflow: hidden;
  vertical-align: top;
}
}
@media only screen and (max-width:550px){
  .menu_section{
  width: 99vw;
  padding: 1rem;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}
.menu_item{
  width: 80vw;
  height: auto;
  margin: 1rem auto;
  display: flex;
  flex-direction: column;
  justify-content: center;
  overflow: hidden;
}
.image_container{
  width: 60vw;
  height: 60vw;
  display: flex;
  align-items: center;
  justify-content: center;
}
}
  </style>
<?php require('db.php');?>

<?php 
$text = "<h1>MENU</h1>";
include('includes/hero.php'); ?>

<main class="menu_main">
  
  <div class="menu_categories">  
    <?php //include('includes/menu_categories.php'); ?>
  </div>
  <section class="menu_section">
    <?php include('includes/menu_items.php'); ?>
  </section>
</main>

<?php include('includes/slogan.php') ?>

<?php include('includes/footer.php') ?>