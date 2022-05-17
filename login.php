<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitor Login</title>
    <link rel="stylesheet" href="signin-up.css">
    
    <link rel="stylesheet" href="styles.css">
</head>

<body>
<?php include 'header.php';?>
<section>
  <div class="logincontainer">
        
              
            <form method = "POST" action = "login_query.php">

                     <br>
              <header class="welcomeback"> <h2>Welcome Back!</h2></header> 
              <br>
             
                 <div class="data">
             
                    <label id="right">Username</label>
                    <input type="text"placeholder="Enter your username" id="usernamebx" name="username" required>
                 </div>
                 <br>
                 <div class="data">
                    <label id="right">Password</label>
                    <input type="password" placeholder="Enter your password" id="passwordbx" name="password" required>
                  <center> <p id="warn" style="display:none; color:red" > Warning: CapsLock Key is On!</p></center>
                 </div>
                 
                 <div class="btn">
                   
                    <button type="submit" name="login" class="signinBTN">Sign In</button>
                 </div>
                 <div class="signup-link">

                  <p class="register-alignment">Don't have an account /  
                     <a href="registration.php" id="registerlink">Create Now</a></p>
                 </div>
              </form>
           </div>
      
         </section>
      <script type="text/javascript">
      // Get the input field
         const input = document.getElementById("passwordbx");
      // Get the warning warnText
         const warnText = document.getElementById("warn");
      // add event listener to input
         input.addEventListener("keyup", function(event) {
         // If capslock is pressed, display the warnText
            if (event.getModifierState("CapsLock")) {
             warnText.style.display = "block";
          } else {
             warnText.style.display = "none";
         }
      });
   </script>
</body>
</html>