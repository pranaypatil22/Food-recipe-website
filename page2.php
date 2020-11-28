<!DOCTYPE html>
<html>
 <head>
 	<style>

 	input[type=text]
 	{
 		border-radius: 25px;
 		border-color: 	#008080 ;
 		border-width: 3px;
 	
 	
 	}
 	input[type=text]:focus{
 		width: 450px;
 	}
 </style>


   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width">
   <meta name="description" content="simple food recipes">
   <meta name="keyword" content="food,food recipes,dishes,delecious,delecious dishes">
   <meta name="author" content="Pranay Patil">
   <title>Delecious Dishes | Welcome</title>
   <link rel="stylesheet" href="css\style.css">



   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >

<!-- Optional theme -->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>




 </head>

  <body>
    <header>
    <?php include("temp.php");
    ?>
</header>

    <section id="showcase">

    	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    
  </ol>


  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <a href="eggcurry.php"><img src="img\d.jpg" alt="..."></a>
      <div class="carousel-caption">
        <h4><font color="gray"> Egg curry  </font></h4>
      </div>
    </div>
    <div class="item">
      <a href="prawnsmasala.php"><img src="img\prawn.jpg" alt="..."></a>
      <div class="carousel-caption">
        <h4> <font  color="gray">Prawns masala  </font></h4>
      </div>
    </div>
    <div class="item">
      <a href="french fries.php"><img src="img\A.jpg" alt="..."></a>
      <div class="carousel-caption">
        <h4> <font color="gray">French Fries </font></h4>
      </div>
    ...
  </div>
  
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 
     <div class="cards" id="name">
        <div class="image">
            <img src="img\a.jpg">
        
        </div>
        
        <div class="title" >
            <h1>French Fries<h1>
        </div>

        <div class="but">
        <button><a href="french fries.php"> View </a></button>
        </div>  

         

    </div>




     

        <p align="center" > Page <a href ="index.php"> 1 </a>, <a href="page2.php"> 2 </a>  </p>



<div class="footer">
    <div>
      <p>
        &copy; Copyright By Delecious Dishes 2019
      </p>
    </div>
</div>
     

  </body>

</html>