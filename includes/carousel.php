<style>
  .featured{
  background-color: #0a0a0a;
  width: 60vw;
  height: 70vh;
  margin: 1rem;
}

.featured h2{
  text-align: center;
  color: #FF206e;
  letter-spacing: 2px;
}

.carousel{
  background-color: #FF206e;
  height: 70%;
  width: 80%;
  margin: 1rem auto;   
  overflow-x: scroll;
  scroll-snap-type: x mandatory;
  display: flex;
}
.carousel a{
  text-decoration: none;
}
.shop{
  scroll-snap-align: start;
}
.shop img{
  height: 95%;
  margin: 0.5rem;
  
}

.carousel /* width */
::-webkit-scrollbar {
  width: 5px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #dcdcdc;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: #888;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555;
}

@media only screen and (max-width: 850px){
  .featured{
    width: 90vw;
    margin: 2rem auto;
  }
}

@media only screen and (max-width: 500px){
  .shop{
    height: 100vw;
  }

  .shop img{
    height: 100vw;
    max-width: 100vw;
  }
}

  </style>

<section class="featured">
      <h2>FEATURED ITEMS</h2>
      
      <div class="carousel">
        
        <div class="shop">
          <img src="images/latte.jpeg">
        </div>
        
        <div class="shop">
          <img src="images/avocadotoast.jpeg">
        </div>
        
        <div class="shop">
          <img src="images/croissant.jpeg">
        </div>
        
        <div class="shop">
          <img src="images/icedcoffee.jpeg">
        </div>
        
        <div class="shop">
          <img src="images/mocha.jpeg">
        </div>
        
        <div class="shop">
          <img src="images/pourover.jpeg">
        </div>
        
      </div>
      <a href="menu.php"><H2>VIEW FULL MENU</H2></A>
    </section> 