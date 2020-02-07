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
            <a href="/" class="brand"><img src="{{asset('land/img/logo.PNG')}}" alt=""></a>

        </nav>
    </header>

    <section id="hero">
        <div class="overlay"></div>
        <div class="container">
            <div class="hero-text">
                <h1>FarmCorps for Farm Agents
                </h1>
                <p>Manage other smallholder farmers and get paid for your extension work
                </p>
            </div>
            <div class="form" id="form">
                <h2>Signup as an Agent below</h2>
                <p>...</p>
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
                        <input name="email"  type="email">
                    </div>

                    <div>
                        <label>Phone Number</label>
                        @error('phone')
                        <span class="invalid-feedback" role="alert alert-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <input name="phone" placeholder="Type your phone number" type="number">
                    </div>

                    <div class="countries">
                        <label>Country</label>
                        <select name="location" id="countries" size="">
                            <option disabled selected>Select Location</option>
                        </select>
                    </div>



                    <div>
                        <label>State/Province</label>
                        @error('state')
                        <span class="invalid-feedback" role="alert alert-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <input name="state" placeholder="Enter your State/Province" type="text">
                    </div>

                    <div>
                        <label>Local Government Area</label>
                        @error('lga')
                        <span class="invalid-feedback" role="alert alert-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <input name="lga" placeholder="LGA" type="text">
                    </div>

                    <div>
                        <label>Town/Village</label>
                        @error('town')
                        <span class="invalid-feedback" role="alert alert-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <input name="town" placeholder="Town/Village" type="text">
                    </div>

                    <div>
                        <label>What Crop(s) Do You Grow?</label>
                        @error('crop')
                        <span class="invalid-feedback" role="alert alert-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <input name="crop" placeholder="e.g maize, beans ...etc" type="text">
                    </div>

                    <div class="">
                        <label>How many years have you been into farming?</label>
                        @error('experience')
                        <span class="invalid-feedback" role="alert alert-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <select name="experience" size="">
                            <option value="5">1-5</option>
                            <option value="10">6-10</option>
                            <option value="20">11-20</option>
                            <option value="50">21-50</option>
                        </select>
                    </div>

                    <div class="">
                        <label>Do you have certification in sustainable farming or organic farming?</label>
                        @error('cert')
                        <span class="invalid-feedback" role="alert alert-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <select name="cert" size="">
                            <option value="1">YES</option>
                            <option value="0">NO</option>
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
        </div>
    </section>

    <hr
        style="border: 0;height: 0; max-width: 400px; margin: auto; border-top: 1px solid rgba(0, 0, 0, 0.1); border-bottom: 1px solid rgba(255, 255, 255, 0.3);">

    <section id="how-it-works">
        <h2>How It Works</h2>
        <div class="container">
            <div>
                <h3>1. Organise Farmers</h3>
                <p><img src="{{asset('land/assets/team.svg')}}" alt=""></p>
            </div>
            <div>
                <h3>2. Use Our App To Manager And Monitor Farms</h3>
                <p><img src="{{asset('land/assets/mobile.svg')}}" alt=""></p>
            </div>
            <div>
                <h3>3. Deliver The Contracts And Get Paid</h3>
                <p><img src="{{asset('land/assets/payment.svg')}}" alt=""></p>
            </div>
        </div>
    </section>

    <section id="freq-questions">
        <div class="container">
            <h2>Frequently Asked Questions</h2>
            <div>
                <p class="question">Q: How does the FarmCorps platform work</p>
                <p class="answer">A: FarmCorps helps groups of smallholder farmers produce quality grains and other raw
                    materials for food companies using sustainable farming practices. We provide market for farmers, the
                    finance needed for input purchase and the farming activities for the contract, data-driven extension
                    through our network of farm agents and traceability for each batch of produce. Register <a
                        class="faq-link" href="#form">here</a> to get
                    started.
                </p>
            </div>
            <div>
                <p class="question">Q: Can Anybody Become A Farm Agent?
                </p>
                <p class="answer">A: If you have grown and master how to grow a particular crop e.g maize, well known in
                    your farming community and have leadership skills, then we are happy to work with you. Alongside,
                    you should have a smartphone to collect your cohort data and access the data-driven advisory
                    provided by our app that you will deliver to the farmers. Register <a class="faq-link"
                        href="#form">here</a> to get
                    started.

                </p>
            </div>
            <div>
                <p class="question">Q: How do I go about becoming a Farm Agent? </p>
                <p class="answer">A: The first step is to register on our platform <a class="faq-link"
                        href="#form">here</a> , find farmers
                    in your community
                    and value chain that grow the kind of crops that you have extensive knowledge and can advise on and
                    organize them into a cohort. We provide applications for you to organize them and put their data on
                    our platform

                </p>
            </div>
            <div>
                <p class="question">Q: What tools do you provide for farm agents to get their work done
                </p>
                <p class="answer">A: We have developed easy-to-use mobile applications for you to collect, upload data
                    and monitor the activities of your cohort to help them produce with sustainable practices. When you
                    sign up as a Farm Agent, our representatives get in touch with you for some and then help you access
                    training materials on the use of the tools that we provide. The first step is for you to register
                    <a class="faq-link" href="#form">here</a>
                </p>
            </div>
            <div>
                <p class="question">Q: What is my role as a farm agent

                </p>
                <p class="answer">A: Your role is to organize farmers, manage communications among all the production
                    parties (farmers, food companies and FarmCorps), monitor, provide curated advisory and record
                    farmers activities to ensure they deliver on the production contracts.

                </p>
            </div>
        </div>
    </section>

    <section id="go-up">
        <a href="#hero">Register here to get started. </a>
    </section>

    <footer>
        <p>Got questions or concerns? <span> <a href="#"> Contact us. </a> </span></p>
        <p>No 5A Emina Cresent Ikeja Lagos.</p>

    </footer>
</body>
@include('sweetalert::alert')
</html>