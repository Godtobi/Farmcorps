<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('dash/styles/dashboard.css')}}">
    <link rel="stylesheet" href="{{asset('dash/styles/nav.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">
    <title>Farmcorps || Dashboard</title>
</head>

<body>
    <header>
        <nav>
            <a href="" class="brand"> <img src="{{asset('dash/assets/favicon.ico')}}" alt=""> farm<span>Corps</span></a>

            <ul class="nav-list">
                <li class="nav-item search">
                    <form action="">
                        <input type="search" name="" id="" placeholder="search for something">
                    </form>
                    <a href="#" class="nav-link" onclick="openSearch(this)"><i class="fas fa-search"></i></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-bell"></i>
                    </a>
                </li>
                <li class="nav-item"><a href="" class="nav-link"  onclick="toggleDashMenu(this)"><i class="fas fa-bars"></i></a></li>
            </ul>
            <div class="dash-menu">
                <ul class="menu">
                    <li class="dash-item">
                        <a href="" class="dash-link">
                            <i class="fas fa-home"></i>
                            <p>Home</p>
                        </a>
                    </li>
                    <li class="dash-item">
                        <a href="" class="dash-link">
                            <i class="fas fa-briefcase"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                </ul>
                <a href="/signout" class="logout-link dash-link">


                    <p>Logout</p>

                </a>

                    {{--<a class="logout-link dash-link" href="{{ route('logout') }}"--}}
                       {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                        {{--<i class="fas fa-power-off"></i>--}}

                        {{--{{ __('Logout') }}--}}
                    {{--</a>--}}
                {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                        {{--@csrf--}}
                    {{--</form>--}}

            </div>
        </nav>
    </header>

    <main>


        <div class="main-container">
            <div class="crop">
                <div class="crop-img">
                    @if($farm->crop=='maize')
                        <img src="{{asset('dash/assets/maize.png')}}" alt="">
                        @endif
                        @if($farm->crop=='soya')
                            <img src="{{asset('dash/assets/soya.png')}}" alt="">
                        @endif
                        @if($farm->crop=='rice')
                            <img src="{{asset('dash/assets/rice.svg')}}" alt="">
                        @endif
                        @if($farm->crop=='beans')
                            <img src="{{asset('dash/assets/beans.png')}}" alt="">
                        @endif
                        @if($farm->crop=='wheat')
                            <img src="{{asset('dash/assets/wheat.png')}}" alt="">
                        @endif
                </div>
                <div class="crop-info">
                    <h2>{{$farm->crop}}</h2>
                    <h3>Sebad Agro-Processing</h3>
                    <p>Production ID: {{$farm->production_id}}</p>
                    <p>Quantity: {{"   ".$farm->quantity."  "}}tons</p>
                    <p>Color: {{"   ".$farm->color}}</p>
                    @if(!empty($farm->maturity))
                        <p>Maturity: {{"  " .$farm->maturity." ".$farm->crop}} </p>
                    @endif

                </div>
            </div>
            <div class="progress">
                <h2>Production Progress</h2>
                <div class="prog-main">
                    <div class="prog-stages">
                        <h3>Production stage</h3>
                        <div class="allStages">
                            <div class="stage" style="color: #02a554;">
                                <h5>completed</h5>
                                <div class="bar">
                                    <div class="inner" style="width: 100%;">
                                    </div>
                                </div>
                                <h6>Land Cultivation</h6>
                            </div>
                            <div class="stage" style="color: #02a554;">
                                <h5>completed</h5>
                                <div class="bar">
                                    <div class="inner" style="width: 100%;">
                                    </div>
                                </div>
                                <h6>Planting</h6>
                            </div>
                            <div class="stage" style="color: #52afa2;">
                                <h5>In progress</h5>
                                <div class="bar">
                                    <div class="inner" style="width: 37%;">
                                    </div>
                                </div>
                                <h6>fertilizing</h6>
                            </div>
                            <div class="stage" style="color: red;">
                                <h5>not started</h5>
                                <div class="bar">
                                    <div class="inner" style="width: 0%;">
                                    </div>
                                </div>
                                <h6>Harvesting</h6>
                            </div>
                        </div>
                    </div>
                    <div class="info">
                        <div class="issues">
                            <p>Issues: <span style="color: #02a554;">None found</span></p>
                        </div>
                        <p>Production start date</p>
                        <p>Predicted harvest date</p>
                        <p>Estimated delivery date</p>
                    </div>
                </div>
            </div>
            <div class="status">
                <h3>Production status</h3>
                <div class="stat-container">
                    <div class="stat harvest">
                        <h5>Harvest</h5>
                        <div class="bar">
                            <div class="inner" style="width: 67%;"></div>
                        </div>
                        <div class="stat-info">
                            <div class="target">
                                <p>Target</p>
                                <p>02/08/2020</p>
                            </div>
                            <div class="target">
                                <p>Estimate</p>
                                <p>02/08/2020</p>
                            </div>
                        </div>

                    </div>
                    <div class="stat yield">
                        <h5>Yield</h5>
                        <div class="bar">
                            <div class="inner" style="width: 79%;"></div>
                        </div>
                        <div class="stat-info">
                            <div class="target">
                                <p>Target</p>
                                <p>02/08/2020</p>
                            </div>
                            <div class="target">
                                <p>Estimate</p>
                                <p>02/08/2020</p>
                            </div>
                        </div>

                    </div>
                    <div class="stat health">
                        <h5>Health</h5>
                        <div class="bar">
                            <div class="inner" style="width: 30%;"></div>
                        </div>
                        <div class="stat-info">
                            <div class="condition">
                                <p>Bad</p>
                            </div>
                            <div class="condition">
                                <p>Good</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="tasks">
                <h3>Tasks</h3>
                <div class="all-tasks">
                    <div class="indi-task">
                        {{--<a href="#taskModal" onclick="openNegotiationModal()" class="modal-pop">Negotiate Contract</a>--}}
                        <a href="{{route('negotiation.show',$farm->id)}}" >Negotiate Contract</a>
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="indi-task">
                        <a href="#contractModal" class="modal-pop">Sign contract Contract</a>
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="indi-task disabled">
                        <a href="#paymentModal" class="modal-pop">Make payment for contract</a>
                        <i class="fas fa-clock"></i>
                    </div>
                </div>
                <section id="allModals">
                    <div class="modal" id="taskModal">
                        <div class="modal-content">
                            <h1>Negotiate Contract</h1>
                            <form action="" class="wrapper">
                                <p>Current maize price is: N91,381 per ton</p>
                                <p>Please input the amount you're willing to pay per ton</p>
                                <div>
                                    <input type="number" placeholder="99,999" name="" id="">
                                    <input type="submit" value="Proceed to sign contract">
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="modal" id="contractModal">
                        <div class="modal-content">
                            <h1>Sign contract</h1>
                            <form action="" class="wrapper">
                                <p>By checking the boxes below, you agree to sign with our farmers for the production of
                                    2,08 tons of white maize, for the given prce you agreed on. To be delivered on the
                                    2nd Of July 2022</p>
                                <div>
                                    <label for="terms-check">
                                        <input type="checkbox" placeholder="99,999" name="" id="terms-check"> I agree to
                                        the <a href="#">terms and condtions</a>
                                    </label>
                                    <label for="cont-check">
                                        <input type="checkbox" placeholder="99,999" name="" id="cont-check"> I sign the
                                        contract on behalf of my company</a>
                                    </label>
                                    <input type="submit" value="Sign contract">
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="modal" id="paymentModal">
                        <div class="modal-content">
                            <h1>Sign contract</h1>
                            <form action="" class="wrapper">
                                <p>Contact us to make payment or enter your account details</p>
                                <div>
                                    <input type="text" placeholder="5331 **** **** **** ****">
                                    <input type="text" placeholder="22/10" class="half">
                                    <input type="text" placeholder="***" class="half">
                                    <input type="submit" value="Make Payment">
                                </div>
                            </form>

                        </div>
                    </div>
                </section>
            </div>
            <div style="width: 100px; height: 400px;" class="farm-map">

                    {!! Mapper::render() !!}

            </div>
            <div class="request">
                <h3>Make Request</h3>
                <div class="form-wrapper">
                    <form action="">
                        <div>
                            <textarea name="" id="" placeholder="Make request here..."></textarea>
                            <hr>
                            <div class="actions">
                                <input type="date" id="date">
                                <a href=""><i class="fas fa-plus-circle"></i>Choose stage</a>
                            </div>

                        </div>
                        <input type="submit" value="Make Request">
                    </form>
                </div>
            </div>
        </div>
    </main>

</body>
<script>
    let today = new Date().toISOString().substr(0, 10);
    document.querySelector("#date").value = today;

    document.querySelector("#today2").valueAsDate = new Date();
</script>

<script src="{{asset('dash/js/dashboard.js')}}"></script>
<script src="{{asset('dash/js/nav.js')}}"></script>

</html>