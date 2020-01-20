<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('land/css/video-background.css')}}">
    <link rel="stylesheet" href="{{asset('land/css/index.css')}}">
    <link rel="stylesheet" href="{{asset('land/css/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('land/css/flickity.css')}}">
    <script src="{{asset('land/js/vue.js')}}"></script>
    <title>Farmcorps</title>
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
                    <a href="#">Contact</a>
                </li>

                <li class="nav-item">
                    <a href="#">Blog</a>
                </li>
            </ul>
            <div class="auth">
                <a href="#" onclick="openModal()" class="sign-btn open-modal">Book A Demo</a>
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
                    <a href="#">Contact</a>
                </li>

                <li class="nav-item">
                    <a href="#">Blog</a>
                </li>
            </ul>
            <div class="auth">
                <a href="#" onclick="openModal()" class="sign-btn">Book A Demo</a>
                <a href="login" class="sign-btn">Login</a>
            </div>
        </div>
    </nav>


    <div class="fullscreen-video-wrap">
        <video src="./video/video.mkv" autoplay="true" loop="true" muted></video>
        <!-- change video background source -->
    </div>
    <div class="header-overlay"></div>
    <div class="header-content">
        <!-- <h1>Hello Everyone</h1> -->
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto tempora quod corporis ducimus atque rem
            unde, in, ad numquam quia provident, adipisci sunt! Obcaecati at similique accusantium, officia enim
            aperiam iure, deserunt harum perferendis dolor ad blanditiis illum incidunt officiis est nemo. Rerum
            minima, odio animi quod eaque quam temporibus.</p>
        <a href="#" class="btn open-modal" onclick="openModal()" id="myBtn">Request for Demo</a>
    </div>
</header>



<section id="myModal" class="modal">

    <!-- Modal content -->
    <span class="close">&times;</span>
    <div class="modal-content">
        <img style="height: 30px; display: block; width: 100%; object-fit: scale-down;" src="{{asset('land/img/logo.PNG')}}"
             alt="logo">
        <div id="form-container">
            <form action="{{route('users.store')}}" method="post">
                @csrf
                <div>
                    <label>Name <span>*</span> </label>

                    <input name="name" type="text" required>

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
                    <input name="subscribe" type="checkbox"> Subscribe to our news letter
                </div>

                <input type="submit" value="Submit">

            </form>
        </div>

        <div id="enquiry">
            <div class="enq-img"></div>
            <div class="text">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos provident maiores, doloribus
                    odit est, facilis autem ducimus, animi laudantium excepturi accusamus nemo a tempora optio!</p>
            </div>
        </div>

    </div>

</section>


<section id="for-farmers">
    <div class="container">
        <div>
            <h2>Sell your farm produce faster.</h2>
            <p>Meet with companies for real deals.</p>
        </div>
        <div class="farmer-link">
            <a href="{{route('farmers.create')}}">
                Sign Up as a farmer.
            </a>
        </div>
    </div>
</section>

<section id="benefits">
    <h2>What will You <span style="color: #d3a310;">Benefit</span> from us?</h2>
    <div class="container">


        <div>
            <img src="{{asset('land/assets/savings.svg')}}" alt="">
            <p>Use our payment systems to easily put funds
                in your account to be use for input purchases
                for farmers. Our system allows you to calculate
                how much funds is needed for each purchase that
                you want to make for farmers</p>
        </div>

        <div>
            <img src="{{asset('land/assets/analytics.svg')}}" alt="">
            <p>Use our payment systems to easily put funds
                in your account to be use for input purchases
                for farmers. Our system allows you to calculate
                how much funds is needed for each purchase that
                you want to make for farmers</p>
        </div>

        <div>
            <img src="{{asset('land/assets/advertising.svg')}}" alt="">
            <p>Use our payment systems to easily put funds
                in your account to be use for input purchases
                for farmers. Our system allows you to calculate
                how much funds is needed for each purchase that
                you want to make for farmers</p>
        </div>
    </div>
    <hr>
</section>





<section class="value-prop">
    <!-- <div class="heading"> -->
    <h2>Our Value Proposition</h2>
    <!-- </div> -->

    <div>
        <div class="value">
            <div class="value-img">
                <img src="{{asset('land/img/Group 3.png')}}" alt="">
            </div>
            <div class="value-text">
                <h3>Agro-processing/Food and Beverage Co</h3>
                <h4>Quality raw materials from farms</h4>
                <p>Our goal is to get quality raw materials supplies from farms for your production which begins
                    with quality farm inputs that you fininace for farmers.
                    We facilitate mutaully beneficial relationship between you and clusters of farmers that
                    ensure a sustainabale supply of quality raw materials to your factories.
                </p>
            </div>
        </div>
        <div class="value">
            <div class="value-img">
                <img src="{{asset('land/img/Group 6.png')}}" alt="">
            </div>
            <div class="value-text">
                <h3>Donors/Government/Social Lenders</h3>
                <h4>Make Visible Impact For Food Security</h4>
                <p>We provide financial technology and last mile distribution systems that enable you reach
                    smallholder farmers with your interventions as we work together to make our farmers,
                    communities and countries food secure. We also provide you with impact reports of your
                    interventions.
                </p>
            </div>
        </div>

        <div class="value">
            <div class="value-img">
                <img src="{{asset('land/img/Group 4.png')}}" alt="">
            </div>
            <div class="value-text">
                <h3>Agro-Input Dealers/Distributors</h3>
                <h4>Reach A Wide Network Of Customers</h4>
                <p>We provide access to a growing wide network of farmers (buyers) and their associations with
                    opportunities for repeatable sales. We are your partners for reaching smallholder farmers
                    wherever they are. We also provide sales forecast for the season so you can stock your shops
                    ahead. </p>
            </div>
        </div>
        <div class="value">
            <div class="value-img">
                <img src="{{asset('land/img/Group 5.png')}}" alt="">
            </div>
            <div class="value-text">
                <h3>Farmers/Farmers Associations</h3>
                <h4>Get Easy Financing For Your Farm Operations

                </h4>
                <p>We provide unparalleled access to formal markets with finance for your farm production even
                    before you start planting. We support farmers all the way from planning the season till your
                    produce is sold after harvest. So, you should recommend us to your outgrower schemes.
                </p>
            </div>
        </div>
    </div>
</section>


<section class="sponsors">
    <hr>
    <h2>Trusted By: </h2>
    <div class="carousel" data-flickity='{ "autoPlay": true }'>
        <img src="{{asset('land/img/british.png')}}" class="carousel-cell">
        <img src="{{asset('land/img/inc.png')}}" class="carousel-cell">
        <img src="{{asset('land/img/british.png')}}" class="carousel-cell">
        <img src="{{asset('land/img/inc.png')}}" class="carousel-cell">
        <img src="{{asset('land/img/british.png')}}" class="carousel-cell">
        <img src="{{asset('land/img/inc.png')}}" class="carousel-cell">
    </div>


</section>

<footer>
    <hr>
    <div class="container">
        <div>
            <h4>FarmCorps</h4>
            <ul>
                <li><i class="fa fa-phone"></i>+234-90-1670-9230</li>
                <li><i class="fa fa-map-marker"></i>5, Emina Crescent off Toyin Street, Ikeja, Lagos, Nigeria </li>
                <li><i class="fa fa-envelope"></i>info@farmcorps.net</li>
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
                    <button type="submit">Subscribe</button>
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
</footer>
</body>
<script src="{{asset('land/js/index.js')}}"></script>
@include('sweetalert::alert')

</html>