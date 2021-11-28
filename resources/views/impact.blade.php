<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">--}}
    <link rel="shortcut icon" href="{{asset('land/assets/favicon.ico')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('land/css/nav.css')}}">
    <link rel="stylesheet" href="./css/nav.css" />
    <link rel="stylesheet" href="{{asset('land/css/contact.css')}}">
    <link rel="stylesheet" href="{{asset('land/css/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,800&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="test/css/bootstrap.min.css">
    <link rel="stylesheet" href="test/css/aos.min.css">
    <link rel="stylesheet" href="test/css/hamburgers/hamburgers.min.css">
    <link rel="stylesheet" href="test/css/owl.carousel.min.css">
    <link rel="stylesheet" href="test/fonts/icomoon/style.css">
    <link rel="stylesheet" href="test/css/animsition.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="test/css/style.css">

    <title>FarmCorps || Contact-Us</title>

</head>

<body>
    <header class="v-header container">
        <nav class="nav">
            <div id="nav-icon1">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="container">
                <a href="/" class="brand">
                    <img src="{{asset('land/assets/logo.PNG')}}" alt="Logo">
                </a>

                <ul class="nav-links">
                    <li class="nav-item">
                        <a href="/">Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="#">About</a>
                    </li>

                    <li class="nav-item">
                        <a href="/contact">Contact</a>
                    </li>

                    <li class="nav-item">
                        <a href="/blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="/farmers/register">Farmer</a>
                    </li>
                    <li class="nav-item">
                        <a href="/agent/signup">Agent</a>
                    </li>

                </ul>
                <div class="auth">
                    <a href="{{route('getstarted')}}" class="sign-btn open-modal">Get Started</a>
                    <a href="/login" class="sign-btn">Login</a>
                </div>
            </div>

            <div class="mobile-nav">

                <a href="/" class="brand">
                    <img src="{{asset('land/assets/logo.PNG')}}" alt="Logo">
                </a>

                <ul class="nav-links">
                    <li class="nav-item">
                        <a href="/">Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="#">About</a>
                    </li>

                    <li class="nav-item">
                        <a href="/contact">Contact</a>
                    </li>

                    <li class="nav-item">
                        <a href="/farmers/register">Farmer</a>
                    </li>

                    <li class="nav-item">
                        <a href="/agent/signup">Agent</a>
                    </li>

                </ul>
                <div class="auth">
                    <a href="{{route('getstarted')}}" class="sign-btn">Get Started</a>
                    <a href="/login" class="sign-btn">Login</a>
                </div>
            </div>
        </nav>
    </header>



        <!-- END templateux-navbar -->
        <section class="templateux-hero"  data-scrollax-parent="true">
            <!-- <div class="cover" data-scrollax="properties: { translateY: '30%' }"><img src="images/hero_2.jpg" /></div> -->

            <div class="container">
                <div class="row align-items-center justify-content-center intro">
                    <div class="col-md-10" data-aos="fade-up">
                        <h1>Our Blog</h1>
                        <p class="lead">We are experts, engineers, authors, speakers, artists who creates astounding products for people.</p>
                        <a href="#next" class="go-down js-smoothscroll"></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- END templateux-hero -->

        <section class="templateux-portfolio-overlap mb-5" id="next">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4" data-aos="fade-up">
                        <a class="post animsition-link" href="blog-single.html">
                            <figure>
                                <img src="{{asset('land/assets/track.svg')}}" alt="Free Template" class="img-fluid">
                            </figure>
                            <div class="project-hover">
                                <div class="project-hover-inner">
                                    <h2>45 Cool Bag Illustrations</h2>
                                    <span>February 21, 2018</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <a class="post animsition-link" href="blog-single.html">
                            <figure>
                                <img src="{{asset('land/assets/track.svg')}}" alt="Free Template" class="img-fluid">
                            </figure>
                            <div class="project-hover">
                                <div class="project-hover-inner">
                                    <h2>45 Cool Bag Illustrations</h2>
                                    <span>February 21, 2018</span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <a class="post animsition-link" href="blog-single.html">
                            <figure>
                                <img src="{{asset('land/assets/track.svg')}}" alt="Free Template" class="img-fluid">
                            </figure>
                            <div class="project-hover">
                                <div class="project-hover-inner">
                                    <h2>45 Cool Bag Illustrations</h2>
                                    <span>February 21, 2018</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>




                <div class="row pt-5" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-md-12 text-center">
                        <a href="#" class="button button--red  mb-5">Load More Posts...</a>
                    </div>
                </div>

            </div>
        </section>



    
    <hr class="hr hr-1">

    <footer>
        <hr>
        <div class="container">
            <div>
                <h4>FarmCorps</h4>
                <ul class="footer-links">
                    <li><a href="#">Home</a></li>

                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>

                    <li><a href="#">Blog </a></li>
                    <li><a href="#">Agent</a></li>
                    <li><a href="#">Farmer</a></li>


                    <!-- <li><i class="fa fa-map-marker"></i>5, Emina Crescent off Toyin Street, Ikeja, Lagos, Nigeria </li> -->
                    <!-- <li><i class="fa fa-envelope"></i>info@farmcorps.net</li> -->
                </ul>
            </div>
            <div class="subscribe">
                <form action="">
                    <div>
                        <input type="text">
                        <button>Subscribe</button>
                    </div>

                </form>
                <div class="socials">
                    <h4>Connect with us on:</h4>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook-official"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <img src="{{asset('land/assets/logo.PNG')}}" style="height: 50px; margin: auto; display: block;" alt="">
    </footer>

    @include('sweetalert::alert')
    <script src="{{asset('test/scripts-all.js')}}"></script>
    <script src="{{asset('test/main.js')}}"></script>
    <script src="{{asset('land/js/nav.js')}}"></script>
</body>

</html>