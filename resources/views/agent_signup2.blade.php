<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('land/css/FarmerPage.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <script src="{{asset('land/js/farmerLogin.js')}}"></script>
    <title>FarmCorps || Farmer</title>
</head>

<body onscroll="changeHeaderColor()">
<header>
    <nav>
        <a href="" class="brand"><img src="{{asset('land/img/logo.PNG')}}" alt=""></a>
        <ul class="nav-list">
            <li class="nav-item"><a href="#">LOG IN</a></li>
        </ul>
    </nav>
</header>

<section id="hero">
    <div class="overlay"></div>
    <div class="container">
        <div class="hero-text">
            <h1>Drive with Bolt</h1>
            <p>Earn good money with your car</p>
            <div class="app-links">
                <a href="/">
                    <img src="{{asset('land/assets/google-play-badge.svg')}}" alt="">
                </a>
                <a href="#">
                    <img src="{{asset('land/assets/download-on-the-app-store-apple.svg')}}" alt="">
                </a>
            </div>
        </div>
        <div class="form">
            <h2>Signup as a driver below</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            <form action="{{route('agent.store')}}" method="post">
                @csrf
                <div>
                    <label>First Name</label>
                    @error('first_name')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <input name="first_name" placeholder="e.g Abiodun" type="text">
                </div>
                <div>
                    <label>Last Name</label>
                    @error('last_name')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <input name="last_name" placeholder="e.g Smith" type="text">
                </div>
                <div>
                    <label>Email</label>
                    @error('email')
                    <span class="invalid-feedback" role="alert alert-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <input name="email" placeholder="Abiodun" type="email">
                </div>
                <div class="states">
                    <label>Location</label>
                    @error('location')
                    <span class="invalid-feedback" role="alert alert-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <select name="location" id="school" size="">
                        <option disabled selected>Select Location</option>
                    </select>
                </div>
                <div>
                    <label>Password</label>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <input placeholder="password" name="password" type="password">
                </div>
                <div>
                    <label>Confirm Password</label>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <input name="password_confirmation" placeholder="password" type="password">
                </div>


                <input type="submit" value="Submit">
            </form>
            
        </div>
        <div class="app-links small">
            <a href="#">
                <img src="{{asset('land/assets/google-play-badge.svg')}}" alt="">
            </a>
            <a href="#">
                <img src="{{asset('land/assets/download-on-the-app-store-apple.svg')}}" alt="">
            </a>
        </div>
    </div>
</section>

<section id="why">
    <h2>Why Bolt?</h2>
    <div class="container">
        <div>
            <img src="{{asset('land/assets/advertising.svg')}}" alt="">
            <h3>Earn money</h3>
            <p>Drive with Bolt and extra income</p>
        </div>
        <div>
            <img src="{{asset('land/assets/advertising.svg')}}" alt="">
            <h3>Earn money</h3>
            <p>Drive with Bolt and extra income</p>
        </div>
        <div>
            <img src="{{asset('land/assets/advertising.svg')}}" alt="">
            <h3>Earn money</h3>
            <p>Drive with Bolt and extra income</p>
        </div>
    </div>
</section>

<hr
        style="border: 0;height: 0; max-width: 400px; margin: auto; border-top: 1px solid rgba(0, 0, 0, 0.1); border-bottom: 1px solid rgba(255, 255, 255, 0.3);">

<section id="how-it-works">
    <h2>How Bolt Works</h2>
    <div class="container">
        <div>
            <h3>1. Accept the request</h3>
            <p><img src="{{asset('land/assets/presentation.svg')}}" alt=""></p>
        </div>
        <div>
            <h3>2. Pickup the Client</h3>
            <p><img src="{{asset('land/assets/presentation.svg')}}" alt=""></p>
        </div>
        <div>
            <h3>3. Drive to destination</h3>
            <p><img src="{{asset('land/assets/presentation.svg')}}" alt=""></p>
        </div>
    </div>
</section>

<section id="freq-questions">
    <div class="container">
        <h2>Frequently Asked Questions</h2>
        <div>
            <p class="question">Q: I don't drive full-time. Can I use Bolt for just a few hours a week?</p>
            <p class="answer">A: Of course, some of our drivers are only active a few hours during weekends and make
                solid part-time income.
            </p>
        </div>
        <div>
            <p class="question">Q: How do I get paid?</p>
            <p class="answer">A: Clients pay you in cash or via Bolt. We pay out to your bank account every week.
            </p>
        </div>
        <div>
            <p class="question">Q: How much do I pay Bolt?</p>
            <p class="answer">A: We do not have any monthly fees, so you only pay for finished trips. We usually ask
                for 10% to 20% of the ride fee, depending on your city. You can get more information by contacting
                us.
            </p>
        </div>
        <div>
            <p class="question">Q: How long does it take to sign up?</p>
            <p class="answer">A: Submitting your information takes just 5 minutes. After that you will get a 30
                minute training in our office. In some cities, we will accept your application remotely once you
                provide us with all the necessary documents.
            </p>
        </div>
        <div>
            <p class="question">Q: What if I don't have a smartphone?</p>
            <p class="answer">A: Our city teams suggest you a budget Android smartphone that you can buy or finance.
            </p>
        </div>
        <div>
            <p class="question">Q: What if I don't have a car?</p>
            <p class="answer">A: Our city teams can help you match with our partner fleets or rental companies who
                offer competitive rates on vehicles that are accepted on our platform. In some cities, longer term
                drivers can get financing deals from our partners.
            </p>
        </div>

        <div>
            <a href="#">Check our Knowledgebase for more info.</a>
        </div>
    </div>
</section>

<section id="go-up">
    <a href="#hero">Sign up with Bolt.</a>
</section>

<footer>
    <p>Got questions or concerns? <span> <a href="#"> Contact us. </a> </span></p>
    <p>No 5A Emina Cresent Ikeja Lagos.</p>

</footer>
</body>
@include('sweetalert::alert')
</html>