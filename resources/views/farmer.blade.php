
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>farmcorps</title>
	<meta name="description" content="farmcorps: making farm inputs available">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous"/>

	<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
	<style type="text/css">
		#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
		/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
           We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
	</style>


<link rel="icon" href="{{asset('farmer/images/icon.jpg')}}">
<link href="{{asset('farmer/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all">
<link href="{{asset('farmer/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Farmcorps: Improving Smallholder Farmers' Acess to Market and Capital" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic' rel='stylesheet' type='text/css'>
<script src="{{asset('farmer/js/jquery-1.11.1.min.js')}}"></script>
 <link rel="stylesheet" href="{{asset('farmer/css/flexslider.css')}}" type="text/css" media="screen" />
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="{{asset('farmer/js/move-top.js"')}}"></script>
<script type="text/javascript" src="{{asset('farmer/js/easing.js')}}"></script>


 <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
		jQuery(document).ready(function () {
			$("form").submit(function (event) {
				event.preventDefault();
				var email=$("#email").val();;
				var submit =$("#submit").val();
				$(".form-message").load("controller.php",{
					email:email,
					submit:submit

				});
			});
		});

		jQuery(document).ready(function () {
			$("#join").click(function (event) {
				//event.preventDefault();
				var name=$("#orangeForm-name").val();;
				var email =$("#orangeForm-email").val();
				var phone =$("#orangeForm-pass").val();
				var category =$("#category").val();
				var  join =$("#join").val();
				$(".form-message").load("controller.php",{
					name:name,
					email:email,
					phone:phone,
					category:category,
					join:join


				});
			});
		});
	</script>
<!---End-smoth-scrolling---->
<link rel="stylesheet" href="css/swipebox.css">
			<script src="js/jquery.swipebox.min.js"></script> 
			    <script type="text/javascript">
					jQuery(function($) {
						$(".swipebox").swipebox();
					});
				</script>
				<!--Animation-->
<script src="{{asset('farmer/js/wow.min.js')}}"></script>
<link href="{{asset('farmer/css/animate.css')}}" rel='stylesheet' type='text/css' />
<script>
	new WOW().init();
</script>
<!---/End-Animation---->


	<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/408a04fe926fbf643d008c93d/250312f74d14b6d1f9e268cbb.js");</script>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
</head>
<body>
  <div class="header" id="home">
		<div class="container">
		<div class="header-top">
		<div class="top-menu">
		<span class="menu"><img src="images/nav.png" alt=""/> </span>
		<ul>
   	<li><a href="/" class="active">home</a></li><label>/</label>
    <li><a href="#">About</a></li><label>/</label>
   	<li><a href="#">blog</a></li><label>/</label>
   	<li><a href="#">Contact</a></li>
        <li id="signing"><a  class="btn btn-outline-success" href="/login">Sign In</a></li>
        <li id="signingUp" ><a  class="btn btn-outline-success" href="/login">Sign Up</a></li>
    </ul>
     <!-- script for menu -->
				
		 <script>
		 $("span.menu").click(function(){
		 $(".top-menu ul").slideToggle("slow" , function(){
		 });
		 });
		 </script>
	<!-- //script for menu -->
     </div>
	<div class="search">
						<img src="{{asset('farmer/images/logo.png')}}" style="width:206px; height:50px">
					</div>

		<div class="clearfix"></div>

	
	</div>
	<div class="logo wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
		<a href="/">Improving Smallholder Farmers' Access to Quality Farm Inputs</a>
		</div>
		
		
<!--Modal class-->
<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
	<div class="modal-content">
		<div class="modal-header">
			<h4 class="modal-title w-100 font-weight-bold">Choose A Category</h4>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>

				<div class="modal-body">
						<div class="card-content clearfix">

						  <div class="card left-half">

								<div class="ui-circular">
										<i class="circular-icon fa fa-credit-card"></i>
										 
									  </div>
									  
									  <p><a class="btn btn-success" href="https://farmcorps-portal.appspot.com"> Fund Farmer <i class="right long arrow icon fa fa-arrow-right"></i></a></p>
							 
						  </div>

							<div class="card left-half">

								<div class="ui-circular">
									<i class="circular-icon fa fa-registered"></i>

								</div>

								<p><a class="btn btn-success" href="/"> Register Farmer <i class="right long arrow icon fa fa-arrow-right"></i></a></p>

							</div>

						 

						 <div class="card left-half">

								<div class="ui-circular">
										<i class="circular-icon fa fa-industry"></i>
										 
									  </div>
									  
									  <p><a class="btn btn-success" href="/"> Food Companies <i class="right long arrow icon fa fa-arrow-right"></i></a></p>
							
						  </div>

						  

						 <!--<div class="card left-half">-->

								<!--<div class="ui-circular">-->
										<!--<i class="circular-icon fa  fa-truck"></i>-->
										 <!---->
									  <!--</div>-->
									  <!---->
									  <!--<p><a class="btn btn-success" href="https://farmcorps-portal.appspot.com/signup/agrodealer"> Be an Agro Dealer<i class="right long arrow icon fa fa-arrow-right"></i></a></p>-->

						  <!--</div>-->
						 
						</div>
					  </div>






		<div class="modal-footer d-flex justify-content-center">


			<!-- this button is no longer useful -->

			

			<div class="form-message text-left">

			</div>
		</div>



	</div>



	</div>
</div>
</div>


		  <!--<div class="text-center">-->
			  <!--<a href="/farmcorpsdrive.html" id="join-us" class="btn btn-success btn-default btn-rounded mb-4" >Join Us</a>-->
		  <!--</div>-->


<div class="text-center">
<a href="" id="join-us" class="btn btn-success btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalRegisterForm">Join Us</a>
</div>
		
		
	
		

   

	<!--end of modal-->
	<div class="header-bottom">
	<div class="header-grids">


	
<div class="clearfix"></div>
	</div>
</div>


</div>

</div><!--Header ends-->

<div class="container" id="header-2">
	<!-- <div class="row"> -->
			<!-- header-grid -->
	<div class="col-md-4 header-grid text-center mw-100">
		<div class="header-img2 wow fadeInDownBig animated animated" data-wow-delay="0.4s">
		<img src="{{asset('farmer/images/icon5.png')}}" class="img-responsive" alt="/">
					<h4>Finance For Inputs</h4>
					<p>Our platform helps agri-financiers (individuals, DFIs,
							<br>food companies, 
							<br>government agencies) to finance inputs & 
						 operations for farmers. 
						 
						 
					</p>
		</div>
	</div>
			<!-- header-grid -->

	<div class="col-md-4 header-grid text-center mw-100">
		<div class="header-img3 wow fadeInUpBig animated animated" data-wow-delay="0.4s">
		<img src="{{asset('farmer/images/icon7.png')}}" class="img-responsive" alt="/">
					<h4>Data Driven Extension</h4>
					<p>We provide onsite and mobile data-driven 
						extension services for smallholder farmers 
						to help them grow quality produce that meet off-takers demand.
					</p>
		</div>
	</div>
					<!-- header-grid -->
	<div class="col-md-4 header-grid text-center mw-100">
		<div class="header-img4 wow bounceInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<img src="{{asset('farmer/images/icon6.png')}}" class="img-responsive" alt="/">
					<h4>Access To Markets</h4>
					<p>We help smallholder farmers sell their produce at very good
						 prices to agro-processing and food companies. 
						 Farmers get markets even before they start planting.
						</p>
		</div>
	</div>
	<!-- </div> -->
</div>


		 <div class="content">
			<div class="about-section">
				<div class="container">
					<h3>How It Works</h3>
				<div class="about-grids">
				<div class="col-md-5 about-img wow bounceInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
			<img src="{{asset('farmer/images/img1.jpg')}}" class="img-responsive" alt="/" >
				</div>
					<div class="col-md-7 about-grid wow bounceInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
							
								<h4>     1. Fund Your Account     </h4>	
								<p>Use our payment systems to easily put funds in your account to be used for 
								input purchase for farmers. Our system allows you to calculate how much funds 
								is needed for each purchase that you want to make for farmers.
									</p>	
							
								 <h4>   2. Upload your farmers list    </h4>  
								<p>You provide us with the list of your farmers that you want to purchase inputs 
									for. We also have farmers that you can fund. You can upload an Excel sheet 
									containing your farmers’ list or you can register them directly on our platform
								    </p>	
								  <h4>  3. Send funds as tokens to farmers.   </h4>
								<p>When you are done with your farmers’ list, you can then select the farmers’ whether 
									from your list or ours that you want to purchase specific inputs for and then send 
									them the funds as tokens.
									</p>
					
				</div>
				<div class="clearfix"></div>
				</div>
				</div>
		   </div>
		   <div class="service-section">
				<div class="container-fluid">
					<h3 id="value"> Our Value Proposition</h3>
					<div class="row">
							<div class="card card1 card-service col-md-3  service-grid wow bounceInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;" style="width: 18rem;">
									<h4 class="text-center">Agro-Processing/Food And Beverage Co.</h4><br>
								<!-- <img src="images/icon8.png" class="img-responsive card-img-top" alt="/"> -->
									
									<div class="card-body">
									  <h3 class="card-title text-center">Quality Raw Materials From Farms</h3><br>
									  <p class="card-text">
										<p>Our goal is to get quality raw material supplies 
											from farms for your production which
											begins with quality farm inputs that you finance  
											for farmers. We facilitate mutually beneficial 
											relationship between you and clusters of farmers that ensure a sustainable
											supply of quality raw materials to your factories.</p>
									</div>
								  </div>

													  <div class="card card2 card-service col-md-3 service-grid wow bounceInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;" style="width: 18rem;">
															<h4 class="text-center">Donors/Government/Social Lenders</h4><br>
															<!-- <img src="images/icon9.png" class="img-responsive" alt="/"> -->
															
															<div class="card-body">
															  <h3 class="card-title text-center">Make Visible Impact For Food Security</h3><br>
															  <p class="card-text">
																<p>We provide financial technology and last mile distribution 
																	systems that enable you reach smallholder farmers with your 
																	interventions  as we work together to make our farmers, 
																	communities and countries food secure. We also provide 
																	you with impact reports of your interventions.
																</p></p>
															</div>
														  </div>
													
								
													  <div class="card card3 card-service col-md-3 service-grid wow bounceInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;" style="width: 18rem;">
															<h4 class="text-center">Agro-Input Dealers/Distributors</h4><br>
															<!-- <img src="images/icon3.png" class="img-responsive" alt="/"> -->
															
															<div class="card-body">
															  <h3 class="card-title text-center">Reach A Wide Network Of Customers</h3><br>
															  <p class="card-text">
																<p> We provide access to a growing wide network of farmers 
																	(buyers) and their associations with opportunities for 
																	repeatable sales. We are your partners for reaching 
																	smallholder farmers wherever they are. We also provide 
																	sales forecast for the season so you can stock your shops  
																	ahead</p></p>
															</div>
														  </div>
		
								<div class="card card4 card-service col-md-3 service-grid wow bounceInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;" style="width: 18rem;">
										<h4 class="text-center">Farmers/Farmers Associations</h4><br>
										<!-- <img src="images/icon1.png" class="img-responsive" alt="/"> -->
										
										<div class="card-body">
										  <h3 class="card-title text-center">Get Easy Financing For Your Farm Operations</h3><br>
										  <p class="card-text">
											<p>We provide unparalleled access to formal markets with finance for 
												your farm production even before you start planting. We support 
												farmers all the way from planning the season till your produce 
												is sold after harvest. So, you should recommend us to your outgrower 
												schemes.</p></p>
										</div>
									  </div>
		
					<div class="clearfix"></div>
					</div>
		   </div>
			 </div>
			 
			 <div class="news-section">
				<div class="container">
				<h3>Our Sponsors</h3>
				<div class="news-grids">
					 <div class="col-md-6 news-grid wow bounceInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
							<img src="{{asset('farmer/images/inc.png')}}" class="img-responsive" alt="/" >
							
						</div>
						<div class="col-md-6 news-grid wow fadeInDown Big animated animated" data-wow-delay="0.4s">
						<img src="{{asset('farmer/images/british.png')}}" class="img-responsive" alt="/">
						 
					</div>
					
					 <div class="clearfix"></div>
					 </div>
				</div>
				</div>


		   <div class="work-section wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
		   <div class="container">
		   <h3>our latest works</h3>
		   <div class="latest-grids">
		   <div class="latest-grid1">
			  <div class="col-md-3 latest-grid work">
			  	<a href="{{asset('farmer/images/img2.png')}}" class="swipebox"><img src="{{asset('farmer/images/img2.png')}}" class="img-responsive" alt="/">
		   <div class="textbox">
						<img src="{{asset('farmer/images/magnify.png')}}" class="img-responsive" alt="/">
						</div>
						</div></a>
		      <div class="col-md-3 latest-grid work">
			  	<a href="{{asset('farmer/images/img3.png')}}" class="swipebox"><img src="{{asset('farmer/images/img3.png')}}"  class="img-responsive" alt="/">
		   <div class="textbox">
						<img src="{{asset('farmer/images/magnify.png')}}" class="img-responsive" alt="/">
						</div>
						</div></a>
		      <div class="col-md-3 latest-grid work">
			  	<a href="{{asset('farmer/images/img4.png')}}" class="swipebox"><img src="{{asset('farmer/images/img4.png')}}"  class="img-responsive" alt="/">
		   <div class="textbox">
						<img src="{{asset('farmer/images/magnify.png')}}" class="img-responsive" alt="/">
						</div>
						</div></a>
		      <div class="col-md-3 latest-grid work">
			  	<a href="{{asset('images/img5.jpg')}}" class="swipebox"><img src="{{asset('farmer/images/img5.jpg')}}" class="img-responsive" alt="/">
		   <div class="textbox">
						<img src="{{asset('farmer/images/magnify.png')}}" class="img-responsive" alt="/">
						</div>
						</div></a>
		   <div class="clearfix"></div>
		   </div>
		   <div class="latest-grid2">
			  <div class="col-md-3 latest-grid work">
			  	<a href="{{asset('farmer/images/img6.jpg')}}" class="swipebox"><img src="{{asset('farmer/images/img6.jpg')}}" class="img-responsive" alt="/">
		   <div class="textbox">
						<img src="{{asset('farmer/images/magnify.png')}}" class="img-responsive" alt="/">
						</div>
						</div></a>
		      <div class="col-md-3 latest-grid work">
			  	<a href="{{asset('farmer/images/img7.png')}}" class="swipebox"><img src="{{asset('farmer/images/img7.png')}}" class="img-responsive" alt="/">
		   <div class="textbox">
						<img src="{{asset('farmer/images/magnify.png')}}" class="img-responsive" alt="/">
						</div>
						</div></a>
		      <div class="col-md-3 latest-grid work">
			  	<a href="{{asset('farmer/images/img8.jpg')}}" class="swipebox"><img src="{{asset('farmer/images/img8.jpg')}}" class="img-responsive" alt="/">
		  <div class="textbox">
						<img src="{{asset('farmer/images/magnify.png')}}" class="img-responsive" alt="/">
						</div>
						</div></a>
		      <div class="col-md-3 latest-grid work">
			  	<a href="{{asset('farmer/images/img9.png')}}" class="swipebox"><img src="{{asset('farmer/images/img9.png')}}"  class="img-responsive" alt="/">
		   <div class="textbox">
						<img src="{{asset('farmer/images/magnify.png')}}" class="img-responsive" alt="/">
						</div>
						</div></a>
		   <div class="clearfix"></div>
		   </div>
		   <div class="clearfix"></div>
		   </div>
		   </div>
		   </div>
		   <div class="news-section">
		   <div class="container">
		   <h3>BLOG</h3>
		   <div class="news-grids">
					<div class="col-md-4 news-grid wow bounceInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<img src="{{asset('farmer/img-blog/1.png')}}" class="img-responsive" alt="/">
						<h4><a href="#">Returning Nigeria to the Golgen Age Of Agriculture</a></h4>
					<p class="date">21, March, 2019</p>
						<p>Nigeria’s once thriving agricultural industry has now become a historical nostalgia. Prior to Nigeria’s discovery of oil in 1956 and the oil boom in the 1970s...  </p>
                          <a href="#" class="button hvr-shutter-in-vertical">read more</a>
						  </div>
					<div class="col-md-4 news-grid wow fadeInDown Big animated animated" data-wow-delay="0.4s">
					<img src="{{asset('farmer/img-blog/mm.png')}}" class="img-responsive" alt="/">
						<h4><a href="#">Agriculture, a key element in sustaning Nigeria.</a></h4>
					<p class="date">22, March, 2019</p>
						<p>Agriculture has always been a sustainability driver before the discovery of oil in Nigeria and will always remain a key element in sustaining the Nigerian economy. </p>
						   <a href="#" class="button hvr-shutter-in-vertical">read more</a>
						</div>
					<div class="col-md-4 news-grid wow bounceInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<img src="{{asset('farmer/img-blog/fh.png')}}" style="height: 500% !important;" class="img-responsive" alt="/">
	        		<h4><a href="#">HOW AFRICA CAN FEED THE WORLD BY 2050</a></h4>
				<p class="date">25, March, 2019 </p>
							<p>As Africa swings to Agriculture for long haul adequacy and sustenance, the world is additionally showing enthusiasm for Africa for food production. By the year 2050, universal spectators anticipate the capability of Africa turning into the food bedrock of the world. </p>
							  <a href="#" class="button hvr-shutter-in-vertical">read more</a>
							</div>
					<div class="clearfix"></div>
					</div>
		   </div>
		   </div>
		   </div>



  <div class="categories-section">
				  
		   <div class="container">
					
		   <div class="footer-grids">
			   <div class="row">
				   <div class="col-md-4 col-lg-4 cat wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					   <h3>contact</h3>
					   <ul>
						   <li><i class="phone"></i></li>
						   <li><p>+234-90-1670-9230</p></li>
					   </ul>
					   <ul>
						   <li><i class="smartphone"></i></li>
						   <li><p>No 5 Emina Crescent</p>
							   <p> Lagos, Nigeria</p></li>
					   </ul>
					   <ul>
						   <li><i class="message"></i></li>
						   <li>
							   <a href="https://mail.google.com/mail/u/0/?view=cm&fs=1&tf=1&to=info@farmcorps.net">Farmcorps</a>
							   <!--https://mail.google.com/mail/u/0/?view=cm&fs=1&tf=1&to=target@email.com&subject=MISSED%20CALL%20EZTRADER&body=Hello%2C%0A%0AI%20tried%20contacting%20you%20today%20but%20you%20seem%20to%20have%20missed%20my%20call.%20%0A%0APlease%20return%20my%20call%20as%20soon%20as%20you%E2%80%99re%20available.%20%0A%0AIn%20any%20case%2C%20I%20will%20try%20ringing%20you%20at%20a%20later%20time.%0A%0A%0ATy%2C%0A%0A%0A%0A-->
						   </li>
					   </ul>
				   </div>

				   <div class="text-right col-md-8 col-lg-8 cat wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					   <!--<h4 class="text-left">Sign up to our newsletter</h4>-->
					   <!--<p  class="text-left">Subscribe for a monthly recap of the latest Farmcorps features and agriculture industry insights.</p>-->
					   <!--&lt;!&ndash;<div class="">&ndash;&gt;-->
					   <!--<form action="controller.php" method="post">-->
					   <!---->
					   <!--<input id="email" type="email" name="email" class="form-control textbox" placeholder="Your Email">-->
					   <!--<button id="submit" type="submit" name="submit" class="btn btn-outline-success  ">Subscribe</button>-->
					   <!---->

					   <!--</form>-->
					   <!--<div class="text-left form-message">-->

					   <!--</div>-->
					   <!--</div>-->
					   <div id="mc_embed_signup">
						   <form action="https://gmail.us3.list-manage.com/subscribe/post?u=408a04fe926fbf643d008c93d&amp;id=d51b843b15" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
							   <div id="mc_embed_signup_scroll">
								   <h2>Subscribe</h2>
								   <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
								   <div class="mc-field-group">
									   <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
									   </label>
									   <input type="email" value="" name="EMAIL" class="required email form-control" id="mce-EMAIL">
								   </div>
								   <div id="mce-responses" class="clear">
									   <div class="response" id="mce-error-response" style="display:none"></div>
									   <div class="response" id="mce-success-response" style="display:none"></div>
								   </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
								   <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_408a04fe926fbf643d008c93d_d51b843b15" tabindex="-1" value=""></div>
								   <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
							   </div>
						   </form>
					   </div>
				   </div>
			   </div>
			



		 <div class="clearfix"></div>
		 </div>
		  </div>
		   
		   </div>
		   <div class="footer-section">
		   <div class="container">
		   <div class="footer-top">
		 <div class="social-icons wow bounceInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
		<a href="https://www.facebook.com/farmcorpsHQ/"><i class="icon1"></i></a>
		<a href="https://mobile.twitter.com/farmcorps_"><i class="icon2"></i></a>
		<a href="https://www.instagram.com/farmcorps/" ><img src="{{asset('farmer/images/Instagram.png')}}" class="icon3"></a>
		
		</div>
		</div>
		 <div class="footer-middle wow fadeInDown Big animated animated" data-wow-delay="0.4s">
		 <div class="bottom-menu">
      <ul>
   	<li><a href="/l">home</a></li>
    <li><a href="#">About</a></li>
   	<li><a href="#">blog</a></li>
   	<li><a href="#">Contact</a></li>
    </ul>
		</div>
		</div>
		<div class="footer-bottom wow bounceInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
									<p> Copyright &copy;2019  All rights  Reserved</a></p>
									</div>
					<script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
				</div>
		   </div>
  <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
  <script>
	  window.cookieconsent.initialise({
		  "palette": {
			  "popup": {
				  "background": "#000"
			  },
			  "button": {
				  "background": "#f1d600"
			  }
		  }
	  });
  </script>
  <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
  <!--End mc_embed_signup-->
 </body>
</html> 