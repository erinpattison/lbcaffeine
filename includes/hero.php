<style>
.main_hero{
  display: flex;
  background-image: url("https://images.pexels.com/photos/2193600/pexels-photo-2193600.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
  height: 50vh;
  background-repeat: norepeat;
  background-position: bottom;
  background-attachment: fixed;
  background-size: cover;
  justify-content: center;
  align-items: center;
  height: 50vh;
  width: 100vw;
  background-color: #dcdcdc;
  border-top: 1rem solid #0a0a0a;
  border-bottom: 1rem solid #0a0a0a;
  color: #fff;
}

.main_hero h1{
  font-size: 6rem;
  letter-spacing: 2px;
  text-shadow: 1px 1px #000, -1px -1px #000, -1px 1px #000, 1px -1px #000, 0 1px #000, 0 -1px #000, 1px 0 #000, -1px 0 #000;
}

@media only screen and (max-width: 500px){
  .main_hero h1{
    text-align: center;
  }
}
  </style>

<div class="main_hero">
<?php echo $text; ?>
  <!-- <h1>Welcome to <span class="pink">LBC</span>AFFEINE</h1> -->
</div>