<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('reg-farmers/css/farmersReg.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Raleway:500,700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('reg-farmers/assets/favicon.ico')}}" type="image/x-icon">
    <title>FarmCorps for Farmers</title>
</head>

<body>
    <main>

        <div class="all">
            <div class="wrapper">
                <div class="logo">
                    <img src="{{asset('reg-farmers/assets/logo.PNG')}}" alt="">
                </div>
                <div class="text">
                    <h1>Farmers Registration Page</h1>
                    <p>FarmCorps connects farmers like you to our partner agro-processors and food companies who will
                        buy
                        your farm produce at very good prices.</p>
                </div>
                <div class="form-wrapper">
                    <p>Please fill in your details so we can get you started. It takes less than 2 minutes</p>
                    <form action="{{route('farmer.store-reg')}}" method="post">
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                              <div style="align-self: center;">
                                  <span class="text-danger" role="alert">{{ $error }}</span>
                              </div>
                                {{--<div>{{$error}}</div>--}}
                            @endforeach
                        @endif
                        @csrf
                        <div class="person">

                            @error('first_name')
                            <p class="text-danger">{{$message}}</p>
                            <span class="text-danger">
                            <small>{{ $message }}</small>
                            </span>
                            @enderror

                            <input type="text" name="first_name" placeholder="First Name">
                            <input type="text" name="last_name" placeholder="Last Name">
                            <input type="number" name="age" placeholder="Age">
                            <input type="tel" name="phone" placeholder="Phone number">
                            <input type="email" name="email" placeholder="Email">
                            <input type="text" name="bvn" placeholder="BVN">
                            <input type="text" name="bvn_confirmation" placeholder="confirm BVN">
                            <div class="gender">
                                <p>Gender</p>
                                <label for="">
                                    <input value="male" type="radio" name="gender" id=""> Male
                                </label>
                                <label for="">
                                    <input value="female" type="radio" name="gender" id=""> Female
                                </label>
                            </div>
                        </div>


                        <input type="hidden" name="country" id="countryId" value="NG" />
                        <div class="address">
                            <h3>Address</h3>
                            <select name="state" class="states order-alpha" id="stateId">
                                <option value="">Select State</option>
                            </select>
                            <select name="city" class="cities order-alpha" id="cityId">
                                <option value="">Select Local Government / City</option>
                            </select>
                            <textarea name="address" id="" placeholder="street address"></textarea>
                        </div>
                        @if(isset($ref))
                                <input class="ref" value="{{$ref}}" name="referral_code" type="text" placeholder="referral code, if any">
                            @endif
                          @if(!isset($ref))
                                <input class="ref" name="referral_code" type="text" placeholder="referral code, if any">
                              @endif
                        <div class="crops">
                            <p>What crops do you grow?</p>
                            <div class="grains">
                                <p>Grains</p>
                                <label for="">
                                    <input type="checkbox" value="maize" name="grains[]" id=""> Maize
                                </label>
                                <label for="">
                                    <input type="checkbox" value="rice" name="grains[]" id=""> Rice
                                </label>
                                <label for="">
                                    <input type="checkbox" value="wheat" name="grains[]" id=""> Wheat
                                </label>
                                <label for="">
                                    <input type="checkbox" value="sorghum" name="grains[]" id=""> Sorghum
                                </label>
                            </div>
                            <div class="legumes">
                                <p>Legumes</p>

                                <label for="">
                                    <input type="checkbox" value="soyabeans" name="legumes[]" id=""> Soyabeans
                                </label>
                                <label for="">
                                    <input type="checkbox" value="cowpea" name="legumes[]" id=""> Cowpea (beans)
                                </label>
                                <label for="">
                                    <input type="checkbox" value="sorghum" name="legumes[]" id=""> Sorghum
                                </label>
                                <label for="">
                                    <input type="checkbox" value="groundnut" name="legumes[]" id=""> Groundnut
                                </label>
                            </div>
                            <div class="vegetable">
                                <p>Vegetables</p>
                                <label for="">
                                    <input type="checkbox" value="spinach" name="vegetables[]" id=""> Spinach
                                </label>
                                <label for="">
                                    <input type="checkbox" value="tomatoes" name="vegetables[]" id=""> Tomatoes
                                </label>
                                <label for="">
                                    <input type="checkbox" value="chili" name="vegetables[]" id=""> Chili
                                </label>

                            </div>
                            <div class="roots">
                                <p>Roots</p>
                                <label for="">
                                    <input type="checkbox" value="yam" name="roots[]" id=""> Yam
                                </label>
                                <label for="">
                                    <input type="checkbox" value="cassava" name="roots[]" id=""> Cassava
                                </label>
                                <label for="">
                                    <input type="checkbox" value="potatoes" name="roots[]" id=""> Potatoes
                                </label>
                                <label for="">
                                    <input type="checkbox" value="others" name="roots[]" id=""> Others
                                </label>
                            </div>
                        </div>
                        <div class="farmsize">
                            <h4>What is the size of your farmland?</h4>
                            <select name="farmland" id="">
                                <option value="" disabled>- choose famrland range-</option>
                                <option value="3">0 - 2.5 acres</option>
                                <option value="5">2.6 - 5 acres</option>
                                <option value="20">5 - 20 acres</option>
                                <option value="100">50 - 100 acres</option>
                                <option value="200">100 - 200 acres</option>
                            </select>
                        </div>
                        <div class="smartph">
                            <p>Do you use a smartphone?</p>
                            <label for="">
                                <input type="radio" value="1" name="smart_phone" id=""> Yes
                            </label>
                            <label for="">

                                <input type="radio" value="0" name="smart_phone" id=""> No
                            </label>
                        </div>
                        <div class="managed">
                            <p> Have you managed other farms before? </p>
                            <label for="">
                                <input type="radio" value="1" name="farm_manager" id=""> Yes
                            </label>
                            <label for="">

                                <input type="radio" value="0" name="farm_manager" id=""> No
                            </label>
                        </div>
                        <div class="accept">
                            <input value="1"  type="checkbox" name="accept" id="" required>
                            <p>
                                By checking this box, I agree to the the <a href="#"> terms and conditions </a> of
                                FarmCorps
                                (Freshmarte Global Services LTD)
                            </p>
                        </div>
                        <input type="submit" value="submit">
                    </form>
                </div>
            </div>
            <div class="image"></div>
        </div>

    </main>
</body>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//geodata.solutions/includes/statecity.js"></script>

</html>