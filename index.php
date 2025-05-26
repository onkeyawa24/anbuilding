
<?php 
	
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>AN BUILDING</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"> 
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/w3.css">
	<style>
		.anNav{ 
			background-image: url(img/background_img/section1_bg.jpg);
			background-size: 100% auto; margin: 0px; padding-top: 6px; width: 98vw; 
		}
		.anContainer{background-color: /*#4499;*/ #0009; margin: 0px; padding: 30px; width: 100vw;}
		.animate1{   max-height: 300px; max-width: 200px;   }
		.animate2{max-height: 300px; max-width: 200px;  }
		 
		.txt2{	font-style: bold; font-size: 2em;}
		.specs{display: inline-flex;  border: 2px solid silver; padding: 10px; border-radius: 10px; }
		.specs:hover{background-color: silver; color: black; cursor: pointer;}
		.specialities{
			text-align: center; width: 100% auto; background-color: white; border-left: 2px solid #FAA420; max-height: 400px; 
		}
		.txt_specs{
			color: white; padding: 5px; font-family: serif; border-bottom: 2px solid white; font-size: 1.5em; background-color: #FAA420;
		}
		.myNavHead{
			padding: 10px; color: white; font-size: 100%;
		}
		.myNavHead1{background-color: #FAA420; color: white; border-radius: 10px; padding: 10px; font-size: 100%}
		p{color: white;}
		.list-right{
			position: absolute; right: 5%; top: 30px; font-size: 1em;
		}
		.home_bg{height: 80px; width: 80px;}
		.myNavHead:hover{border: 2px solid #FAA420; color: white; border-radius: 10px; padding: 10px; cursor: pointer;}
		p{color: white;}
		@media only screen and (max-width: 600px) {.animate1{display: none;}  .animate2{display: none;} .section2{width: 100vw; min-height: 250px;} .txt1{font-size: 70%;} .txt2{font-size: 85%;} .txt3{font-size: 70%;}
		  	.section2 {
			    display: inline-flex; width: 100vw; position:relative; 
			    background-size: cover; background-position: center; min-height: 130px;
			    max-height:200px; min-width: 45px; padding: 0px;
		  	}.main_content{margin-left: 1%; margin-right: 1%;}
		  	.txt1{font-size: 70%;} .txt2{font-size: 85%;} .txt3{font-size: 70%;}
		  	.home_bg{height: 65px; width: 65px;}
		  	.myNavHead1{font-size: 90%; padding-left: 3px; padding-right: 3px;} .myNavHead{font-size: 90%; padding-left: 3px; padding-right: 3px;}
		}
		@media only screen and (max-width: 449px) {.animate1{display: none;}  .animate2{display: none;}
		    .section2 {
			    display: inline-flex; width: 100vw; margin: 2px; position:relative; 
			    background-size: cover; background-position: center; min-height: 180px;
			    min-width: 100px; padding: 0px;
		  	}.txt1{font-size: 70%;} .txt2{font-size: 85%;} .txt3{font-size: 70%;}
		  	.home_bg{height: 60px; width: 60px;}.main_content{margin-left: 1%; margin-right: 1%;}
		  	.myNavHead1{font-size: 90%; padding-left: 3px; padding-right: 3px;} .myNavHead{font-size: 90%; padding-left: 3px; padding-right: 3px;}
	    }
	    @media only screen and (max-width: 400px) {
	    	.main_content{margin-left: 1%; margin-right: 1%; min-height: 150px;}
	    	.txt1{font-size: 70%;} .txt2{font-size: 85%;} .txt3{font-size: 70%;}
		    .animate1{display: none;}  .animate2{display: none;} 
		    .home_bg{height: 50px; width: 50px; position: absolute; left: 6px; top: 6px;}
	    }
	    .myNavHead{font-size: 90%; padding-left: 3px; padding-right: 3px;} .myNavHead1{font-size: 90%; padding-left: 3px; padding-right: 3px;}
	    .section2{
	    	display: flex; justify-content: center; object-fit: fill;
	    	background-image: url(img/background_img/txt_bg.jpg); background-size: 100% auto; padding: 30px;
	    }.main_content{margin-left: 5%; margin-right: 5%;}

/*******************************************************************/
		@media only screen and (min-width: 1600px) {
			.anNav{}
			.home_bg{} 
		}
		@media only screen and (max-width: 1400px) {
			.anNav{}
			.home_bg{}
		}
		@media only screen and (max-width: 1200px) {
			.anNav{max-height: 100px;} 
			 
		}
		@media only screen and (max-width: 1000px) {
			 .anNav{max-height: 80px;} 
			.home_bg{height: 35px; width: auto; position: absolute;left: 5px; top: 3px;}
		}
		@media only screen and (max-width: 800px){
			.list-right{position: absolute; top: 0; right: 2px;}
			.list-right a:not(:first-child) {display: none;}
			.list-right a.icon {
			    float: right;
			    display: block;
			}
			.icon{margin-left: 10px; margin-right: 10px; margin-bottom: 10px; color: white; float: right;}
			.anNav{max-height: 70px;} 
			.home_bg{height: 50px; width: auto;}
		}
		@media only screen and (max-width: 800px){
			.list-right.responsive {width: 100%; padding: 5px; position: absolute; background-color: #1009; color: white; margin-top: 0px; z-index: 1}
		  	.list-right.responsive a.icon {
		    	position: absolute; color: white;
		    	right: 0px; 
		    	top: 0px; z-index: 1;
		  	}
		   
		  	.list-right.responsive a {
		  		margin: 5px;
		    	float: none;
		    	display: block;
		    	text-align: center;
		  	}
		}
		@media only screen and (min-width: 701px) { 
			.fut{display: flex;}
		}
		@media only screen and (max-width: 700px) { 

			 .anNav{max-height: 55px;} .futer{font-size: 10px;} 
			.home_bg{height: 40px; width: auto; position: absolute;left: 5px; top: 3px;}
		}
		@media only screen and (max-width: 600px) { 
			.anNav{max-height: 48px;} .futer{font-size: 10px;} 
			.home_bg{height: 35px; width: auto;position: absolute;left: 5px; top: 3px;}
		}
		@media only screen and (max-width: 550px) { 
			.fut{display: flex; flex-flow: column;}
			.anNav{max-height: 40px;}.futer, .spec , .txt{font-size: 10px;}  
			.home_bg{height: 38px; width: auto;position: absolute;left: 5px; top: 3px;}
		}
		@media only screen and (max-width: 400px) {
			.anNav{max-height: 38px;}.txt{font-size: 9px;} 
			.home_bg{height: 36px; width: auto;position: absolute;left: 5px; top: 3px;}
		@media only screen and (max-width: 300px) {
			.anNav{max-height: 35px;}
			.futer, .spec , .txt{font-size: 8px;} 
			.home_bg{height: 35px; width: auto;position: absolute;left: 5px; top: 3px;}
		}
		.list-right > a > .icon {
		  	display: none;
		}

/*******************************************************************/

	</style>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
	<header>
		<nav class="navbar anNav">
			<div class="container anContainer">
				<!--i class="fa fa-envelope" style="position: absolute; top: 15px; right: 10px; color: white; z-index: 1"></i-->
				<ul class="nav navbar-nav">
					<img src="img/background_img/home_logo.png" alt="LOGO" class="home_bg">
					<div class="list-right" id="myTopnav">
						<a href="#"><span class="myNavHead1">Home</span></a>
						<a href="html/about.php"><span class="myNavHead">About</span></a>
						<a href="html/portfolio.php"><span class="myNavHead">Portfolio</span></a>
						<a href="html/shop.php"><span class="myNavHead">Shop</span></a>
						<a href="html/services.php"><span class="myNavHead">Services</span></a>
						<a href="html/contact.php"><span class="myNavHead">Contacts</span></a>
						<a href="javascript:void(0);" class="icon" onclick="myFunction()">
						    <i class="fa fa-bars"></i>
						</a>
					</div>
				</ul>		
			</div>
		</nav>
	</header>

	<div class="section2">
		<div class="main_content">
			<img src="img/background_img/art1.png" class="animate1">
		</div>
		<div class="main_content">
				<p class="txt1">Welcome to our website</p>
				<p class="txt2">BUILDING WITH PRIDE</p>
				<p class="txt3">We pride ourselves with service and skills.</p>	
		</div class="main_content">	
		<div>
			<img src="img/background_img/art2.png" class="animate2">
		</div> 			
	</div>
	<div>
		<div class="specialities">
			<p class="txt_specs">OUR SPECIALTY</p>
			<div class="specs">
				<span  class="spec">DESIGN </span>
			</div>
			<div class="specs">
				<span class="spec">PROJECT MANAGEMENT </span>
			</div>
			<div class="specs">
				<span class="spec">BUILDING </span>
			</div>
			<div class="specs">
				<span class="spec">INSTALLATION </span>
			</div>
			<br><span class="txt">With lots of experience in Industrial Carpentry, 5 years of Carpentry Journey Work, Education in design project management and Education of Carpentry in general, we stand to specialize in kitchen renovations through installation of build-in cupboards, laminated wooden floor, door installation, tilling and build-in wardrop installation. LEARN MORE ABOUT US </span>
		</div>
	</div>
 	
 	<?php 
 		include("html/footer.php");
 	?>
 	<script>
 		function myFunction() {
		  	var x = document.getElementById("myTopnav");
		  	if (x.className === "list-right") {
		    	x.className += " responsive";
		  	} else {
		    	x.className = "list-right";
		  	}
		}
 	</script>
</body>
</html>
