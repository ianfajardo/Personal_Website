<!DOCTYPE html>
<html>
	<head>
		<title>Ian Fajardo</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap -->
		<link href="assets/css/bootstrap.css" rel="stylesheet" media="screen">
		<!-- Custom Styles -->
		<link href="style.css" rel="stylesheet" media="screen">
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
	      <script src="../../assets/js/html5shiv.js"></script>
	      <script src="../../assets/js/respond.min.js"></script>
	    <![endif]-->
	    
		
	</head>
	<body>
		<div class="container">
			<nav class="top-nav pull-right">
				<ul>
					<li><a href="">Portfolio</a></li>
					<li><a href="">About</a></li>
					<li><a href="">Resume</a></li>
					<li><a href="">Contact</a></li>
				</ul>
			</nav>
		</div>

		<div class="masthead">
			<div class="container">
					<div class="wrapper">
						<img src="assets/img/logo.png">
						<div class="headline">
							<h1>I make <div class="green">ideas</div> come to <div class="blue">life.</div></h1>
							<h1>I am <div class="red">Ian Fajardo.</div></h1>
						</div>
					</div>
				
			</div>
		</div>

		<div class="portfolio">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Portfolio</h2>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus fermentum libero dui, non tempor lectus ornare vel. Nullam aliquam ligula in libero sollicitudin fermentum. Aenean mollis eu turpis nec condimentum. Nullam ultrices urna id tellus ornare, quis varius sem elementum. Vestibulum tempus libero velit, nec congue leo pharetra dictum. Vivamus id lectus felis. Suspendisse potenti. Fusce mollis odio ac diam blandit rhoncus. Etiam in lacinia purus, in feugiat enim. Fusce blandit id sapien non sollicitudin. Aliquam ac pellentesque lacus, ac sodales purus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-4">
					<h1>About</h1>
				</div>
				<div class="col-md-6 col-sm-8">
					<h1>Blog</h1>
				</div>
			
			</div>
			<div class="row">
				<div class="col-md-12">
					<h1>Photos</h1>
					<div id="instafeed"></div>
				</div>
			</div>
		
		</div>

		<script src="assets/js/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="assets/js/instafeed.min.js"></script>
		<script type="text/javascript" src="assets/js/init.js"></script>
		<script type="text/javascript">
			/* 
			*	We would normally recommend that all JavaScript is kept in a seperate .js file,
			* 	but we have included it in the document head for convenience.
			*/
			
			// INSTANTIATE MIXITUP
		
			$(function(){
     
			    $('#Grid').mixitup();
			     
			});
			
		</script>
	</body>
</html>