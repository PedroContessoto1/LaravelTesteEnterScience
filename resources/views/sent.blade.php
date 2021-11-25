<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Company Word of Art</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ URL::asset('css/home.css') }}" />

    <body class="antialiased">
        <div class="imgLogo">
            <a href="/"><img src="{{URL::asset('/image/logo.png')}}" alt="profile Pic" height="200" width="200"></a>
        </div>
        <h2>Obrigado por se cadastrar, enviaremos mais informaçoes no seu whatsapp</h2>
        <button onclick="window.location.href='/'">Home</button>

    </body>
</html>
