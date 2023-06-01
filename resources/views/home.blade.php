<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Favicon --}}
    <link rel="shortcut icon" href="icons8-laravel-32.png" type="png">
    <title>Laravel First Steps</title>
</head>



<body>
    @include('partials.style')
    @include('partials.header')

    <section id="main">
        <div class="logo-container">
            <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="300">
            <h1 id="hello">{{$hello}}</h1>
        </div>
        <div class="gif-container">
            <img src="https://media3.giphy.com/media/mf8UbIDew7e8g/giphy.gif" alt="world">
        </div>
    </section>
</body>

</html>
