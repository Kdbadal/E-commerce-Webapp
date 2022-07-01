<html>
<head>
<title> SPICE HUB </title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" type="text/css" href="slider.css">
	<link rel="stylesheet" type="text/css" href="cat.css">
	<link rel="stylesheet" type="text/css" href="footer.css">
	
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link  rel="icon" href="C:\Users\Ashish\Desktop\spicehub\logo1 (1).ico" type="image/ico" size="16*16">

<script>
		window.onload=function()
		{
			document.getElementById('loader').style.display="none";
			document.getElementById('content').style.display="block";
		}
	</script>
	
	
	<style>
			#loader
			{
			border: 0px solid red;
			position: absolute;
			margin: auto;
			top: 0;
			bottom: 0;
			right: 0;
			left: 0;
			width: 100px;
			height: 100px;
			}
			
			#loader img
			{
				width: 100px;
			
			
			}
			
			
			#content
			{
				display: none;
			}

	</style>

</head>
<div class="content">
<!---code for navigation bar--->
	<div id= "Menu">
<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="#">Menu</a>
		<ul>
			<li><a href="vegthali.html" > Veg Thali</a> 
			<li><a href="chinese.html"> Chinese</a> 
			<li><a href="chinese.html"> South Indian</a>
			<li><a href="Fastfood.html"> Fast food</a> 
			<li><a href="bevrages.html"> Bevrages</a>
			<li><a href="chaicoffee.html"> Chai-Coffee </a> 
		</ul>
		</li>
		<li><a href="about.html"> About </a></li>
		<li><a href="Order now.php"> Order </a></li>
		<li><a href="contact.php"> Contact </a></li>
		</ul>
</div>
<!---code for navigation bar--->
<!---code for slider--->
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<div id="loader">
	<img src="Spinner-5.gif">
	  
</div>



<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src=" brso.jpg" alt="i1" width="100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="3e666a307990dfc3f3f379c4a66cc65d.jpg" width="100%" >
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="913663 (1).jpg" width="100%" >
  <div class="text"></div>
</div>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="Pizza-pie-tomatoes-oil_2880x1800.jpg" width="50%" style="width:100%">
  <div class="text"></div>
</div>




</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<!---code for slider--->
<br>
<h1 align="center">  TOP FOOD ITEMS OF CANTEEN </h1>
</br>


<!---code for categary--->
<div class="cat">

	<div class="cat_pro"><img src="samosa.jfif" width="100%" height="70%">
	
		<div class="starr">
		<span class="fa fa-star checked"></span>
		<span class="fa fa-star checked"></span>
		<span class="fa fa-star checked"></span>
		<span class="fa fa-star checked"></span>
		<span class="fa fa-star "></span>
		</div>
		
		<div class="abc">
			<p>Samosa &nbsp<b>Rs.20</b></p>
		</div>
		
		<div class="btn">
		<a href="Order now.php"><input type="button" value="Order Now"></a>
		</div>
	</div>
	
	
	<div class="cat_pro"><img src="breadpakoda.jfif" width="100%" height="70%">
	<div class="starr">
		<span class="fa fa-star checked"></span>
		<span class="fa fa-star checked"></span>
		<span class="fa fa-star checked"></span>
		<span class="fa fa-star checked"></span>
		<span class="fa fa-star "></span>
		</div>
		
		<div class="abc">
			<p>Bread Pakoda &nbsp<b>Rs.20</b></p>
		</div>
	
		<div class="btn">
		<a href="Order now.php"><input type="button" value="Order Now"></a>
		</div>
	</div>
	<div class="cat_pro"><img src="Dosa.jpg" width="100%" height="70%">
	<div class="starr">
		<span class="fa fa-star checked"></span>
		<span class="fa fa-star checked"></span>
		<span class="fa fa-star checked"></span>
		<span class="fa fa-star checked"></span>
		<span class="fa fa-star "></span>
		</div>
		
		<div class="abc">
			<p>Masala Dosa &nbsp<b>Rs.100</b></p>
		</div>

		<div class="btn">
		<a href="Order now.php"><input type="button" value="Order Now"></a>
		</div>
	</div>

	</div>

<div class="cat">

	<div class="cat_pro"><img src="pasta-02.jpg" width="100%" height="70%"> 
	<div class="starr">
		<span class="fa fa-star checked"></span>
		<span class="fa fa-star checked"></span>
		<span class="fa fa-star checked"></span>
		<span class="fa fa-star checked"></span>
		<span class="fa fa-star "></span>
		</div>
		
		<div class="abc">
			<p>Pasta &nbsp<b>Rs.80</b></p>
		</div>
	
		<div class="btn">
		<a href="Order now.php"><input type="button" value="Order Now"></a>
		</div>
	</div>
	
	<div class="cat_pro"><img src="Grilled sandwich.jfif" width="100%" height="70%"> 
	<div class="starr">
		<span class="fa fa-star checked"></span>
		<span class="fa fa-star checked"></span>
		<span class="fa fa-star checked"></span>
		<span class="fa fa-star checked"></span>
		<span class="fa fa-star "></span>
		</div>
		
		<div class="abc">
			<p>Sandwich &nbsp<b>Rs.80</b></p>
		</div>
		
		<div class="btn">
		<a href="Order now.php"><input type="button" value="Order Now"></a>
		</div>
	</div>
	
	<div class="cat_pro"><img src="Chole-bhature-2201.jpg" width="100%" height="70%"> 
	<div class="starr">
		<span class="fa fa-star checked"></span>
		<span class="fa fa-star checked"></span>
		<span class="fa fa-star checked"></span>
		<span class="fa fa-star checked"></span>
		<span class="fa fa-star "></span>
		</div>
		
		<div class="abc">
			<p>Chole-Bhature &nbsp<b>Rs.50</b></p>
		</div>
		
		<div class="btn">
		<a href="Order now.php"><input type="button" value="Order Now"></a>
		</div>
	</div>
	</div>
	



<div class="cat">

	<div class="cat_pro"><img src="Vegetable-Masala-Maggi-Recipe-Step-By-Step-Instructions-scaled.jpg" width="100%" height="70%"> 
	<div class="starr">
		<span class="fa fa-star checked"></span>
		<span class="fa fa-star checked"></span>
		<span class="fa fa-star checked"></span>
		<span class="fa fa-star checked"></span>
		<span class="fa fa-star "></span>
		</div>  
		
		<div class="abc">
			<p>Maggie &nbsp<b>Rs.40</b></p>
		</div>     
	
		<div class="btn">
		<a href="Order now.php"><input type="button" value="Order Now"></a>
		</div>
	</div>
	
	<div class="cat_pro"><img src="7_Pizza.jpg" width="100%" height="70%"> 
	<div class="starr">
		<span class="fa fa-star checked"></span>
		<span class="fa fa-star checked"></span>
		<span class="fa fa-star checked"></span>
		<span class="fa fa-star checked"></span>
		<span class="fa fa-star "></span>
		</div>
		
		<div class="abc">
			<p>Pizza &nbsp<b>Rs.150</b></p>
		</div>
		
		<div class="btn">
		<a href="Order now.php"><input type="button" value="Order Now"></a>
		</div>
	</div>
	<div class="cat_pro"><img src="FRENCH-FRIES.jpg" width="100%" height="70%"> 
	<div class="starr">
		<span class="fa fa-star checked"></span>
		<span class="fa fa-star checked"></span>
		<span class="fa fa-star checked"></span>
		<span class="fa fa-star checked"></span>
		<span class="fa fa-star "></span>
		</div>
		
		<div class="abc">
			<p>French Fries &nbsp<b>Rs.50</b></p>
		</div>
		
		<div class="btn">
		<a href="Order now.php"><input type="button" value="Order Now"></a>
		</div>
	</div>
	</div>


<!---end code for categary--->
<br>
<!---code for footer--->
<div class="footer">
	<div class="footerb">
		<b>Quick Link</b>
		<br><br><br>
		<a href="index.html"> <p style="color:white"  <b> Home </b> </p> </a>
		<a href="About.html"> <p style="color:white" <b> About </b> </p> </a>
		<a href="Order now.php">  <p style="color:white" <b> Order </b> </p> </a>
     	<a href="contact.php"> <p style="color:white"  <b> Contact </b> </p> </a>
		<br>
		<br>
	</div>
	
	<div class="footerb">
	<b>Menu</b>
		<br><br><br>
		<a href="vegthali.html"> <p style="color:white"> Veg Thali </b> </p> </a>
		<a href="chinese.html"> <p style="color:white"> Chinese </b> </p> </a>
		<a href="south indian.html"> <p style="color:white"> South Indian </p> </a>
		<a href="fastfood.html"> <p style="color:white"> Fast Food </p> </a>
		<a href="bevrages.html"> <p style="color:white"> Bevrages </p> </a>
        <a href="chaicoffee.html"> <p style="color:white"> Chai-Coffee </p> </a>
	</div>
	
	<div class="footerb">
	<b>Address</b>
		<br><br><br>
		Address:<br>
		7,SPICE HUB CAFE<br>
		Email: spicehub@gmail.com<br>
		Mobile: 9408671001<br>
		Time: 9:00 AM to 4:00 PM<br>
	</div>
	
	<div class="footerb">
	<b>Directions</b>
		<br><br><br>
	<div class="footerb">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117320.75423609134!2d72.52015856749952!3d23.23312998206296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395c28b7ae13ad99%3A0x436681625459dada!2sSwarrnim%20Startup%20%26%20Innovation%20University!5e0!3m2!1sen!2sin!4v1616573141613!5m2!1sen!2sin" width="100%" height="120" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</div>
	
</div>
<!---code for footer--->



</div>
</body>
</html> 
</html>
