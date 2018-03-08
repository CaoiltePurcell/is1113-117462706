<?php
// Start the session
session_start()
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Details</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus2_validator.js"></script>
        
        <!--Adding the Navigation bar layout and Background-->
        <style>
            ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
            }
            li {
            float: left;
            }
            li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            }
            li a:hover {
            background-color: #111;
            }
            body{
            text-align: center;
            background:url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTB0A3ElWxecNYPZvMbbf_TOltUB7eapDWzK9t0L5cI4DETO9phhw");
            background-repeat: no-repeat;
            background-size: cover;
            }
        </style>
        
    </head>
    
    <body>
        
        <!--Populating the Navigation bar with functional buttons--> 
        <ul>
        <li><a href="Homepage.html">Homepage</a></li>
        <li><a class="active" href="CV/cv_page1.html">Curriculum Vitae</a></li>
        <li><a href="/Interests/Sport.html">Interests</a></li>
        <li><a href="EBusiness/E_Business1.php">E-Business</a></li>
        <li><a href="https://dashboard.heroku.com/apps/is1113-117462706">Heroku</a></li>
        <li><a href="https://github.com/CaoiltePurcell/is1113117462706/graphs/commit-activity">GitHub</a></li>
        </ul>
                
        
        <h4 class="ebus2_heading">Please enter your payment details</h4>
        
        <form action="Ebus3.php" method="POST">
            
            <label for="user_name" class="name">
                Name:
                <input type="name" id="user_name" name="name" placeholder="Enter Your Name">
            </label>
            <br/>
            <label for="user_email" class="email">
                Email address:
                <input type="email" id="user_email" name="email" placeholder="example@gmail.com">
            </label>
            <br>
            <label for="user_pin" class="pin">
                PIN:
                <input type="pin" id="user_pin" name="pin" placeholder="Enter PIN" maxlength="4" pattern="\d{4}">
                <br>
                (Only numerical PIN's are valid)
            </label>
            <br>
            <br>
            <button class="btn_proceed" type="submit" id="btnPurchase">Proceed</button>
        </form>
        <br>
        <button class="btn_validate" onClick="validateDetails()">Validate</button>
    
        <?php  
        // Set session variables
          $_SESSION["total"] = $_POST["total"];
        ?>
        
    </body>
</html>