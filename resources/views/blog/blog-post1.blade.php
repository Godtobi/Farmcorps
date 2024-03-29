<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->


		<title>farmcorps</title>
		<meta name="description" content="farmcorps: making farm inputs available">

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="{{asset('blogasset/css/bootstrap.min.css')}}"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="{{asset('blogasset/css/font-awesome.min.css')}}">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="{{asset('blogasset/css/style.css')}}"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>

		<!-- Header -->
		<header id="header">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a class="logo" href="/">
							<img src="{{asset('blogasset/img/farmcorps.svg')}}" alt="logo">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Mobile toggle -->
					<button class="navbar-toggle">
						<span></span>
					</button>
					<!-- /Mobile toggle -->
				</div>


				<!-- Navigation -->
				<nav id="nav">
					<ul class="main-menu nav navbar-nav navbar-right">
						<li><a href="/">Home</a></li>
						<li><a href="#">About</a></li>

						<li><a href="/blog">Blog</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="/login">Sign Up/Sign In</a></li>
					</ul>
				</nav>
				<!-- /Navigation -->

			</div>
		</header>
		<!-- /Header -->

		<!-- Hero-area -->
		<div class="hero-area section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/mm.png)"></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="hero-area-tree">
							<li><a href="/">Home</a></li>
							<li><a href="/blog">Blog</a></li>

						</ul>
						<h1 class="white-text">Agriculture, a key element in sustaning Nigeria.</h1>
						<ul class="blog-post-meta">
							<li class="blog-meta-author">By : <a href="#">Mojisola Olurotimi</a></li>
							<li>22, March, 2019</li>
							<li class="blog-meta-comments"><a href="#"><i class="fa fa-comments"></i> </a></li>
						</ul>
					</div>
				</div>
			</div>

		</div>
		<!-- /Hero-area -->

		<!-- Blog -->

		<div id="blog" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- main blog -->
					<div id="main" class="col-md-12">

						<!-- blog post -->
						<div class="blog-post">
							<div>
							<p>Agriculture has always been a sustainability driver before the discovery of oil in Nigeria and will always remain a key element in sustaining the Nigerian economy. According to Federal Ministry of Agriculture and Rural Development, the Agricultural sector in Nigeria contributed about 23% of the country’s Gross Domestic Product, having approximately 75% share of non-oil exports earnings in 2015. Majority of the farmers are smallholder farmers living in poverty and  due to lack of developed financial chains and inadequate financing to produce sufficient yield.</p>

							</div>
								<div class="blog-img ">
								<div class="col-md-6">
								<a href="">
									<img  style="width: 90%; height: 1%;" src="{{asset('blogasset/img/m.jpg')}}" alt="">
								</a>
							</div>
							<div class="blog-img col-md-6">
								<a href="">
									<img  style="width: 90%; height: 1%;" src="{{asset('blogasset/img/mmm.png')}}" alt="">
								</a>
								</div>
							</div>
							<br>
							<div>
							<p>Inability to produce sufficient yield has been a major struggle faced by the smallholder farmers because it impedes on their expectation to profit from their produce in a reliable market. Adequate investments in farm input will help in improving yield for smallholders coupled with knowledge and training required for good farming practices, soil testing, utilizing fertilizers and adequate storage for grain once it is harvested.</p>

							<p>This calls for collaborations and partnerships between governments, businesses, financial services, the civil society and the smallholder farmers.  Combined interventions from these stakeholders will make help in improving yield for smallholder farmers which inadvertently makes farming profitable for them.</p>


					


							</div>
							</div>
						<!-- /blog post -->

						<!-- blog share -->
						<div class="blog-share">
							<h4>Share This Post:</h4>
							<a href="facebook.com" class="facebook"><i class="fa fa-facebook"></i></a>
							<a href="twitter.com" class="twitter"><i class="fa fa-twitter"></i></a>
							<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
						</div>
						<!-- /blog share -->

						<!-- blog comments -->
						<div class="blog-comments">
							
						<!-- /blog comments -->
					</div>
					<!-- /main blog -->

					<!-- aside blog -->
					<div class="row">
					<div id="" class="col-md-6">

						<!-- search widget 
						<div class="widget search-widget">
							<form>
								<input class="input" type="text" name="search">
								<button><i class="fa fa-search"></i></button>
							</form>
						</div>
						search widget -->

						<!-- category widget -->
						<div class="widget category-widget">
							<h3>Categories</h3>
							<a class="category" href="#">motivation </a>
							<a class="category" href="#">farm tech</a>
							<a class="category" href="#"> heroes in agriculture</a>
							<a class="category" href="#">Jokes</a>
							<a class="category" href="#">Agriculural facts</a>
						</div>
						<!-- /category widget -->
						</div>

						<!-- posts widget -->
						<div>
						<div class="widget posts-widget col-md-6 pull-right">
							<h3>Recents Posts</h3>

							<!-- single posts -->
							<div class="single-post">
								<a class="single-post-img" href="/blog/1">
									<img src="{{asset('blogasset/img/1.png')}}" alt="">
								</a>
								<a href="/blog/1">Returning Nigeria to the Golgen Age Of Agriculture</a>
								<p><small>By : Job Oyebisi.21 March, 2019</small></p>
							</div>
							<!-- /single posts -->

							<!-- single posts -->
							<div class="single-post">
								<a class="single-post-img" href="/blog/2">
									<img src="{{asset('blogasset/img/mm.png')}}" alt="">
								</a>
								<a href="/blog/2">Agriculture, a key element in sustaning Nigeria.</a>
								<p><small>By : Mojisola Olurotimi .22 March, 2019</small></p>
							</div>
							<!-- /single posts -->
							<div class="single-post">
								<a class="single-post-img" href="/blog/3">
									<img src="{{asset('blogasset/img/fh.png')}}" alt="">
								</a>
								<a href="/blog/3">HOW AFRICA CAN FEED THE WORLD BY 2050</a>
								<p><small>By : Job Oyebisi.25 March, 2019</small></p>
							</div>

							<!-- single posts -->
						
							<!-- /single posts -->

							<!-- single posts -->
							
							<!-- /single posts -->

						</div>
						<!-- /posts widget -->

						<!-- tags widget -->
					
						<!-- /tags widget -->

					</div>
					</div>
					<!-- /aside blog -->

				</div>
				<!-- row -->

			</div>
			<!-- container -->

		</div>
		<!-- /Blog -->

		<!-- Footer -->
		<footer id="footer" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- footer logo -->
					<div class="col-md-6">
						<div class="footer-logo">
							<a class="logo" href="/">
								<img src="{{asset('blogasset/img/farmcorps.svg')}}" alt="logo">
							</a>
						</div>
					</div>
					<!-- footer logo -->

					<!-- footer nav -->
					<div class="col-md-6">
						<ul class="footer-nav">
							<li><a href="/">Home</a></li>
							<li><a href="#">About</a></li>

							<li><a href="/blog">Blog</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</div>
					<!-- /footer nav -->

				</div>
				<!-- /row -->

				<!-- row -->
				<div id="bottom-footer" class="row">

					<!-- social -->
					<div class="col-md-4 col-md-push-8">
						<ul class="footer-social">
							<li><a href="http://www.facebook.com/farmcorpsHQ" class="facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="http://www.twitter.com/farmcorps_" class="twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="http://www.instagram.com/farmcorps" class="instagram"><i class="fa fa-instagram"></i></a></li>

						</ul>
					</div>
					<!-- /social -->

					<!-- copyright -->
					<div class="col-md-8 col-md-pull-4">
						<div class="footer-copyright">
							<span>&copy; Copyright 2018. All Rights Reserved.</span>
						</div>
					</div>
					<!-- /copyright -->

				</div>
				<!-- row -->

			</div>
			<!-- /container -->

		</footer>
		<!-- /Footer -->

		<!-- preloader -->
		{{--<div id='preloader'><div class='preloader'></div></div>--}}
		<!-- /preloader -->


		<!-- jQuery Plugins -->
			<script type="text/javascript" src="{{asset('blogasset/js/jquery.min.js)')}}"></script>
			<script type="text/javascript" src="{{asset('blogasset/js/bootstrap.min.js')}}"></script>
			<script type="text/javascript" src="{{asset('blogasset/js/main.js')}}"></script>

	</body>
</html>
