<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="../css/video-background.css"> -->
    <link rel="stylesheet" href="{{asset('land/css/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('land/css/nav.css')}}">
    <link rel="stylesheet" href="{{asset('land/css/farmCO.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet">
    <title> FarmCo</title>
</head>

<body>
    <header class="v-header container">
        <nav class="nav" style="position: static;">
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
                        <a href="{{asset('land/index.html')}}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="#">About</a>
                    </li>

                    <li class="nav-item">
                        <a href="#">Contact</a>
                    </li>

                    <li class="nav-item">
                        <a href="#">Blog</a>
                    </li>

                    <li class="nav-item">
                        <a href="#">Agent</a>
                    </li>
                </ul>
                <div class="auth">
                    <a href="#" onclick="openModal()" class="sign-btn open-modal">Book A Demo</a>
                    <a href="/pages/login.html" class="sign-btn">Login</a>
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
                        <a href="#">Contact</a>
                    </li>

                    <li class="nav-item">
                        <a href="#">Agent</a>
                    </li>
                </ul>
                <div class="auth">
                    <a href="#" onclick="openModal()" class="sign-btn">Book A Demo</a>
                    <a href="./pages/login.html" class="sign-btn">Login</a>
                </div>
            </div>
        </nav>
    </header>


    <section id="hero">
        <div class="container">
            <div class="hero-text">
                <h1>FarmCorps for Agro-Processing and Food/Beverage Manufacturers.</h1>
                <p>Buy quality grains grown sustainably from smallholders </p>
                <a href="#">Find Out More</a>
            </div>
            <div class="hero-img">
                <img src="{{asset('land/img/agricVid.gif')}}" alt="">
            </div>
        </div>
    </section>



    <section id="myModal" class="modal">

        <!-- Modal content -->
        <span class="close">&times;</span>
        <div class="modal-content">
            <img style="height: 50px; display: block; width: 100%; object-fit: scale-down;"
                src="{{asset('land/img/logo.PNG')}}" alt="logo">
            <h2>We're ready to help</h2>
            <div id="form-container">
                <form action="{{route('users.store')}}" method="post">
                    @csrf
                    <div>
                        <label>Name <span>*</span> </label> <input name="name" type="text" required>
                    </div>
                    <div>
                        <label>Email <span>*</span> </label> <input name="email" type="email" required>
                    </div>
                    <div>
                        <label>Phone Number <span>*</span> </label> <input name="phone" type="tel" required>
                    </div>
                    <div>
                        <label>Company </label> <input name="company" type="text">
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
                    <p>We are ready to answer all your questions about how FarmCorps helps you to buy quality produce
                        from farmers.
                    </p>
                </div>
            </div>

        </div>

    </section>



    <section id="why-us">
        <div class="container">
            <div class="why">
                <img src="{{asset('land/assets/solu-contracts.png')}}" alt="">
                <h2>Easy Aggregation:
                </h2>
                <p>
                    The starting point to sourcing quality agri-raw material is to use our web platform to find cohorts
                    of smallholder farmers that are growing the raw materials that you need. We have taken the pain to
                    collect all essential data such as to help you make decisions on sourcing effectively.

                </p>
            </div>
            <div class="why">
                <img src="{{asset('land/assets/solu-contracts.png')}}" alt="">
                <h2>Transparent Contracts
                </h2>
                <p>
                    Our contracting process is straightforward and easy to use for you to quickly negotiate price and
                    volume and then move on to production. Each farmer’s group has extension agents who mediate in the
                    negotiation and finalising the contract agreements.
                </p>
            </div>
            <div class="why">
                <img src="{{asset('land/assets/solu-contracts.png')}}" alt="">
                <h2>Fair Pricing
                </h2>
                <p>
                    We have built price prediction tools to help you in the negotiation and our extension agents help
                    mediate that you get the best price on the market for the produce that you are sourcing. We ensure
                    that farmers’ are also well-taken care of in our negotiation.
                </p>
            </div>
            <div class="why">
                <img src="{{asset('land/assets/solu-contracts.png')}}" alt="">
                <h2>Real-time Monitoring
                </h2>
                <p>
                    We have built a network of extension agents and assign an optimum number of them to the farmers in
                    your outgrower scheme to help deliver data-driven advisory services and provide real-time reports to
                    ensure the farmers grow your produce sustainably and responsibly.
                </p>
            </div>
            <div class="why">
                <img src="{{asset('land/assets/solu-contracts.png')}}" alt="">
                <h2>Timely Deliveries
                </h2>
                <p>
                    We help you organize the delivery of your produce to your factory using the best packaging materials
                    with every batch of produce traceable with our produce provenance/traceability system.
                </p>
            </div>
        </div>
    </section>

    <section id="attraction">
        <h2>Why I Chose FarmCorps For Sourcing My Grains</h2>
        <div class="container">
            <p>“What we really like about FarmCorps that made us sign up to the platform is that it helps us control the
                quality of raw material that we buy from farmers. We ensure the quality of seed, and other input used
                and more especially, we know if this was produced sustainably or not.”
            </p>
            <p class="person"> - Kunle Edun, Sebad Foods.
 </p>
        </div>
    </section>

    <section id="get-started">
        <div class="container">
            <div class="started-txt">
                <h3>Get started!</h3>
                <p>We are ready to answer all your questions about how FarmCorps helps you to buy quality produce from
                    farmers.
                </p>
                <a onclick="openModal()">Book A Demo</a>
            </div>
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

    <script src="{{asset('land/js/index.js')}}"></script>
</body>
@include('sweetalert::alert')

</html>