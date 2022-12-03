<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <title>авторизация - АИС "Дороги - Газпром"</title>
        <link rel="shortcut icon" href="/img/favicon.png" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/style.css">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

 
    </head>
    <body>
        <section>
    <div>
            <div class="wave"></div>
            <div class="wave"></div>
            <div class="wave"></div>
        </div>
    <div class="wrapper">
        <div class="logo">
            <img src="/img/logo-square.png" alt="">
        </div>
        <div class="text-center mt-4 name">
            АИС "Дороги - Газпром"
        </div>
        <form method="POST" action="{{ route('login') }}" class="p-3 mt-3">
        @csrf
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <!-- <input type="text" name="userName" id="userName" placeholder="Username"> -->
                
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <!-- <input type="password" name="password" id="pwd" placeholder="Password"> -->
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            </div>
            <!-- <button class="btn mt-3">Login</button> -->
            <button class="btn mt-3" type="submit" class="btn btn-primary">
                {{ __('Login') }}
            </button>
        </form>
      
    </div>
</section>
    </body>
</html>

