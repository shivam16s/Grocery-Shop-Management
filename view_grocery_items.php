<?php
include('session_m.php');

if(!isset($login_session)){
header('Location: managerlogin.php'); // Redirecting To Home Page
}

?>
<!DOCTYPE html>
<html>

  <head>
    <title> Super Basket'  </title>
  </head>
  <style>
  table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
  </style>

  <link rel="stylesheet" type = "text/css" href ="css/view_food_items.css">
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
      <div class="form-area" style="padding: 0px 100px 100px 100px;">
        <form action="" method="POST">
        <br style="clear: both">
        


<?php




// Storing Session
$user_check=$_SESSION['login_user1'];
$sql = "SELECT * FROM food ORDER BY F_ID desc";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0)
{

  ?>

  <table width="1000">
    <thead class="thead-dark">
      <tr>
       
        <th align="center"> Product No </th>
        <th> Product Name </th>
        <th> Price </th>
        <th> Description </th>
    
      </tr>
    </thead>

    <?PHP
      //OUTPUT DATA OF EACH ROW
      $count=1;
      while($row = mysqli_fetch_assoc($result)){
    ?>

  <tbody>
    <tr>
      
      <td ><?php echo $count; ?></td>
      <td><?php echo $row["name"]; ?></td>
      <td><?php echo $row["price"]; ?></td>
      <td><?php echo $row["description"]; ?></td>

    </tr>
  </tbody>
  
  <?php
$count++; } ?>
  </table>
    <br>


  <?php } else { ?>

  <h4><center>0 RESULTS</center> </h4>

  <?php } ?>

        </form>

        
        </div>
      
    </div>
</div>
<br>
<br>
<br>
<br>
  
  </body>
</html>