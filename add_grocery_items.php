<?php
include('session_m.php');

if(!isset($login_session)){
header('Location: admin_login.php'); 
}

?>
<!DOCTYPE html>
<html>

  <head>
    <title>  </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/add_food_items.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body>


    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  
  
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

<?php include("admin_header.php");?>





<div class="container">
    <div class="container">
    	<div class="col">
    		
    	</div>
    </div>

    
    	<div class="col-xs-3" style="text-align: center;">

 
    


    
    <div class="col-xs-9">
      <div class="form-area" width="1000px">
        <form action="add_grocery_items1.php" method="POST" width="1000">
        <br style="clear: both">
        

          <div class="form-group">
          <label>Item Name(Must Be Characters)</libel>
            <input type="text" class="form-control" id="name" name="name" placeholder="Your Food name" required="">
          </div>     

          <div class="form-group">
          <label>Item Price(Must Be Number)</libel>
            <input type="text" class="form-control" id="price" pattern="[0-9]+" name="price" placeholder="Your Food Price (INR)" required="">
          </div>

          <div class="form-group">
          <label>Item Description</libel>
            <input type="text" class="form-control" id="description" name="description" placeholder="Your Food Description" required="">
          </div>

          <div class="form-group">
          <label>Item Image</libel>
            <input type="FILE" class="form-control" id="img" name="img" placeholder="Your Food Image Path [images/<filename>.<extention>]" required="">
          </div>

          <div class="form-group">
          <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right"> ADD ITEM </button>    
      </div>
        </form>

        
        </div>
      
    </div>
</div>

  </body>
</html>