<!DOCTYPE html>
<html>
    <head>
        <title>LBCAFFEINE CASE STUDY</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">

        <style>
@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat&display=swap');

/* 
font-family: 'Bebas Neue', sans-serif;
font-family: 'Montserrat', sans-serif;
*/

*{
  box-sizing: border-box;
}
html{
  font-size: 10px;
}
body{
  margin: 0;
  padding: 0;
  font-size: 1.6rem;
  font-family: 'Montserrat', sans-serif;
  background-color: #dcdcdc;
}
h1, h2, h3, h4{
  font-family: 'Bebas Neue', sans-serif;
}
h1{
  font-size: 4rem;
  margin: 0;
}
h2{
  font-size: 3rem;
  margin: 0;
}
h3{
  font-size: 2rem;
  margin: 0;
}
h4{
  font-size: 1.6rem;
  margin: 0;
}

/* / // ///HEADER & NAV/// // / */

header{
  padding: 2rem;
  text-align: center;
  height: 15vh;
  display: flex;
  justify-content: center;
  align-items: center;
}

nav{
  width: 100vw;
  position: sticky;
  top: 0;
  background-color: #ff206e;
  padding: 1px;
  max-height: 10vh;
}

nav ul{
  list-style: none;
  width: 100%;
  display: flex;
  flex-direction: row;
  justify-content: space-around;
}

nav a{
  text-decoration: none;
  color: #000;
}
nav a:hover{
  text-decoration: underline;
}

/* / // ///THE PROJECT/// // / */
#theproject{
  padding: 2rem;
  background-color: #0a0a0a;
  height: 80vh;
  border-bottom: 5px solid #ff206e;
}

#theproject h2{
  font-size: 5rem;
  text-align: right;
  color: #dcdcdc;
  letter-spacing: 2px;
}

.projectbody{
  display: flex;
  flex-direction: column;
  width: 100%;
  justify-content: center;
  align-items: center;
}

.projectdesc{
  color: #dcdcdc;
  text-align: center;
  font-size: 2rem;
}

.projectparameters{
  width: 80%;
  margin: 2rem auto;
  padding: 1rem;
  border: 3px solid #dcdcdc;
  background-color: rgba(255, 255, 255, 0.5);
}

/* / // ///THE TEAM/// // / */
#theteam{
  padding: 2rem;
  background-color: #0a0a0a;
  min-height: 50vh;
  border-bottom: 5px solid #ff206e;
}

#theteam h2{
  font-size: 5rem;
  color: #dcdcdc;
  letter-spacing: 2px;
}

.teambody{
  display: flex;
  flex-direction: row;
/*   justify-content: space-evenly; */
}

.teammember{
  width: 50vw;
  height: 30vh;
  background-color: rgba(255, 255, 255, 0.5);
  margin: 2rem;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  padding: 1rem;
  border: 5px solid #dcdcdc;
}
.teammember h3{
  font-size: 3rem;
}

/* / // ///PROJECT SETUP/// // / */
#projectsetup{
  padding: 2rem;
  background-color: #0a0a0a;
  min-height: 80vh;
  border-bottom: 5px solid #ff206e;
}

#projectsetup h2{
  font-size: 5rem;
  text-align: right;
  color: #dcdcdc;
  letter-spacing: 2px;
}

.setupintro{
  color: #dcdcdc;
  text-align: center;
  margin: 2rem;
  font-size: 2rem;
}

.backend{
  display: flex;
  flex-direction: column;
  margin: 5rem 0;
  width: 99vw;
}

.backend h3{
  color: #dcdcdc;
  font-size: 2.5rem;
  letter-spacing: 1.5px;
}

.backend p{
  color: #dcdcdc;
}
.tables{
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
}
.table{
  background-color: rgba(255, 255, 255, 0.5);
  border: 3px solid #dcdcdc;
  width: 40vw;
  padding: 1rem;
  height: 85vh;
  margin: 1rem;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.table h3{
  text-align: center;
  font-size: 3rem;
  letter-spacing: 2px;
}

#databasemodel{
  text-align: center;
  margin: 3rem auto;
}

/* / // /// FRONT END /// // / */
.frontend{
  margin-top: 10rem;
  width: 99vw;

}


.frontend h3{
  color: #dcdcdc;
  font-size: 2.5rem;
  letter-spacing: 1.5px;
}

.frontend p,{
  color: #dcdcdc;
}
.frontendbody{
    display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

#sitemap, #styleguide{
  margin: 5rem auto;
  width: 80%;
}

.desktop{
  width: 80vw;
  margin: 2rem;
}

.mobilelanding{
  display: flex;
  flex-direction: row;
}

.mobile{
  max-width: 30vw;
  margin: 1rem;
}
/* / // ///SITE FEATURES/// // / */

#sitefeatures{
  background-color: #0a0a0a;
  padding: 2rem;
}

#sitefeatures h2{
   font-size: 5rem;
  color: #dcdcdc;
  letter-spacing: 2px;
}

.loginsystem{
  display: flex;
  flex-direction: row;
  
}

.logindesc, .loginimg{
  width: 45vw;
  margin: 1rem;
}
#loginform{
  width: 100%;
}
.logindesc{
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background-color: rgba(255, 255, 255, 0.5);
  border: 3px solid #dcdcdc;
  padding: 2rem;
}

.logindesc h3{
  color: #dcdcdc;
  font-size: 3rem;
  letter-spacing: 2px;
}
.pageheader{
  width: 95%;
  margin: 2rem auto;
}

#adminpagesh3{
  color: #dcdcdc;
  font-size:  3rem;
  letter-spacing: 2px;
}

.adminpagesp{
  color: #dcdcdc;
  font-size: 1.8rem;
}
#successesandchallenges{
  background-color: #0a0a0a;
  padding: 2rem;
}

#successesandchallenges h2{
   font-size: 5rem;
  color: #dcdcdc;
  letter-spacing: 2px;
  text-align: right;
}

.challenge{
  width: 90%;
  margin: 2rem auto;
  color: #dcdcdc;
  font-size: 1.8rem;
}
footer{
  margin: 0;
  height: auto;
}
            </style>
    </head>

    <body>
    <header>
  <h1>LBCaffeine case study & Project outline</h1>
</header>
<nav>
  <ul>
    <li><strong><a href="#theproject" >The Project</a></strong></li>

    <li><strong><a href="#theteam" >The Team</a></strong></li>

    <li><strong><a href="#projectsetup" >Project Setup</a></strong></li>

    <li><strong><a href="#sitefeatures" >Site Features</a></strong></li>

    <li><strong><a href="#successesandchallenges" >Obstacles</a></strong></li> 
  </ul>
</nav>

<main>
  <section class="theproject section" id="theproject">
    <h2>The Project</h2>
    <div class="projectbody">
      <div class="projectdesc">
        <p>LBCaffeine is the final group project for COSW 30 - Web Development with PHP/MYSQL</p>
      </div>

      <div class="projectparameters">
        <p>A client, Dr. Coffee PeetBean, has contacted us about building a mobile website for their new business. They are pouring millions into a campaign for their yet-to-be named store and you get to be a part of its development. Your team will put together a website that will showcase the products and categories they will sell. What sort of information do you think the customer's would like to know about each product?</p>
      </div>
    </div>
    </div>
  </section>

  <section class="theteam section" id="theteam">
    <h2>The Team</h2>

    <div class="teambody">
      <div class="teammember">
        <h3>Chris</h3>
        <p>Security & Registration</p>
      </div>

      <div class="teammember">
        <h3>David</h3>
        <p>QA & User Testing</p>
      </div>

      <div class="teammember">
        <h3>Dominic</h3>
        <p>Database Management & CRUD</p>
      </div>

      <div class="teammember">
        <h3>Erin</h3>
        <p>UX/UI Design, Front-End, Team Lead</p>
      </div>

    </div>
  </section>

  <section class="projectsetup section" id="projectsetup">
    <h2>Project Setup</h2>
    <p class="setupintro">We began the project with preliminary planning of the functionality of the site, and brainstorms of how the Front-end and back-end of the site will effectively merge. The overarching question being, what do we see when we visit sites like Starbucks, Peets, Coffee Bean & Tea Leaf, and other authorities in the Coffee Industry?</p>

    <div class="backend">
      <h3>Back End & Database Setup</h3>

      <p>Our database includes a total of 5 tables; USERS, PRODUCT, ROLE, FAVORITES, and CATEGORY.</p>
<img src="https://blogger.googleusercontent.com/img/a/AVvXsEhz8TyylxebiC4i6lrib3s2RO4wSc0gFlHjmDFOUOklklvfIYp3PRBcKMT4xNWD9cabos4KVfwcFVkaH9cN13UPWebZrUiwstFfr3OBfK2Wjbhgy01TnjARjMMun0IXXnTK3KGdqND3cQe_Q6mNDwqrBEv8Y_uO9ZUBqdyZImxBtwXHzfiH8o8haZmESQ=s16000" id="databasemodel" alt="an image of a database model containing 5 tables with data.">
      
      
      <div class="tables">
        <div class="table">
        <h3>USERS</h3>
        <ul>
          <li><strong>user_id:</strong> Primary Key, generates and auto increments the User ID. Used in the front-end for site security; foreign key to FAVORITE table.</li>
          <li><strong>user_name:</strong> User's first name, set at registration.</li>
          <li><strong>user_email:</strong> User's email, set at registration, used as login credential.</li>
          <li><strong>user_password: </strong>User's password, set at registration, used as login credential.</li>
          <li><strong>user_role:</strong> Determine's account permissions via role, either User or Admin. </li>
          <li><strong>user_lastlogin:</strong> Records the last time the user logged in.</li>
          <li><strong>user_status:</strong> Determines whether the account is active and viewable.</li>
        </ul>
        </div>
        
        <div class="table">
          <h3>ROLE</h3>
          <ul>
            <li><strong>role_id: </strong>Primary Key; Auto-incremented; foreign key connecting the USERS table.</li>
            <li><strong>role_desc:</strong> Determines the role of "user" or "admin".</li>
          </ul>
        </div>

        <div class="table">
          <h3>PRODUCT</h3>
          <ul>
            <li><strong>product_id:</strong> Primary Key of PRODUCT table; Generates & Auto-Increments Product ID; Appended to URL of the page listing for the product; Foreign Key for FAVORITE table.</li>
            <li><strong>product_name: </strong>Product name as visible on front-end.</li>
            <li><strong>product_category: </strong>where category is set; foreign key for CATEGORY table.</li>
            <li><strong>product_price:</strong> stores product price.</li>
            <li><strong>product_desc: </strong>stores product description as viewable on the front-end.</li>
            <li><strong>product_cal: </strong>stores calories, currently not in use.</li>
            <li><strong>product_active: </strong> determines if product is active & visible on front-end.</li>
            <li><strong>product_img: </strong>where image upload file information is stored.</li>
            
          </ul>
        </div>

        <div class="table">

          <h3>CATEGORY</h3>
          <ul>
            <li><strong>category_id:</strong> Primary key of CATEGORY table; generated and auto-incremented; foreign key to PRODUCT table.</li>
            <li><strong>category_name:</strong> Stores the category names as visible on front-end.</li>
            <li><strong>category_desc:</strong> Stores category description.</li>
          </ul>

        </div>

        <div class="table">

          <h3>FAVORITE</h3>
          <ul>
            <li><strong>favorite_id: </strong>Primary key for the favorite table; generated and auto-incremented;</li>
            <li><strong>favorite_user: </strong> Foreign key to USER table; favorite_user and user_id should match.</li>
            <li><strong>favorite_product:</strong> Foreign key to PRODUCT table; favorite_product and favorite_id should match.</li>
          </ul>
        </div>

      </div><!-- end tables -->
      
      <div class="frontend">
        <h3>Front-End Setup</h3>
        <div class="frontendbody">
        <p>The basic layout of the front-end came together pretty quickly, and we worked off of it for the remainder of the project. The main goal was to create a site that we would want to visit ourselves, and ask what are some site features that have made you do a double take? </p>
        
        <div class="table" id="frontendul">
          <h3>Main Front-end and UX goal</h3>
          <ul>
            <li>Make the UI and navigation as seamless and intuitive as possible.</li>
            <li>Keep the visuals simple, but not boring.</li>
            <li>Avoid anything distracting or misleading</li>
            <li>Ensure user pages are responsive.</li>
        </div>
          
          <img src="https://blogger.googleusercontent.com/img/a/AVvXsEgNZoOfj35VDQ22svPlDsMhSXmcAnbFbbw90VPFREMj6LmZUPPyhPNyOH5Ay5WyvT9Io8N0AL5FyoBmQuBdSPJwxTosVwDPuG0SXK8Pt2RqfN3lD1_NtCvEy_cwJTy5iIqqmzmYljNZmE7reXlP6Dev5x2sX3KZgibK8_kXI1v3lI7XnLGXVtZ3UP11Gw=s16000" alt="sitemap chart" id="sitemap">
          <img src="https://blogger.googleusercontent.com/img/a/AVvXsEiZrePmISwLF8MpzpnGpbhOR0y0jfAIBGNU_T2zMRzOAmzkRBQZq_dID6fQfO6GFSJhwlFkBWxY04qtWWQ1TByUKXpsnf38euyHR5kXkcpMY042K78Gjqfp07SNlWA07MBsZjNdYZ8c2OxWmBF8OUJ4Y84X5MDMLzgRWZmIzoSevDRcGJl0t-UlFTmyfg=s16000" alt="styleguide and typography" id="styleguide">
          
          <h3>Above-the-fold landing page</h3>
<!--        <div class="landingimgs"> -->
         <img src="https://blogger.googleusercontent.com/img/a/AVvXsEhoKQg5MmRjxMYLuXLd2L_nVh1nbOIuZLKJQg8HJcyRmM0qhQdgHumW_0DRmcpg9YkncqEeErELhFpjQDmWxdwdVFNWXDTDoPlLfQjDken2orPybwmBGMXMMQzd3GLbNhjQl5ceAgzLu9lj5q8G-cxaSJRqyffE3YQQQMKkb-JOJOqAvkIzdM19vl6N2A=s16000" class="desktop" id="desktoplanding">
         
         <img src="https://blogger.googleusercontent.com/img/a/AVvXsEiPzW3qHnSMA0MUpPUdnCw4L5Aky28qzJesN2Zf7rYrk9HRxL9spgNwznRulMyybwUAaHXtbusALSUNcDXQu_Qj2HaMzbnGtH1-W8YX_zJDQLy_uknxuYCNx3ciuPcWqQg-nBPRf3pjeRZ4-ygOU0YSo7dv9NkCo_G1PfJOlox2Nee4vVmvRGcLcpfxhg=s16000" class="desktop" id="desktopmenu">
         
         <img src="https://blogger.googleusercontent.com/img/a/AVvXsEgjpMpz9wTeobL2UMmVeG7RWp-UpVE__9LRz5ZeasXAvYswIrw7YY9up_EGZhbqthlCpKOG_m_Sd_k_7FXn9gBEvWi9yUpi_KFUfTtfGGN_Rugc4L-SxkuDtbA2aWchFlO2OotUGbmdrTfTgEZnW7CmWl1XaJMpwxjbD0_G13iEaFNwaFLNB8F2p21Sow=s16000" class="desktop" id="desktopaccount">
          
          <div class="mobilelanding">
            <img src="https://blogger.googleusercontent.com/img/a/AVvXsEisVzbZXh2nOtafI9e46ohkvKTmqPmx7PsmMS5ZZ2iL7jILI8QcRaYvSL-xoTzSLa04E9v0pcPxXJ8k47Pt3aAaf-z8_hTRQ2A8f145A61vEDmrqseGDUkZOftDTPJSjIsuDvgy7qEADK3w9ep5lawczEhzoKqJe0Myis6dfBbNp3iatCWExSM5gFfOcQ=w320-h640" class="mobile" id="mobilehome">
            <img src="https://blogger.googleusercontent.com/img/a/AVvXsEjJ5wlg81CKYznQdy971ybp5-NaEPO9INY-1Vigd_o2F7ayWPDs-_kGN99zt-sR1NhLNc_xXX7BcG6NmUyeE5nyxd3D8SpzsJXcU_Ne3sGn5feMYZo0NPSOWRkXcVC5-pZG4hTjbzlcwDzwq3C9qxC2FmYZVTYlWC44WSlwKdRhrBPuV5w6hbLSWjxi3A=w332-h640" class="mobile" id="mobilemenu">
            <img src="https://blogger.googleusercontent.com/img/a/AVvXsEgpo2m7MJ-hySxU5uEVXzCXRbE-wasjUC7TnMWuFc2NEvYyc93LICRyLB9wrDPBYtrEfpKL_l2Emf4iNX4m1OUiZsCNz7V8czJoIjfF2iuEtIYPKf8s_ZhhpMDKxUUzW-TAZa5aLRAEmx_7GL1FZooBGapaLnDevb95dbENyOWLTaUyoW-fOvk8NZ-rTw=w334-h640" class="mobile" id="mobileaccount">
          </div>
          
          </div>
      </div><!-- end frontend -->
  </section>

  <section class="sitefeatures section" id="sitefeatures">
    <h2>SITE FEATURES</H2>
    
    <div class="loginsystem">
      <div class="logindesc">
      <h3>Login/Registration System</h3>
      <p>Site users have the option to login or register on the homepage, if they’re not logged in when they navigate other pages, the header has a login/Register link that takes you back to the form. This is set via conditionals that use sessions.</p>
      </div>
      <div class="loginimg">
        <img src="https://blogger.googleusercontent.com/img/a/AVvXsEh_CCHj9FjyLM_7msXeavZ368wc_9g_r0Q-08OVT4WHHf9pIZG9xesENaY-DYztK5lmGxYO1AtWZTPnBKLTYmsfFHf7Y42r2BFbSc63NHNoW9fOQyz-auyFPskf2mbmCt2QzppL-b-qIwWDq3KjygSwMXDt87jjmSPD1fsyWW_RhYZkcfWaAQIvIXCm7w=s16000" alt="login form with bright pink button" id="loginform">
      </div>
    </div>
    
    <img src="https://blogger.googleusercontent.com/img/a/AVvXsEiWBtalBw9XgSbYI7Hnt79WVIupcT9JjGMdLsQSBdULoXHO30FjPHYXke_qkh0MUVNFF9NxABzb80d-T_6Ex36tCkUVyCN1I9ixGeS5r5Ew5_A_DsHrz32E5Q03RZRZ-xGStF2DXopjZ2lL8PwUsdaUA0xQcNDa4VRZR00jQKx-xM72DXugGBSSLFXJQw=s16000" class="pageheader">
    
    <img src="https://blogger.googleusercontent.com/img/a/AVvXsEjNxFms6nVXmyV4ugcK3yqyzO9_V8iJe4UGFysRKNUpQZGpgzaYwNf6JFG227HA5BCUjRCffjtGxd9QsoU6skvRyCqxr-gDjp-qyBqJVqUcBt03fWw8HIvVyCoxO0MI67fzZHo2nn_YEpnqxom2u78UKMV5dY_ukTcqNIFpQC2TtlbQuA-10GrbhYK_1A=s16000" class="pageheader">

     <div class="loginsystem">
             <div class="loginimg">
        <img src="https://blogger.googleusercontent.com/img/a/AVvXsEhxASYY1wLd76bzq3uK-r4sWolnCTeIMrSK-ZawHKOH4zNk2rfn0ilbxjeiisTug7siHrRyQcsdBFyABtlWs7uAW8pMOJSmshYRs-583ihV4I7Pij24jDJbBKF_plbEMS_P7yycFgfq6jDW8giHzb2CmRvBZGhOCwg8y7L-TqiYMYq82y4xqkQsK7AlWg=s16000" id="loginform">
      </div>
      <div class="logindesc">
      <h3>User Account Page</h3>
      <p>The menu on the user account page is generated depending on the user role, if they are admin, it contains a link to the admin screen.</p>
      </div>

    </div>
    
    <h3 id="adminpagesh3">ADMIN PAGES</h3>
    <p class="adminpagesp">The admin.php page contains the inventory management. You can add a product from the admin landing, view the inventory through the link on the side menu, and edit each product via the inventory view.</p>
    
    <img src="https://blogger.googleusercontent.com/img/a/AVvXsEjOEJ1zEIFhICn1eeA3ysbA2Q3uoq8LgGz3FF4iP1C-ETkvzdEKPRSgv-l0Fjk2BfxXsUhiHpvGWH529Q8MfD2XScULuo5lqhNx5C3Nh-LMbGcWb6s_CZ6hZhH2brEMuJOBSJmRqp0geNszikV9NgiKj9i7Bk80zXtP0xmuiYtUXfChA5flOIypACFMBg=s16000" class="desktop">
    
    <img src="https://blogger.googleusercontent.com/img/a/AVvXsEikuKX_AgFWHnqDpEIxSRmGkC6SXVDBVN1_V5HDH3HPvfXxDxwEpzCzIUlLiWA8f0mrT5LEt5mdbsv85PFoXmz6_aaJIg0maAsiCqBDt3f8ULND8AH_eO1WtJhgrqPNSqZ5Yy-dXI7Rg9V6f2XhVfQ_h6jJiwufDQh8kFYxRr_PRjYTutja_P7YzFJf6Q=s16000" class="desktop">
    <h3 id="adminpagesh3">Edit Product</h3>
    <p class="adminpagesp">Here you can edit the products, by changing the name, the category, the description, calories, the status of the product (whether it is active or inactive on the site) and upload an image. </p>
    <img src="https://blogger.googleusercontent.com/img/a/AVvXsEge72lRu99Afs6kN-Gml4nAWzDfdZw2T35nKGpVMldRBw3demtyEhL5Zed7hvmdYvftOzMHk8U63UNNVyDYiO4sQ64D4d0FNj7pPkSKTRrP7hqv-e0E-zOmluycs9BxOh0HMghtvwKYiev24JY9ZXAR_VbCwMPllCC2Mfck-dAXdwWjM4BE3MnUi3CiAA=s16000" class="desktop">
  <p class="adminpagesp">Each of these pages make up the bulk of the CRUD system, bridging the front-end and back-end without having to go into the actual database, these pages are secured by user_role, so if a user is not admin, or not logged in, you cannot access the page.</p>  
  </div>

  </section>

  <section class="successesandchallenges section" id="successesandchallenges">
  <h2>CHALLENGES AND SUCCESSES</H2>

  <div class="challenge">
    <p>Everything in the project presented an obstacle, but we were able to successfully overcome them by collaborating as a team. Some obstacles included:
      <ul>
        <li>Image uploads, and output</li>
        <li>Successful implementation of sessions</li>
        <li>Overall file management</li>
        <li>Having a small team</li>
      </ul>
      <p>Although these obstacles are all different, we were able to overcome them in the same way across the board, and that was through cooperation and communication. Even if our "role" was different than the specific problem we were working out, we all stepped in as needed to find a solution, by testing things out, sharing research and ultimately solving the problem as a team.</p>
</div>
  </section>

</main>

<?php include('includes/footer.php'); ?>


</body>
</html>