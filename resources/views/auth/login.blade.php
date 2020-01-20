<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('land/css/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('land/css/login.css')}}">
    <title>Farmcorps</title>
</head>

<body>
    <section id="login">
        <div class="container">
            <div class="logo">
                <img src="{{asset('land/img/logo.PNG')}}" alt="">
                <h1>Login</h1>
            </div>
            <form action="{{route('login')}}" method="post">
                @csrf
                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                <input type="text" name="email" id="" placeholder="email">
                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                <input name="password" type="password" placeholder="password">
                <p>forgot password? <a href="#" style="color: #009345;">click here</a> </p>
                <input type="submit" value="Login  &#xf0a9">
            </form>
        </div>
        <div class="contact">
            <i class="fa fa-phone fa-2x"></i> <a href="#"> Contact Us</a>
        </div>
    </section>
</body>

</html>