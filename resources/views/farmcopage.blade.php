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
                <h1>AgriDigital for Farmers</h1>
                <p>Get more control over your grain at harvest with all your transactions in one place.</p>
                <a href="#">Find Out More</a>
            </div>
            <div class="hero-img">
                <img src="{{asset('land/img/agricVid.gif')}}" alt="">
            </div>
        </div>
    </section>

    <section id="features">
        <div class="container">
            <div class="feat">
                <div class="feature-text">
                    <h2>Automate and validate contract</h2>
                    <p>Automate your contracting with traders and storage operators to streamline the sale of your grain
                        for better prices.</p>
                </div>
                <div class="feature-img">
                    <img src="{{asset('land/assets/contract.png')}}" alt="">
                </div>
            </div>
            <div class="feat">
                <div class="feature-text">
                    <h2>Automate and validate contract</h2>
                    <p>Automate your contracting with traders and storage operators to streamline the sale of your grain
                        for better prices.</p>
                </div>
                <div class="feature-img">
                    <img src="{{asset('land/assets/contract.png')}}" alt="">
                </div>
            </div>
            <div class="feat">
                <div class="feature-text">
                    <h2>Automate and validate contract</h2>
                    <p>Automate your contracting with traders and storage operators to streamline the sale of your grain
                        for better prices.</p>
                </div>
                <div class="feature-img">
                    <img src="{{asset('land/assets/contract.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>


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
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos provident maiores, doloribus
                        odit est, facilis autem ducimus, animi laudantium excepturi accusamus nemo a tempora optio!</p>
                </div>
            </div>

        </div>

    </section>



    <section id="why-us">
        <div class="container">
            <div class="why">
                <img src="{{asset('land/assets/solu-contracts.png')}}" alt="">
                <h2>Contracts</h2>
                <p>Eliminate filing and lost paperwork with digital sales contracts and real time access to keep track
                    of all contract quantities and status to minimise the risk of default and maximise your results.</p>
            </div>
            <div class="why">
                <img src="{{asset('land/assets/solu-contracts.png')}}" alt="">
                <h2>Contracts</h2>
                <p>Eliminate filing and lost paperwork with digital sales contracts and real time access to keep track
                    of all contract quantities and status to minimise the risk of default and maximise your results.</p>
            </div>
            <div class="why">
                <img src="{{asset('land/assets/solu-contracts.png')}}" alt="">
                <h2>Contracts</h2>
                <p>Eliminate filing and lost paperwork with digital sales contracts and real time access to keep track
                    of all contract quantities and status to minimise the risk of default and maximise your results.</p>
            </div>
            <div class="why">
                <img src="{{asset('land/assets/solu-contracts.png')}}" alt="">
                <h2>Contracts</h2>
                <p>Eliminate filing and lost paperwork with digital sales contracts and real time access to keep track
                    of all contract quantities and status to minimise the risk of default and maximise your results.</p>
            </div>
            <div class="why">
                <img src="{{asset('land/assets/solu-contracts.png')}}" alt="">
                <h2>Contracts</h2>
                <p>Eliminate filing and lost paperwork with digital sales contracts and real time access to keep track
                    of all contract quantities and status to minimise the risk of default and maximise your results.</p>
            </div>
        </div>
    </section>

    <section id="attraction">
        <div class="container">
            <h2>
                How AgriDigital transformed Tremlett Storage
            </h2>
            <p>"What attracted me to AgriDigital was the grower portal, where growers can see their deliveries on their
                own, without me having to login and tell them. There was no other program on the market that could do
                that."</p>
        </div>
    </section>

    <section id="get-started">
        <div class="container">
            <div class="started-txt">
                <h3>Get started!</h3>
                <p>Find out how AgriDigital can transform the way you buy, sell and store grain.</p>
                <a href="">Book A Demo</a>
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