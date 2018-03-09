<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Home</title>
</head>
<body>
    <div class="mySlidesdiv">

        <img class="mySlides w3-animate-opacity" src="images/guy-bowden-95257-unsplash.jpg">
        <img class="mySlides w3-animate-opacity" src="images/jeremy-bishop-408926-unsplash.jpg">
        <img class="mySlides w3-animate-opacity" src="images/jonatan-pie-226805-unsplash.jpg">
        <img class="mySlides w3-animate-opacity" src="images/mike-dennler-173199-unsplash.jpg">
        <img class="mySlides w3-animate-opacity" src="images/nathan-anderson-139511-unsplash.jpg">
        <img class="mySlides w3-animate-opacity" src="images/sticker-mule-189122-unsplash.jpg">
        <button class="w3-button w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
         <button class="w3-button w3-display-right" onclick="plusDivs(+1)">&#10095;</button>
    </div>

<center id="projects">
	<div class="home-body" style="background-color: #f2f2f2; padding-top: 10px;">
		<h1 style="letter-spacing:3px;margin:60px 0 40px 40px;font-size:36px;text-align:left;">Projects</h1>
		<div class="wrappers" style="margin-left: 30px;">
		<section class="columns">
    		<div class="column">
    			<div class="container">
    
    			<img src="images/guy-bowden-95257-unsplash.jpg" class="icon">
    			    <div class="overlay">
     				    <div class="text"><a href="index.php?page=project01" target="_blank" style="font-size: 20px;">Project01</a></div>
      		        </div>
    		    </div>
    		</div>
    		<div class="column">
    			<div class="container">
    			<img src="images/jeremy-bishop-408926-unsplash.jpg" class="icon">
    			  <div class="overlay">
     				   <div class="text"><a href="index.php?page=project02"  target="_blank" style="font-size: 20px;">Project02</a></div>
      		      </div>
    		   </div>
    		</div>
    		<div class="column">
    			<div class="container">
    			<img src="images/jonatan-pie-226805-unsplash.jpg" class="icon">
    			  <div class="overlay">
     				   <div class="text"><a href="index.php?page=project03"  target="_blank" style="font-size: 20px;">Project03</a></div>
      		      </div>
    		   </div>
    		</div>
    		<div class="column">
    			<div class="container">
    			<img src="images/mike-dennler-173199-unsplash.jpg" class="icon">
    			  <div class="overlay">
     				   <div class="text"><a href="index.php?page=project04"  target="_blank" style="font-size: 20px;">Project04</a></div>
      		      </div>
    		   </div>
    		</div>
    		<div class="column">
    			<div class="container">
    			<img src="images/nathan-anderson-139511-unsplash.jpg" class="icon">
    			  <div class="overlay">
     				   <div class="text"><a href="index.php?page=project05"  target="_blank" style="font-size: 20px;">Project05</a></div>
      		      </div>
    		   </div>
    		</div>
    		<div class="column">
    			<div class="container">
    			<img src="images/sticker-mule-189122-unsplash.jpg" class="icon">
    			  <div class="overlay">
     				   <div class="text"><a href="index.php?page=project06" target="_blank" style="font-size: 20px;">Project06</a></div>
      		      </div>
    		   </div>
    		</div>
</section></div></div>
</center>

<script>
var slideIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1} 
    x[slideIndex-1].style.display = "block"; 
    setTimeout(carousel, 4000);
}
</script>

</body>
</html>
