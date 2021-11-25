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
            <img src="{{URL::asset('/image/logo.png')}}" alt="profile Pic" height="200" width="200">
        </div>


        <div>
            <div class="hometext">
                <h2>Seja bem vindo a o site da Company Word of Art, caso queira solicitar um dos nossos quadros faça o seu cadastro</h2>
            </div>
            &nbsp;

            <ul class="slides-list" >
                <li class="slide" >
                    <img src="{{URL::asset('/image/quadros/q1.jpg')}}" alt="profile Pic" height="200" width="200">
                </li>
                <li class="slide" >
                    <img src="{{URL::asset('/image/quadros/q2.jpg')}}" alt="profile Pic" height="200" width="200">
                </li>
                <li class="slide" >
                    <img src="{{URL::asset('/image/quadros/q3.jpg')}}" alt="profile Pic" height="200" width="200">
                </li>
                <li class="slide" >
                    <img src="{{URL::asset('/image/quadros/q4.jpg')}}" alt="profile Pic" height="200" width="200">
                </li>
                <li class="slide" >
                    <img src="{{URL::asset('/image/quadros/q5.jpg')}}" alt="profile Pic" height="200" width="200">
                </li>
                <li class="slide" >
                    <img src="{{URL::asset('/image/quadros/q6.jpg')}}" alt="profile Pic" height="200" width="200">
                </li>
                <li class="slide" >
                    <img src="{{URL::asset('/image/quadros/q7.jpg')}}" alt="profile Pic" height="200" width="200">
                </li>
                <li class="slide" >
                    <img src="{{URL::asset('/image/quadros/q8.jpg')}}" alt="profile Pic" height="200" width="200">
                </li>
            </ul>
        </div>
        &nbsp;
        <button onclick="window.location.href='/clients'">Fazer cadastro</button>
    </body>
</html>
