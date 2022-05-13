
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitor Registration</title>
    <link rel="stylesheet" href="signin-up.css">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <center>
        <header>
            <img src="images/header/logo.png" alt="Bonto Prix logo" id="brand-logo"/>
            <nav>
                <ul>
                    <li><a href="#" class="active">Home</a></li>
                    <li><a href="#" class="active">Flights</a></li>
                    <li><a href="#" class="active">Accommodations</a></li>
                    <li><a href="#" class="active">Virtual&nbspExperiences</a></li>
                    <li><a href="#" class="active">&nbsp&nbsp&nbsp&nbspStories</a></li>
                    <li><a href="#" class="active">Contact&nbspus</a></li>
                    <li><a class="slide"> </div></li>
                </ul>
            </nav>
            <button type = "submit" id="user-icon">  
            </button>
        </header>
    </center>
    <section>
        <div class="container">
            <div class="user singinBx">
                <div class="imgBx"><img src="images/pics/tour-eiffel-french-moments.jpg" width="400px" height="400px" alt=""></div>
                <div class="formBx">
                   <div class="color">
                   <form method = "POST" action = "save.php">
                        <header class="getstarted"><h2>Get Started</h2></header>
                        <div class="registration-form">
                        <label for="fname" id="left">First Name</label>
                        <input type="text" name="first_name" style="margin-left:49px" id="fname2"placeholder="First Name" required>
                        <br><br>
                        <label for="lname" id="left">Last Name</label>
                        <input type="text" name="last_name" style="margin-left:49px"id="lname2" placeholder="Last Name" required>
                        <br><br>
                       
                        <label for="email"  id="left">Email</label>
                        <input type="text" name="email" style="margin-left:49px"id="email2" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" 
                         title="Email must have a valid email format" required>
                        <br><br>
                        <label for="username"  id="left">Username</label>
                        <input type="text" name="username" style="margin-left:49px" id="uname" placeholder="Username" required>
                        <br><br>
                        <label for="password" id="left">Password</label>
                        <input type="password" name="password" style="margin-left:49px" id="pwd" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                         title="Password must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  
                         required> <p id="warn" style="display:none; color:red"> Warning: CapsLock Key is On! </p>
                        
   
                       <button class="signupBTN" name = "signup">Sign Up Now</button> 
                       <p class="login-alignment">Already have an account / 
                        <a href="login.php" id="loginlink">Login</a></p>
                    </div>
                    </form>

                    
                    
                </div> 
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript">
      // Get the input field
      const input = document.getElementById("pwd");
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