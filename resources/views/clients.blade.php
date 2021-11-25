<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Company Word of Art</title>
        <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> --}}


        <link rel="stylesheet" href="{{ URL::asset('css/cadastro.css') }}" />

    <body class="antialiased">
        <div class="site-logo">
            <a href="/"><img src="{{URL::asset('/image/logo.png')}}" alt="profile Pic" height="200" width="200"><a>
        </div>
        <div class="sitehome"> 
    
            <div class="relative flex items-top justify-center min-h -screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
    
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
    
                <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                        <div class="container">
                            <form action="{{route('database.user')}}" method="POST">
                                @csrf
                                <h3 class="subTituloPagina"><span>Dados Pessoais</span></h3>
                                <div class="item">
                                    <input class="texto letras" tabindex="1" size=35 placeholder="Nome Completo*" type="text" id="name" name="name" autocomplete="off" size="30" value="">
                                @if ($errors->has('name'))
                                    <span class="error"> Nome invalido </span>
                                @endif
                                </div>
                            
                                <div class="item">
                                    <span>data de nacimento : </span> <input id="birth_date" type="date" name="birth_date">
                                </div>
                                <div class="item">
                                    <input class="texto" size=35 tabindex="2" placeholder="E-mail*" type="text" id="email" name="email" autocomplete="off" size="30" value="">
                                @if ($errors->has('email'))
                                    <span class="error"> Email invalido </span>
                                @endif
                                </div>

                                <div class="item">
                                    <input class="texto mascara celular" tabindex="3" size=35 placeholder="Celular" type="text" id="phone" name="phone" autocomplete="off" size="15" value="">
                                    
                                </div>
                                
                                <div class="item erro">
                                    <input class="texto mascara cep bloquear-cidade" tabindex="4" size=35 placeholder="CEP* 00000-000" type="text" id="cep" name="cep" autocomplete="off" size="10" value="">
                                @if ($errors->has('cep'))
                                    <span class="error"> CEP invalido</span>
                                @endif
                                </div>
                                <div class="item">
                                    <input class="texto" size=35 placeholder="Endereço*" tabindex="5" type="text" id="street" name="street" autocomplete="off" size="30" value="">
                                @if ($errors->has('street'))
                                    <span class="error"> endereço invalido</span>
                                @endif
                                </div>
                                <div class="item">
                                    <input class="texto" size=35 placeholder="Número da casa*" tabindex="6" type="text" id="house_number" name="house_number" autocomplete="off" size="10" value="">
                                @if ($errors->has('house_number'))
                                    <span class="error"> numero da rua invalido</span>
                                @endif
                                </div>
                                <div class="item">
                                    <input class="texto" size=35 placeholder="Complemento*" tabindex="7" type="text" id="complement" name="complement" autocomplete="off" size="30" value="">
                                @if ($errors->has('complement'))
                                    <span class="error"> complemento invalido</span>
                                @endif
                                </div>
                                <div class="item">
                                    <input class="texto" size=35 placeholder="Cidade*" type="text" tabindex="8" id="city" name="city" autocomplete="off" size="18" value="">
                                @if ($errors->has('city'))
                                    <span class="error"> cidade invalido</span>
                                @endif
                                </div>
                                <div class="wrapper" id="sex">
                                    <label>Sexo:<span class="required"></span></label>
                                    <label class="radio"><input type="radio" name="sex" value="M"> Masculino</label>
                                    <label class="radio"><input type="radio" name="sex" value="F"> Feminino</label>
                                    <label class="radio"><input type="radio" name="sex" value="O"> Outros</label>
                                </div>
                                <div class="item">
                                    <div class="item2">
                                        <label for="states">Estado:<span class="required"></span></label>
                                                <span class="select texto item">
                                                    <select id="states" name="states">
                                                        <option value=""></option>
                                                                                        <option value="AC">AC</option>
                                                                                        <option value="AL">AL</option>
                                                                                        <option value="AP">AP</option>
                                                                                        <option value="AM">AM</option>
                                                                                        <option value="BA">BA</option>
                                                                                        <option value="CE">CE</option>
                                                                                        <option value="DF">DF</option>
                                                                                        <option value="ES">ES</option>
                                                                                        <option value="GO">GO</option>
                                                                                        <option value="MA">MA</option>
                                                                                        <option value="MT">MT</option>
                                                                                        <option value="MS">MS</option>
                                                                                        <option value="MG">MG</option>
                                                                                        <option value="PA">PA</option>
                                                                                        <option value="PB">PB</option>
                                                                                        <option value="PR">PR</option>
                                                                                        <option value="PE">PE</option>
                                                                                        <option value="PI">PI</option>
                                                                                        <option value="RJ">RJ</option>
                                                                                        <option value="RN">RN</option>
                                                                                        <option value="RS">RS</option>
                                                                                        <option value="RO">RO</option>
                                                                                        <option value="RR">RR</option>
                                                                                        <option value="SC">SC</option>
                                                                                        <option value="SP">SP</option>
                                                                                        <option value="SE">SE</option>
                                                                                        <option value="TO">TO</option>
                                                                                </select>
                                                </span>
                                    </div>
                                </div>
                                <div action="container-login100-form-btn ">
                                    <input type="submit" class="login100-form-btn" value="Enviar" name="btn-go">
                                </div>
                            </form>
                            {{-- <h1>{{$clients[0]->name}}</h1> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ URL::asset('js/main.js') }}"></script>
    </body>
</html>
