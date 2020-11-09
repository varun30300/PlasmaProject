<?php
    require_once './scripts/getactive.php';
    require_once './scripts/getinprogress.php';
    require_once './scripts/db.php';
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/f991b24088.js" crossorigin="anonymous"></script>
        <script src="jscript.js"></script>
        <link rel="stylesheet" href="styles.css">
        <title>PLASMA</title>
    </head>
    <body>
        <div class="wrapper">
            <div class="sidebar">
                <h2>Plasma</h2>
                <ul>
                    <li><a href="javascript:;" onclick="clickHome();"><i class="fas fa-home"></i>Home</a></li>
                    <li><a href="javascript:;" onclick="clickAbout();"><i class="fas fa-user"></i>About</a></li>
                    <li><a href="javascript:;" onclick="clickForm();"><i class="fas fa-address-card"></i>Form</a></li>
                    <li><a href="javascript:;" onclick="clickInprogress();"><i class="fas fa-tasks"></i>Inprogress</a></li>
                </ul>
            </div>

            <!-- home page begins  -->
            <div class="main_content" id = "home">
                <div class="header">
                    <div>Active Requests</div>
                </div>

                <?php
                    getactive($conn); 
                ?>
                
            </div>
            <!-- home page ends  -->
              
            <!-- about page begins  -->
            <div class="main_content" id = "about">
                
                <!-- heading  -->
                <div class="header">
                    <div>What happens when you danota plasma ?</div>
                </div>
            </div>
            <!-- about page ends -->

            <!-- form page begins  -->

            <div class="main_content" id = "form">

                <!-- here lies heading -->
                <div class="header">
                    <div>Donor Willingness Form</div>
                </div>

                <!-- inspiration text  -->
                
                <div class="insptext">
                    Every Plasma Donor <br/>is a <br/>LIFE SAVER
                </div>
                
                <!-- form here  -->
                <div class="formarea">
                    <form action="./scripts/uploadform.php" method="POST" name="donor" onsubmit="return validateform()">
                        <label for="fname">First Name</label>
                        <input type="text" id="fname" name="firstname">

                        <label for="lname">Last Name</label>
                        <input type="text" id="lname" name="lastname">
                        
                        <label for="age">Age</label>
                        <input type="number" id="age" name="age">

                        <label for="email">Email</label>
                        <input type="text" id="email" name="email">

                        <label for="phone">Phone No</label>
                        <input type="number" id="phone" name="phone">

                        <label for="address">Address</label>
                        <input type="text" id="address" name="address">

                        <label for="cured">Cured on:</label>
                        <input type="date" id="cured" name="cured">
                                   
                        <input type="submit" value="Submit" name="submit">
                    </form>
                </div>
                
            </div>

            <!-- form page ends  -->

            <!-- inprogress page begins -->
            <div class="main_content" id = "inprogress">
                <div class="header">
                    <div>Inprogress Requests</div>
                </div>
                <?php
                    getinprogress($conn); 
                ?>
            </div>
            <!-- inprogress page ends  -->
            


        </div>
    </body>
</html>





