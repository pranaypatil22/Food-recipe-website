<!--
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <h1><a class="navbar-brand" href="#">Delicious Dishes</a></h1>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
     <nav class="search">
        <div class="search" >
          <input type="text" id="se" name="" onkeyup="myFunction()" placeholder="Search..">
        </div>
      </nav>
        
  </div>
</nav>-->


<nav class="navbar navbar-inverse" >
    	<div class="container"  >
        <div class="navbar-header">
        
    		<div id="brand">
           
    			<h1><span class="highlight"></span> <a style="text-decoration: none;" href="index.php" >Delecious Dishes</a>
             </h1>
        
        <div class="search" >
          <input type="text" id="se" name="" onkeyup="myFunction()" placeholder="Search..">
        </div>
      
           </div>
    	
       
<link rel="stylesheet" type="text/css" href="stylesheet.css">
      <ul class="nav navbar-nav"  >

 <li><a href="index.php">Home</a></li>
 
 <li><a href="#">Menu</a>
  
  <ul>
    <li><a href="chikenrecipes.php">Chicken Recipes</a></li>
   <li><a href="seafood.php">Seafood Recipes</a></li>
   <li><a href="vegrecipes.php">Veg Recipes</a></li>
   <li><a href="chinese.php">Chinese Recipes</a></li>
   <li><a href="snaks.php">Snaks</a></li>
  </ul>
 </li>

 <li><a href="About.php">About</a>
   </li>
 <li><a href="contact.php">Contact</a>
  </li>
  
</ul>
</nav>
    		
   
</nav>


    



<script>
function myFunction() {
  var input = document.getElementById("se");
  var filter = input.value.toLowerCase();
  var nodes = document.getElementsByClassName('cards');

  for (i = 0; i < nodes.length; i++) {
    if (nodes[i].innerText.toLowerCase().includes(filter)) {
      nodes[i].style.display = "block";
    } else {
      nodes[i].style.display = "none";
    }
  }
}
</script>


