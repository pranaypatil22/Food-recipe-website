<html>
<head>
  <style>
  

  input[type=text]
  {
    border-radius: 25px;
    border-color:   #008080 ;
    border-width: 3px;
  
  
  }
  input[type=text]:focus{
    width: 450px;
  }

  
 </style>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="css\style.css">
</head>

  <body bgcolor="white">
    <header>
    <?php include("temp.php");
    ?>
    </header>

<div class="but"><button><a href="javascript:history.go(-1)" onMouseOver="self.status.referrer;return true">Go Back</a></button>
  

  </div>


  <div  class="image" >  
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

</body>
</html>