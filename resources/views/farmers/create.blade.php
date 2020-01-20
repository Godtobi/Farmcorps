<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{asset('js/vue.js')}}"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('land/css/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('land/css/forms.css')}}">
    <title>Log In Page</title>
</head>

<body>

    <header class="v-header container">
        <nav class="nav">
            <div class="container">
                <a href="/" class="brand">
                    <img src="{{asset('land/assets/logo.PNG')}}" alt="Logo">
                </a>



                {{--<ul class="nav-links">--}}
                    {{--<li v-for="link in navLinks" class="nav-item">--}}
                        {{--<a :href="link.link">{{link.name}}</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}

                <a href="/login" class="sign-btn">Create Account / Login</a>
            </div>

        </nav>

        <header>


    <main>
        <section class="login-form">
            <div class="bg">
                <h2>Create <span>Farmer</span> your <span>Account</span></h2>
            </div>
            <div class="box">
                <div class="logo">
                    <img src="{{asset('land/img/logo.PNG')}}" alt="">
                </div>
                <form action="{{route('farmers.store')}}" method="post">
                    @csrf
                    <!-- <h2>Welcome Back!</h2>
                    <h3>Sign In</h3> -->
                    <div>
                        <input name="first_name" type="text" required>
                        @error('first_name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <label for="">firstname</label>
                    </div>
                    <div>
                        <input name="last_name" type="text" required>
                        @error('last_name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <label for="">lastname</label>
                    </div>
                    <div>
                        <input name="email" type="email" required>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <label for="">email</label>
                    </div>
                    <div>
                        <input name="phone" type="tel" required>
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <label for="">phone number</label>
                    </div>
                    <div>
                        <input name="password" type="password" required>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <label for="">choose password</label>
                        <!-- <button class="show-pswrd"> show </button>
                        <button class="forgot-pswrd"> Forgot Password? </button> -->
                    </div>
                    <div>
                        <input name="password_confirmation" type="password" required>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <label for="">retype password</label>
                        <!-- <button class="show-pswrd"> show </button>
                        <button class="forgot-pswrd"> Forgot Password? </button> -->
                    </div>
                    <input type="submit" value="Log In">
                </form>

                <!-- <div class="alternate">
                    <p>Or Sign in with</p>
                    <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </div> -->

                <p class="need">Already have an account? <a href="/login" style="color: #009245;">Sign in
                        here</a></p>
            </div>
        </section>
    </main>
    <footer>
        <!-- <hr> -->
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