<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('land/assets/favicon.ico')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('land/css/nav.css')}}">
    {{--<link rel="stylesheet" href="./css/nav.css" />--}}
    <link rel="stylesheet" href="{{asset('land/css/contact.css')}}">
    <link rel="stylesheet" href="{{asset('land/css/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,800&display=swap" rel="stylesheet" />
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


    <main>
        <section class="map">
            <div class="container">
                <div style="width: 100%; height: 400px;">
                    {!! Mapper::render() !!}
                </div>
            </div>
        </section>

        <section class="contact">
            <h2>Contact Us Today</h2>
            <div class="container">
                <div class="contact-text">
                    <h2>Contact <span>  Address </span></h2>
                    <div>
                        <p>No 5A Emina Crescent Ikeja Lagos <i class="fa fa-map-marker"></i></p>
                        <p>+234-9010670-9230 <i class="fa fa-phone"></i></p>
                        <p>info@farmcorps <i class="fa fa-envelope"></i></p>
                        <p>Mon - Sat 9:00 AM to 5:00 PM <i class="fa fa-clock-o"></i></p>
                    </div>
                </div>
                <div class="contact-form">
                    <form method="post" action="{{route('contactMessage')}}">
                        @csrf
                        <input required name="name" type="text" class="half" placeholder="Name">
                        <input required name="email" type="email" class="half" placeholder="Email">
                        <input required name="subject" type="text" placeholder="Message Subject">
                        <textarea required name="message" placeholder="Message here"></textarea>
                        <input type="submit" value="Send Message">
                    </form>
                </div>
            </div>
        </section>
    </main>

    
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
    <script src="{{asset('land/js/nav.js')}}"></script>
</body>

</html>