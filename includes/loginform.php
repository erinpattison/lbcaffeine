<style>
    #loginform, #registerform{
        width: 99%;
    }

    #loginform h2, #registerform h2{
        text-align: center;
    }
     .inputfield{
         width: 99%;
        height: 3rem;   
     }

     .button, #register, #login{
         text-align: center; 
     }

     #register span{
         cursor: pointer;
     }
     input[type="submit"]{
         width: 50%;
         background-color: #FF206e;
         border: 2px solid #000;
         font-weight: bold;
         padding: 1rem;
     }

     button{
         background-color: #fff;
         border: none;
         color: #ff206e;
         font-weight: bold;
         cursor: pointer;
         font-size: 1.6rem;
     }

    </style>

<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// output errors
if (isset($errors) && !empty($errors)) {
	echo '<h1>Error!</h1>
	<p class="error">The following error(s) occurred:<br>';
	foreach ($errors as $msg) {
		echo " - $msg<br>\n";
	}
	echo '</p><p>Please try again.</p>';
}

// Display form:
?>
<form action="login.php" method="post" id="loginform">
    <h2> Login </h2>
	<p><input type="email" name="email" class="inputfield" maxlength="60" placeholder="Enter your Email Address" required> </p>
	<p><input type="password" name="pass"  class="inputfield" maxlength="20" placeholder="Enter Your Password" required></p>
    <p class="button"><input type="submit" name="submit" value="Login"></p>   
    <p id="register">Need an account? <button onclick="regToggle()">Register</button></p>
</form>

<script>
function regToggle() {
  let x = document.getElementById("loginform");
  let y = document.getElementById("registerform");
  if (x.style.display === "none") {
    x.style.display = "block";
    y.style.display = "none";
  } else {
    x.style.display = "none";
    y.style.display= "block";
  }
}
    </script>

<style>
    #registerform{
        display: none;
    }
    </style>
<form id="registerform" class="input_group" action="process_registration.php" method="post">
      <h2>Register for an account</h2>
        <input type="hidden" name="user_id">
        <input type="hidden" name="user_role" value="2">
        <p><input type="text" name="user_name" class="inputfield" placeholder="Enter First Name" value="<?php if(isset($_POST['user_name'])) echo $_POST['user_name']?>" required></p>
        <p><input type="email" name="user_email" class="inputfield" placeholder="Enter Your Email ex. you@email.com" value="<?php if(isset($_POST['user_email'])) echo $_POST['user_email']?>" required></p>
        <p><input type="password" name="user_password" class="inputfield" placeholder="Enter Your Password" value="<?php if(isset($_POST['user_password'])) echo $_POST['user_password']?>" required></p>
        <p><input type="password" name="confirm_password" class="inputfield" placeholder="Confirm Password" required></p>
        <p class="button"><input type="submit" id="login_register_button" value="REGISTER"></p>
        <p id="login">Have an Account? <button onclick="logToggle()">Login</button></p>  
    </form> 
      
    <script>
function logToggle() {
  let x = document.getElementById("loginform");
  let y = document.getElementById("registerform");
  if (y.style.display === "none") {
    y.style.display = "block";
    x.style.display = "none";
  } else {
    y.style.display = "none";
    x.style.display= "block";
  }
}
    </script>


