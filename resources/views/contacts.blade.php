<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Favicon --}}
    <link rel="shortcut icon" href="icons8-laravel-32.png" type="png">
    <title>Contacts</title>
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        background-color: #1D2225;
        color: #EF3B2D;
    }
</style>

<body>
    @include('partials.style')
    @include('partials.header')

    <section id="contacts">
        <h2>CONTACTS</h2>
        <div class="contact-list">
            <ul>
                @foreach ($data as $key => $value)
                    <li> {{ $key . ' ' . $value }} </li>
                @endforeach
            </ul>
        </div>
    </section>
</body>

</html>
