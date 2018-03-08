<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
        
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
        
        <h1>Receipt</h1>
        
        <!-- Creating the receipt -->
        <div class="ebus_content">
            
            
            <?php  
            // Set session variables
              $name = $_POST["name"];
              
              echo ("Thank you for your purchase " . $name . ".")
               ?>
              <br/>
               <?php  
            // Set session variables
              $email = $_POST["email"];
              ("The email address that you have provided is " . $email . ".")
               ?>
              <br/>
               <?php  
            // Set session variables
              $total = $_POST["total"];
              ("Your total today is $" . $total . ".")
               ?>
              
              
              
            ?>
            
            
            

            
            
            
            <h3 class="ebus3_heading2">Thanks for shopping with us</h3>

        
    </body>
</html>