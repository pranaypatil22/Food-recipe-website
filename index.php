<!DOCTYPE html>
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
 		width: 300px;
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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>




 </head>


 <body>
 <!--	<script src="css/pop.js"></script>

<div id="loading"></div>

<div id="popUpMain">
	<div id="popup">
		<h1 id="newsHeading"> see food recipes by the best master chefs in the world.</h1>
	</div>
</div>
-->


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
  <div  class="image" >  
     <div class="cards" id="name">
        <div class="image">
            <img src="img\Butter-Chicken-IMAGE-27.jpg">
        
        </div>
        
        <div class="title" >
            <h1>Butter Chicken<h1>
        </div>

        <div class="but">
        <button><a href="butterchicken.php"> View </a></button>
        </div>   

    </div>


     <div class="cards" id="name">
        <div class="image">
            <img src="img\Tandoori-Paneer-Tikka-2.jpg">
        
        </div>
        
        <div class="title">
            <h1>Tandoori-Paneer-Tikka</h1>
        </div>

        <div class="but">
        <button> <a href="Tandoori_paneer_tikka.php">View <a/> </button>
        </div>   

    </div>

    <div class="cards" id="name">
        <div class="image">
            <img src="img\Vegetable_Makhanwala_Recipe_North_Indian_Punjabi.jpg">
        
        </div>
        
        <div class="title">
            <h1>Vegetable Makhanwala</h1>
        </div>

        <div class="but">
        <button> <a href="veg_makhanwala.php">View <a/> </button>
        </div>   

    </div>


    <div class="cards" id="name">
        <div class="image">
            <img src="img\prawn.jpg">
        
        </div>
        
        <div class="title">
            <h1>Prawns masala </h1>
        </div>

        <div class="but">
        <button> <a href="prawnsmasala.php">View <a/> </button>
        </div>   

    </div>
    

      <div class="cards" id="name">
        <div class="image">
            <img src="img\d.jpg">
        
        </div>
        
        <div class="title">
            <h1>EGG Currry </h1>
        </div>

        <div class="but">
        <button> <a href="eggcurry.php">View <a/> </button>
        </div>   

    </div>


    <div class="cards" id="name">
        <div class="image">
            <img src="img\b.jpg">
        
        </div>
        
        <div class="title" >
            <h1> Burger</h1>
        </div>

        <div class="but">
        <button><a href="burger.php"> View </a></button>
        </div>   

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