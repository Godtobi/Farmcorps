<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('dash/styles/yourFarms.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,400;0,500;1,700&display=swap"
        rel="stylesheet">
    <title>Farmcorps || Farms</title>
    <style>
        .slider {
            -webkit-appearance: none;
            width: 100%;
            height: 15px;
            border-radius: 5px;
            background: #d3d3d3;
            outline: none;
            opacity: 0.7;
            -webkit-transition: .2s;
            transition: opacity .2s;
        }

        .slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            background: #4CAF50;
            cursor: pointer;
        }

        .slider::-moz-range-thumb {
            width: 25px;
            height: 25px;
            border-radius: 50%;
            background: #4CAF50;
            cursor: pointer;
        }</style>
</head>

<body>
    <header>
        <nav>
            <a href="/dashboard" class="brand"> <img src="{{asset('dash/assets/favicon.ico')}}" alt=""> farm<span>Corps</span></a>

            <ul class="nav-list">
                <li class="nav-item search">
                    <form action="">
                        <input type="search" name="" id="" placeholder="search for something">
                    </form>
                    <a href="#" class="nav-link" onclick="openSearch(this)"><i class="fas fa-search"></i></a>
                </li>
                <li class="nav-item"><a href="" class="nav-link"><i class="fas fa-bell"></i></a></li>
                <li class="nav-item"><a href="" class="nav-link"><i class="fas fa-bars"></i></a></li>
            </ul>
        </nav>
    </header>
    <main>

        <section class="all-farms">

            <div class="action-btn row">
                <h1 style="text-align: center;">Production Order</h1>

            </div>
            <div class="container">

                <div class="farms">


                    @foreach($farms as $farm)
                        <div class="indi-farm maize">
                            <a href="{{route('dashboard',$farm->id)}}"></a>
                            <div class="svg-img">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="512" height="512">
                                    <g id="Glass_House" data-name="Glass House">
                                        <g id="Outline">
                                            <path d="M104,400a8,8,0,0,0-8,8v32a8,8,0,0,0,16,0V408A8,8,0,0,0,104,400Z" />
                                            <path
                                                    d="M475.839,210.772a8,8,0,1,0-10.918,11.7L483.7,240h-136.7L237.291,144H313.12a8,8,0,0,0,0-16c-190.06.061-179.029-.962-182.388,1.979l-32,28A8.009,8.009,0,0,0,104,172c5.285,0,5.146-2.759,32-25.37L242.708,240H29.291l29.69-25.979a8,8,0,0,0-10.535-12.042C1.234,243.3,0,242.982,0,248V488a8,8,0,0,0,8,8H504a8,8,0,0,0,8-8V248C512,243.077,511.75,244.336,475.839,210.772ZM64,480H16V448H64Zm0-48H16V400H64ZM16,384V352H82.392a71.87,71.87,0,0,0-16.578,32Zm176,96H80V400a56,56,0,0,1,112,0Zm64,0H208V448h48Zm0-48H208V400h48Zm0-48H206.186a71.87,71.87,0,0,0-16.578-32H256Zm0-48H168.921a71.715,71.715,0,0,0-65.842,0H16V303.667H256Zm0-48.333H16V256H256ZM157.291,144H213l109.713,96h-55.7ZM336,480H272V256h64Zm80,0H352V256h64Zm80,0H432V256h64Z" />
                                            <path
                                                    d="M301.657,349.657l16-16a8,8,0,0,0-11.314-11.314l-16,16a8,8,0,0,0,11.314,11.314Z" />
                                            <path
                                                    d="M301.657,389.657l16-16a8,8,0,0,0-11.314-11.314l-16,16a8,8,0,0,0,11.314,11.314Z" />
                                            <path
                                                    d="M381.657,349.657l16-16a8,8,0,0,0-11.314-11.314l-16,16a8,8,0,0,0,11.314,11.314Z" />
                                            <path
                                                    d="M381.657,389.657l16-16a8,8,0,0,0-11.314-11.314l-16,16a8,8,0,0,0,11.314,11.314Z" />
                                            <path
                                                    d="M456,352c5.675,0,7.011-4.642,21.657-18.343a8,8,0,0,0-11.314-11.314l-16,16A8.009,8.009,0,0,0,456,352Z" />
                                            <path
                                                    d="M456,392c5.675,0,7.011-4.642,21.657-18.343a8,8,0,0,0-11.314-11.314l-16,16A8.009,8.009,0,0,0,456,392Z" />
                                            <path
                                                    d="M372.852,191.834l-18.509,18.509A8.009,8.009,0,0,0,360,224c5.693,0,6.27-3.979,24.05-20.736,28.172,20.53,63.688,4.91,88.633-20.034,33.355-33.356,39.069-106.821,39.3-109.932a8,8,0,0,0-8.561-8.561c-3.111.227-76.575,5.942-109.933,39.3C359.521,138,358.445,171.151,372.852,191.834ZM494.973,81.743c-2.626,20.307-10.977,67.546-33.605,90.174-23.162,23.162-48.577,30.5-65.807,19.835l66.1-66.1a8,8,0,0,0-11.314-11.314l-65.926,65.926c-9.875-17.209-2.384-42.155,20.383-64.921C427.428,92.721,474.668,84.37,494.973,81.743Z" />
                                            <path
                                                    d="M345.134,142.87c22.25,0-19.172-34.552,72.757-106.678,2.448,5.2,5.69,12.5,8.922,21a8,8,0,1,0,14.955-5.686,289.928,289.928,0,0,0-13.941-31.294,8,8,0,0,0-11.638-2.764c-2.63,1.843-64.548,45.682-75.633,92.394a123.687,123.687,0,0,0-3.423,24.793A8,8,0,0,0,345.134,142.87Z" />
                                            <circle cx="80" cy="184" r="8" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="farm-text">

                                <h3>{{$farm->crop}} Farm</h3>
                                <p class="location">{{$farm->state_location}} state</p>
                                <p class="issue good">No issue</p>
                            </div>
                        </div>
                        @endforeach





                </div>
                <br>
                <div class="action-btn">
                    <a class="btn btn-primary" data-toggle="modal" data-target="#myModal" href="#">Add farms</a>
                </div>

            </div>

            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Add Farm</h4>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('add-farms')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Select Crop</label>
                                    <select name="crop" class="form-control">
                                        <option value="maize" >Maize</option>
                                        <option value="soya" >Soya Beans</option>
                                        <option value="rice" >Rice</option>
                                        <option value="wheat" >Wheat</option>
                                    </select>

                                </div>

                                <div class="form-group">
                                    <label for="customRange1">Quantity in tons</label>
                                    <input name="quantity"  type="range" class="slider form-contol" id="customRange1">
                                </div>
                                <div class="form-group">
                                    <label>Color</label>
                                    <select name="color" class="form-control">
                                        <option value="red" >Red</option>
                                        <option value="white" >White</option>
                                        <option value="yellow" >Yellow</option>
                                        <option value="green" >Green</option>
                                    </select>

                                </div>

                                <div class="form-group">
                                    <label>Maturity</label>
                                    <select name="maturity" class="form-control">
                                        <option value="wet" >Wet</option>
                                        <option value="dry" >Dry</option>
                                    </select>

                                </div>

                                <div class="form-group delivery__location" >
                                    <label>Select Preferred Source Location</label>
                                    <select name="state_location" class="form-control states ">
                                        <option value=" " >Select state</option>

                                    </select>

                                </div>

                                <div class="delivery__location form-group">
                                    <p style="margin-top: 10px">Select your factory location</p>
                                    <select name="factory_state" id="" class="states form-control"></select>
                                    <select name="factory_lga" id="" class="lga form-control"></select>
                                </div>

                                <div class="form-group delivery__location">
                                    <label>Select LG</label>
                                    <select name="source_state" class="form-control lga">
                                        <option value=" " >Select local gorvement</option>

                                    </select>

                                </div>

                                <div class="form-group delivery__location" >
                                    <label>Factory Location</label>
                                    <select name="source_lga" class="form-control states ">
                                        <option value="" >Select state</option>

                                    </select>

                                </div>

                                <div class="form-group delivery__location">
                                    <label></label>
                                    <select name="lga_location" class="form-control lga">
                                        <option value=" " >Select local gorvement</option>

                                    </select>

                                </div>

                                <input class="btn btn-primary" type="submit" value="Submit">

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>

        </section>
    </main>
    @include('sweetalert::alert')
    <script src="{{asset('get_started/js/getStarted.js')}}"></script>
    <script src="{{asset('dash/js/yourFarms.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>

</html>