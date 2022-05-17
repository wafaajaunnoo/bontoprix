<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="profile.css">
</head>
<body>
 
<?php include 'header.php';?>

         <h2>My Profile</h2>
            
     <div class="group"><p id="rcorners">
            <p id="circle">
            
                <p><input type="file"  accept="image/jpeg, image/png" name="image" id="file"  
                    onchange="loadFile(event)" style="display: none;"></p>
                <p><label for="file" style="cursor: pointer;"><img src="images/filter-icons/camera icon.png"
                     name="button" class="previewImg"></label></p>
                <p><img id="output" width="170px" /></p>
            </p>  
            

        
        <div class="profile-page">
            
            <form action="#" class="position-form">
              <label for="fname" id="left">First Name</label>
              <input style="margin-left:24px" type="text" id="fname" name="fname"><br><br>

              <label for="lname" id="left">Last Name</label>
              <input style="margin-left:24px" type="text" id="lname" name="lname"><br><br>

              <label for="dob" id="left">Date of Birth</label>
              <input style="margin-left:24px" type="date" name="dob" id="date-of-birth"><br><br>

              <label for="gender" id="left">Gender</label>
              <input style="margin-left:24px" type="radio" id="male" name="male">
              <label for="male">Male</label>
             &nbsp;
             <input style="margin-left:24px" type="radio" id="female" name="female">
              <label for="female">Female</label><br><br>
            

              <label for="phone" id="left">Phone Number </label>
              <input style="margin-left:18px" type="tel" id="number" name="number"><br><br>

              <label for="email" id="left">Email  </label>
              <input style="margin-left:24px" type="email" id="email" name="email"><br><br>
              
              <label for="username" id="left">Username</label>
              <input style="margin-left:24px" type="text" id="username" name="username"><br><br>
              <label for="username" id="left">Password</label>
              <input style="margin-left:24px" type="password" id="password" name="password"><br><br>
            
              
              </form>
             
            </div>
            <div class="profile-btns">
            <button class="edit"> Edit</button>
            <button class="del"> Delete</button>
            <button class="save"> Save</button>
            <button class="clear"> Clear</button>
            </p>
        </div>
    </div> 

    </center>
    <script src="imagefile.js"></script>
</body>
</html>