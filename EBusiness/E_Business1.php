!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
        <title>Select Product</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
    <head/>
    
    <body>
        <!--Populating the Navigation bar with functional buttons--> 
        <ul>
        <li><a href="Homepage.html">Homepage</a></li>
        <li><a href="CV/cv_page1.html">Curriculum Vitae</a></li>
        <li><a href="/Interests/Sport.html">Interests</a></li>
        <li><a class="active" href="EBusiness/E_Business1.php">E-Business</a></li>
        <li><a href="https://dashboard.heroku.com/apps/is1113-117462706">Heroku</a></li>
        <li><a href="https://github.com/CaoiltePurcell/is1113117462706/graphs/commit-activity">GitHub</a></li>
        </ul>
          
          <h1>Select a Product</h1>
              
          <br>
              
          <form method="POST" action="Ebus2.php">
            
            <!-- Display radio buttons for cloud service options -->
            <label for="salesforce" class="SalesForce">
              <input type="radio" id="salesforce" name="product" checked onClick="rbChecked()"/>
              SalesForce @ $100
            </label>
                
            <br>
            
            <label for="cloud9" class="Cloud9">
              <input type="radio" id="cloud9" name="product" onClick="rbChecked()"/>
               Cloud9 @ $200
            </label>
                
            <br>
                
            <label for="aws" class="AWS">
              <input type="radio" id="aws" name="product" onClick="rbChecked()"/>
              AWS @ $300
            </label>
                
            <br>
                
            <label for="gmail" class="Gmail">
              <input type="radio" id="gmail" name="product" onClick="rbChecked()"/>
              Gmail @ $400
            </label>
            
            
            
            <!-- Breakdown of the price for the selected option -->
            <label for="subtotal" class="Subtotal">
              Sub Total &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
            </label>
                
                
            <br>
                
            <label for="total" class="Total">
              Total &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="text" id="total" name="total" value="0.00" readonly/>
            </label>
      
            <br>
            
            <div class="add_btn">   
              <button class="add_btn_style" type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            </div>  
              
          </form>
            
          <!-- button for calculating price breakdown of the selected option -->    
          <button class="calculate_btn" onClick="calcSub()">Calculate Cost</button>
             
          <br>
            
          <!-- button for clearing the selected options -->    
          <a class="clear_btn" role="button" href="Ebus1.php">Clear Choice <i class="material-icons">delete</i></a>
        </div>
    </body>
</html>