
<!DOCTYPE html>
<html lang="en">
<head>
<title>HOTEL DEFORMEN</title>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

</head>
<body>


<div class="w3_navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<h1><a class="navbar-brand" href="index.php">HOTEL<span>DEFORMEN</span><p class="logo_w3l_agile_caption">Ugliest Hotel in the world</p></a></h1>
				</div>
				
				<div class="navbar-right">
					<nav class="menu menu--iris">
						<ul class="nav navbar-nav menu__list">
							<li><a href="index.php" class="menu__link">Home</a></li>
							<li><a href="#about" class="menu__link">About</a></li>
						</ul>
					</nav>
				</div>
			</nav>

		</div>
	</div>

		<!-- banner -->
	<div id="home" class="w3ls-banner">
		<!-- banner-text -->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div class="w3layouts-banner-top">

							<div class="container">
								<div class="agileits-banner-info">
								<h4>HOTEL DEFORMEN</h4>
									<h3>We know you'll love this</h3>
										<p>Welcome to our hotels</p>
									<div class="agileits_w3layouts_more menu__item">
				<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
			</div>
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top1">
							<div class="container">
								<div class="agileits-banner-info">
								<h4>HOTEL DEFORMEN</h4>
									<h3>Stay for as long as you want</h3>
										<p>Friends and families will enjoy</p>
									<div class="agileits_w3layouts_more menu__item">
				<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
			</div>
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top2">
							<div class="container">
								<div class="agileits-banner-info">
								<h4>HOTEL DEFORMEN</h4>
								<h3>A hotel for everyone</h3>
										<p>Get accommodation today</p>
									<div class="agileits_w3layouts_more menu__item">
											<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
										</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			
		</div>
	</div>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4>HOTEL  <span>DEFORMEN</span></h4>
										<img src="images/1.jpg" alt=" " class="img-responsive">
										<h5>We know you'll love this</h5>
										<p>A hotel for everyone who needs or wants a soothing environment, a beautiful view over the city, delicious dishes, and outstanding services. Visit us and enjoy our exquisite hotel.</p>
									</div>
								</div>
							</div>
						</div>


<div id="availability-agileits">
	<div class="col-md-12 book-form-left-w3layouts">
		<a><h2>ROOM RESERVATION</h2>
	</div>
	<div class="clearfix"> </div>
</div>

	<div class="banner-bottom">
		<div class="container">	
			<div class="agileits_banner_bottom">
				<h3><span>Experience a good stay, enjoy fantastic offers</span> Find our friendly welcoming reception</h3>
			</div>
			<div class="w3ls_banner_bottom_grids">
				<ul class="cbp-ig-grid">
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_case"></span>
							<h4 class="cbp-ig-title">Holds Bussiness Meetings</h4>
							<span class="cbp-ig-category"></span>							
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_cam"></span>
							<h4 class="cbp-ig-title">Great View For Taking Pictures</h4>
							<span class="cbp-ig-category"></span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_tree"></span>
							<h4 class="cbp-ig-title">Nature-friendly premises</h4>
							<span class="cbp-ig-category">SUN RISE</span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_pay"></span>
							<h4 class="cbp-ig-title">Lots of payment options</h4>
							<span class="cbp-ig-category"></span>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>


			<div class="copy">
		        <p>© 2017 Hotel Deformen . All Rights Reserved | Design by <a href="index.php">Hotel Deformen</a> </p>
		    </div>

<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

<script src="js/responsiveslides.min.js"></script>
			<script>
						$(function () {
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
			</script>

<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>
</html>