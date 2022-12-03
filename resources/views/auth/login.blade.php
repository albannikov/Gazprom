<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

 
    </head>
    <body>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <p>Логин</p><input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            <p>Пароль</p><input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            <button type="submit" class="btn btn-primary">
                {{ __('Login') }}
            </button>
        </form>
    </body>
</html>

