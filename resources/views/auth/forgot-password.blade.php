<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            
        @endif
    </head>
    <body class="bg-gray-10 ">
        <div class="min-h-screen flex items-center justify-center bg-gray-100">
            <div class="max-w-md w-full p-6 rounded-lg shadow-lg bg-white">
                <h1 class="text-2xl font-semibold text-center text-gray-600 mt-8 mb-6">Recuperación de contraseña</h1> 
                <p class="text-sm text-gray-600 text-center mt-8 mb-6">Introduce tu correo electrónico para restablecer tu contraseña</p> 
                <form>
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm text-gray-600">Correo electrónico</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" required>
                    </div>
                    <button type="submit" class="w-32 bg-gradient-to-r text-white py-2 rounded-lg mx-auto block bg-blue-500 hover:bg-blue-600 focus:bg-blue-700 mt-4 mb-4">Enviar</button>
                </form>
                <div class="text-center">
                    <p class="text-sm">Volver a <a href="{{ route('login.form') }}" class="text-cyan-600">Iniciar sesión</a></p>
                </div>
            </div>
        </div>
    </body>
</html>
