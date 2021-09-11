<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="google-site-verification" content="gehs8YDpB9Idpk0uY-jhJOiJnEuw1W9-dmFizSv7KyI" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('land/css/video-background.css')}}">
    <link rel="stylesheet" href="{{asset('land/css/index.css')}}">
    <link rel="stylesheet" href="{{asset('land/css/nav.css')}}">
    <link rel="stylesheet" href="{{asset('land/css/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('land/css/flickity.css')}}">
    <script src="{{asset('land/js/vue.js')}}"></script>
    <link rel="shortcut icon" href="{{asset('land/assets/favicon.ico')}}" type="image/x-icon">
    <title>Sourcing platform for quality grain and other produce grown by smallholders</title>
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
                <a href="#" class="brand">
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
                    <a href="/login" class="sign-btn">Loginsssss</a>
                </div>
            </div>

            <div class="mobile-nav">

                <a href="#" class="brand">
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
                    <a href="{{route('getstarted')}}"  class="sign-btn">Get Started</a>
                    <a href="/login" class="sign-btn">Login</a>
                </div>
            </div>
        </nav>


        <div class="fullscreen-video-wrap">
            <video class="bckgrd-vid" src="https://bit.ly/31xgfKd" autoplay="true" loop="true" muted></video>
            <!-- change video background source -->
        </div>
        <div class="header-overlay"></div>
        <div class="header-content">
            <p>We help you source and aggregate quality grains and other raw materials produced locally and sustainably
                from the best farmers in Africa to meet your production demand.
            </p>
            <a href="{{route('getstarted')}}" class="btn open-modal" id="myBtn">Get Started</a>
        </div>
    </header>



    <section id="myModal" class="modal">

        <span class="close">&times;</span>
        <div class="modal-content">
            <img style="height: 50px; display: block; width: 100%; object-fit: scale-down;" src="{{asset('land/img/logo.PNG')}}"
                alt="logo">
                <h2>We're ready to help</h2>
            <div id="form-container">
                <form action="{{route('users.store')}}" method="post">
                    @csrf
                    <div>
                        <label>Name <span>*</span> </label>  <input name="name" type="text" required>
                    </div>
                    <div>
                        <label>Email <span>*</span> </label> <input name="email" type="email" required>
                    </div>
                    <div>
                        <label>Phone Number <span>*</span> </label> <input name="phone" type="tel" required>
                    </div>
                    <div>
                        <label>Company </label> <input name="company" type="text" required>
                    </div>
                    <div class="text-area">
                        <label for="">How can we help?</label>
                        <textarea name="description"></textarea>
                    </div>

                    <div class="checkbox">
                        <label for="">
                        </label>
                        <input type="checkbox"> Subscribe to our news letter
                    </div>

                    <input type="submit" value="Submit">

                </form>
            </div>

            <div id="enquiry">
                <div class="enq-img"></div>
                <div class="text">
                    <p>We are ready to answer all your questions about how FarmCorps helps you to buy quality produce from farmers.
</p>
                </div>
            </div>

        </div>

    </section>

    <section id="how-it-works">
        <div class="container">
            <h2>How it Works</h2>
            <div class="how-cards">
                <div class="card">
                    <h2>1</h2>
                    <div style="clear: both;">
                        <img src="{{asset('land/assets/map.svg')}}" alt="">
                    </div>
                    <h3>Find cohort of producers around your location that grows your raw material</h3>
                    <p>Our platform helps you aggregate raw produce clusters of smallholder farmers within your value
                        chain that are using sustainable practices to grow quality produce with capacity to meet your
                        demand.</p>
                    <a href="#">Learn More</a>
                </div>
                <div class="card">
                    <h2>2</h2>
                    <div style="clear: both;">
                        <img src="{{asset('land/assets/teamwork.svg')}}" alt="">
                    </div>
                    <h3>Initiate a production contract with them through our extension agents</h3>
                    <p>When you find clusters of smallholders that fulfils your demand, you then initiate a production
                        contract with these clusters. Our extension agents help mediate the process of fair contract
                        negotiation between you and the farmers.
                    </p>
                    <a href="#">Learn More</a>

                </div>
                <div class="card">
                    <h2>3</h2>
                    <div style="clear: both;">
                        <img src="{{asset('land/assets/track.svg')}}" alt="">
                    </div>
                    <h3>Monitor production with clear visibility on input usage, handling and transportation.</h3>
                    <p>Once contracts are negotiated and signed, production commences and you can monitor your clusters
                        of farms directly from your dashboard with reports on input usage, farm activities. expected
                        yield, time to harvest and others.
                    </p>
                    <a href="#">Learn More</a>

                </div>
            </div>
        </div>
    </section>




    <section id="for-farmers">
        <div class="container">
            <div>
                <h2>Do you have knowledge on sustainable farming and can manage other farmers
                </h2>
                <p>Sign up to help other farmers and make money</p>
            </div>
            <div class="farmer-link">
                <a href="/agent/signup">
                    Sign Up as an Agent.
                </a>
            </div>
        </div>
    </section>


    <section class="value-prop">
        <h2>Our Superior Offering To Every Agro-Processing and Food Company</h2>

        <div>
            <div class="value">
                <div class="value-img">
                    <img src="{{asset('land/img/Group 3.png')}}" alt="">
                </div>
                <div class="value-text">
                    <h3>Source Quality Raw Material At The Lowest Prices</h3>
                    <p>Get quality raw material supplies from farms for your production which begins with quality farm
                        inputs that we have sourced from our multin-national industry partners and provide farmers. We
                        facilitate mutually beneficial relationships between you and clusters of farmers that ensure a
                        sustainable supply of quality raw materials..

                    </p>
                </div>
            </div>
            <div class="value">
                <div class="value-img">
                    <img src="{{asset('land/img/Group 6.png')}}" alt="">
                </div>
                <div class="value-text">
                    <h3>Integrate Sustainability and Traceability Into Your Supply Chain
                    </h3>
                    <p>Show your customers that you are sourcing raw materials from farms that grow produce with
                        sustainable practices. We have trained our farmers on best sustainable farming practices and
                        have set up quality assurance processes and a traceability system built on distributed ledger
                        technology.
                    </p>
                </div>
            </div>

            <div class="value">
                <div class="value-img">
                    <img src="{{asset('land/img/Group 4.png')}}" alt="">
                </div>
                <div class="value-text">
                    <h3>Get Easy and Well Priced Logistics Services For Your
                    </h3>
                    <p>We have partnerships with reputable logistics companies to provide transportation, warehousing
                        and even cold cold chain storage services to move the raw materials from the farm to your
                        warehouse or production site as the case may. And all along, we deploy technology for proper
                        tracking and ensure traceability.
                    </p>
                </div>
            </div>
            <div class="value">
                <div class="value-img">
                    <img src="{{asset('land/img/Group 5.png')}}" alt="">
                </div>
                <div class="value-text">
                    <h3>Make Visible Impact For Food Security
                    </h3>
                    <p>Our platform helps you make visible impact on the lives of rural farmers and contribute to the
                        social and economic development of our country as we work together to make our farmers,
                        communities and countries food secure. We also provide you with impact reports of your
                        procurement activities.

                    </p>
                </div>
            </div>
        </div>
    </section>


    <section class="sponsors">
        <hr>
        <h2>Industry Partners: </h2>
        <div class="carousel" data-flickity='{ "autoPlay": true, "wrapAround": true }'>
            <img src="{{asset('land/assets/dupont-pioneer-vector-logo.png')}}" class="carousel-cell">
            <img src="{{asset('land/assets/Ecobank_logo.png')}}" class="carousel-cell">
            <img src="{{asset('land/assets/Syngenta_logo.png')}}" class="carousel-cell">
            <img src="{{asset('land/assets/agra-logo.jpg')}}" class="carousel-cell">
            <img src="{{asset('land/assets/oysadep.jpg')}}" class="carousel-cell">
            <img src="{{asset('land/img/inc.png')}}" class="carousel-cell">
            <img src="{{asset('land/assets/Yara_logo.png')}}" class="carousel-cell">
        </div>


    </section>

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


                </ul>
            </div>
            <div class="subscribe">
                <form action="{{route('newsletter')}}" method="post">
                    @csrf
                    <div>
                        <input name="email" type="text">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
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
</body>
<script src="{{asset('land/js/index.js')}}"></script>
@include('sweetalert::alert')


</html>
