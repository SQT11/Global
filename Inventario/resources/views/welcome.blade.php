<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<style>
    body {
        background: linear-gradient(90deg, #33d540 0%, #ffffff 100%);
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    nav {
        background: linear-gradient(90deg, #33d540 0%, #33d540 100%);
        display: flex;
        justify-content: flex-end;
        align-items: center;
        padding: 10px;
        border-radius: 10px;
        box-shadow: 0 4px 20px rgba(4, 0, 0, 0.1);
        margin-right: 20px;
    }

    a {
        color: rgb(0, 0, 0);
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 5px;
        margin: 0 10px;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .login-btn,
    .register-btn {
        font-size: 1.2em; /* Tamaño de la tipografía */
        font-weight: bold; /* Peso de la tipografía */
        text-transform: uppercase; /* Transformación a mayúsculas */
        letter-spacing: 2px; /* Espaciado entre letras */
        color: #fff; /* Color del texto */
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Sombra del texto */
        padding: 10px 20px; /* Relleno del botón */
        border-radius: 5px; /* Bordes redondeados */
        background-color: #33d540; /* Color de fondo */
        border-style: solid; /* Estilo de borde */
        border-color: rgb(0, 0, 0); /* Color del borde */
    }

    .login-btn:hover,
    .register-btn:hover {
        background-color: #ffffff; /* Color de fondo al pasar el mouse */
        color: #000; /* Color del texto al pasar el mouse */
    }

    .center-content {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100%;
        text-align: center;
        margin-top: 50px; /* Margen superior para separar del nav */
    }

    .center-content a {
        font-size: 3em; /* Tamaño del texto "Globla ASTI" */
        font-weight: bold; /* Peso de la tipografía */
        text-transform: uppercase; /* Transformación a mayúsculas */
        letter-spacing: 3px; /* Espaciado entre letras */
        color: #fff; /* Color del texto */
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Sombra del texto */
        padding: 20px; /* Relleno del texto */
        border-radius: 10px; /* Bordes redondeados */
        background-color: #33d540; /* Color de fondo */
    }
</style>

<body>

    <div>
        <header class="grid grid-cols-2 lg:grid-cols-3 items-top gap-2 py-10">
            <!-- Añade aquí cualquier contenido adicional en las columnas izquierda y central -->
            @if (Route::has('login'))
                <nav class="nav">
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="rounded-md px-3 py-2 text-red-600 ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}"
                            class="login-btn rounded-md px-3 py-2 ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                            Iniciar sesión
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="register-btn rounded-md px-3 py-2 ring-1 ring-transparent transition hover:text-white/70 focus:outline-none focus-visible:ring-[#FF2D20]">
                                Registrarse
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>

        <div class="center-content">
            <a>
                Global ASTI
            </a>
        </div>
    </div>
</body>

</html>
