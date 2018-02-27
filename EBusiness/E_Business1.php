<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
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
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
        </head>
        
    <body>
        <!--Populating the Navigation bar with functional buttons--> 
        <ul>
        <li><a href="Homepage.html">Homepage</a></li>
        <li><a href="CV/cv_page1.html">Curriculum Vitae</a></li>
        <li><a href="Interests/Sport.html">Interests</a></li>
        <li><a class="active" href="EBusiness/E_Business1.php">E-Business</a></li>
        <li><a href="is1113117462706.herokuapp.com">Heroku</a></li>
        <li> <a href="https://github.com/CaoiltePurcell/is1113117462706/graphs/commit-activity">GitHub</a></li>
        </ul>
        <h1>Products:</h1>
        
            <h4>Select a product</h4>
            
            <br/>
            
            <form method="POST" action = "Ebus2.php">
            
                <label for="SalesForce">
                    <input type="radio" id="SalesForce" nme="product" checked onClick="disablebtnProceed()"/>
                    Salesforce @ $100
                </label>
                
                <br/>
                
                <label for="Cloud9">
                    <input type="radio" id="Cloud9" nme="product" checked onClick="disablebtnProceed()"/>
                    Cloud 9 @ $200
                </label>
                    
                <br/>
                    
                <label for="AWS">
                    <input type="radio" id="AWS" name+"product" onClick+"disablebtnProceed()"?>
                    AWS @ $300
                </label>
                
                <br/>
                
                <label for="Gmail">
                    <input type="radio" id="Gmail" nme="product" checked onClick="disablebtnProceed()"/>
                    Gmail @ $400
                </label>
                
                <br/>
                <br/>
                
                <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" value="0.00" readonly/>
                </label>
                
                <br/>
                
                <label for="total">
                Total
                <input type="text" id="total" value="0.00" readonly/>
                </label>
                
                <br/>
                
                <button type="submit" id="btnProceed" disabled>Add to shopping cart</button>
                
            </form>
                
                <br/>
                <button onClick="calcSub()">Calculate Cost</button>
                <a role="button" href="Ebus1.php">Clear Choice</a>
                
                
    </body>
</html>