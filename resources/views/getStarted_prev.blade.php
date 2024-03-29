<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('get_started/styles/getStarted.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <title>Farmcorps || Get Started</title>
    <link rel="shortcut icon" href="{{asset('land/assets/favicon.ico')}}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    {{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">--}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>
    <main>
        <div class="container">
            <div class="all">
                <div class="form-wrapper">
                    <div class="head">
                        <!-- <p><img src="../assets/favicon.ico" alt=""> farmCorps</p> -->
                        <h1><img src="../assets/favicon.ico" alt="">farm<span>Corps</span></h1>
                    </div>
                    <h2>Get the best farmer with the best produce around you</h2>
                    <div class="form">
                        <p>Fill the form below to get started</p>
                        <form action="{{route('find-farm')}}" method="post">
                            {{csrf_field()}}
                            <div class="crop">
                                <div>
                                    <p>Select a crop</p>
                                    <select name="crop" id="">
                                        <option value="maize">Maize</option>
                                        <option value="beans">Beans</option>
                                        <option value="soya">Soya Beans</option>
                                        <option value="rice">Rice</option>
                                        <option value="wheat">Wheat</option>
                                    </select>
                                </div>

                                <div class="slidecontainer">
                                    <p class="quantity">Quantity in tons <span class='red'>*</span> </p>
                                    <input name="quantity" type="range" min="50" max="10000" value="50" step="10" class="slider" id="myRange">
                                    <p class="tons"><span id="rangeOutput"></span> Tons</p>
                                </div>
                            </div>


                            <div class="specifications">
                                <p class="t">Specifications</p>
                                <div class="category">
                                    <p>Choose a Color <span class='red'>*</span> </p>
                                    <span class="color-select white">
                                        <input type="radio" name="color" id="" value="Yellow" checked>White
                                    </span>
                                    <span class="color-select yellow">
                                        <input type="radio" name="color" id="" value="Yellow" checked>Yellow
                                    </span>
                                    <span class="color-select brown">
                                        <input type="radio" name="color" id="" value="Yellow" checked>Brown
                                    </span>
                                    <span class="color-select green">
                                        <input type="radio" name="color" id="" value="Green">Green
                                    </span>
                                    <span class="color-select red">
                                        <input type="radio" name="color" id="" value="Mint blue">Red
                                    </span>
                                </div>
                                {{--<div class="category">--}}
                                    {{--<p>Weight <span class='red'>*</span> </p>--}}

                                    {{--<span>--}}
                                        {{--<input type="radio" name="weight" id="" value="100kg" checked> 100kg--}}
                                    {{--</span>--}}
                                    {{--<span>--}}
                                        {{--<input type="radio" name="weight" id="" value="200kg"> 200kg--}}
                                    {{--</span>--}}
                                    {{--<span>--}}
                                        {{--<input type="radio" name="weight" id="" value="500kg"> 500kg--}}
                                    {{--</span>--}}
                                {{--</div>--}}
                                {{--<div class="category">--}}
                                    {{--<p>Size <span class='red'>*</span> </p>--}}
                                    {{--<span>--}}
                                        {{--<input type="radio" name="size" id="" value="100g" checked> 100g--}}
                                    {{--</span>--}}
                                    {{--<span>--}}
                                        {{--<input type="radio" name="size" id="" value="200g"> 200g--}}
                                    {{--</span>--}}
                                    {{--<span>--}}
                                        {{--<input type="radio" name="size" id="" value="500g"> 500g--}}
                                    {{--</span>--}}
                                {{--</div>--}}
                                <div class="category">
                                    <p>Degree of maturity <span class='red'>*</span> </p>
                                    
                                    <span>
                                        <input type="radio" name="maturity-condition" id="" value="Wet"> Wet
                                    </span>
                                    <span>
                                        <input type="radio" name="maturity-condition" id="" value="Dry"> Dry
                                    </span>
                                </div>
                                <div class="category">
                                    <p>Do you want a staggered delivery? <span class='red'>*</span> </p>
                                    <span>
                                        <input type="radio" name="staggered" id="" value="Yes" checked> Yes
                                    </span>
                                    <span>
                                        <input type="radio" name="staggered" id="" value="Yes"> No
                                    </span>
                                    <div class="delivery__time">
                                        <p>If yes, over <span class='red'>*</span> </p>
                                        <div class="time">
                                            <span>
                                                <input type="radio" name="time" id="" value="3 months"> 3 months
                                            </span> 
                                            <br>
                                            <span>
                                                <input type="radio" name="time" id="" value="6 months"> 6 months
                                            </span>
                                            <br>
                                             <span>
                                                <input type="radio" name="time" id="" value="9 months"> 9 months
                                            </span>
                                            <br>
                                             <span>
                                                <input type="radio" name="time" id="" value="12 months"> 12 months
                                            </span>
                                        </div>
                                        
                                        <div class="delivery__location">
                                            <p style="margin-top: 10px">Select your factory location</p>
                                            <select name="preferred_state" id="" class="states"></select>
                                            <select name="preferred_lga" id="" class="lga"></select>
                                        </div>
                                    </div>

                                </div>
                                <div class="category">
                                    <p>Do you have a preferred location for sourcing? <span class="red">*</span>?</p>
                                    <span>
                                        <input type="radio" name="preferred" id="" value="Mint blue"> Yes
                                    </span>
                                    <span>
                                        <input type="radio" name="preferred" id="" value="Mint blue"> No
                                    </span>
                                    <div>
                                        <p>If yes, select your preferred locations</p>
                                        <div class="delivery__location__preferred">
                                            <select name="delivery_state" id="" class="states"></select>
                                            <select name="delivery_lga" id="" class="lga"></select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="notice">
                                <span class="red">Notice:</span> we help mediate negotiatin of prices per kg of produce
                                using data from
                                current prices and forecast, but we assure you that you'll get the best pricing from our
                                farmers.
                            </div>
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Proceed</button>
                            {{--<input type="submit" value="Proceed">--}}


                            <div id="myModal" class="modal fade" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title"> <img src="{{asset('get_started/assets/favicon.ico')}}" alt="">farm<span>Corps</span></h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="name">Name:</label>
                                                <input type="text" name="name" class="form-control" id="name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="personal_email">Personal Email address:</label>
                                                <input type="email" name="personal_email" class="form-control" id="p_email" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Organization Name:</label>
                                                <input type="text" name="company" class="form-control" id="email" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Organization Email address:</label>

                                                <input type="email" name="email" class="form-control" id="email" placeholder="This will be the email address used for communication" required>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 cold-md-6">
                                                    <div class="form-group">
                                                        <label for="email">Role:</label>
                                                        <input type="text" name="role" class="form-control" id="email" >
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 cold-md-6">
                                                    <div class="form-group">
                                                        <label for="email">Phone:</label>
                                                        <input type="tel" name="phone" class="form-control" id="email" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Address:</label>
                                                <input type="text" name="address" class="form-control" id="email" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="image"></div>
            </div>
        </div>
    </main>
    @include('sweetalert::alert')
    <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous">

    </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="{{asset('get_started/js/getStarted.js')}}"></script>
</body>

</html>