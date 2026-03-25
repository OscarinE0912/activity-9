<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity-9 | Bienvenido</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-900 min-h-screen flex flex-col">

    <nav class="bg-gray-800 shadow px-8 py-4 flex justify-between items-center">
        <span class="text-2xl font-bold text-indigo-400">Activity-9</span>
        <div class="flex gap-4">
            <a href="{{ route('login') }}"
               class="text-indigo-400 border border-indigo-400 px-4 py-2 
                      rounded-lg hover:bg-indigo-900 transition">
                Iniciar Sesión
            </a>
            <a href="{{ route('register') }}"
               class="bg-indigo-600 text-white px-4 py-2 rounded-lg 
                      hover:bg-indigo-700 transition">
                Registrarse
            </a>
        </div>
    </nav>

    <main class="flex-1 flex items-center justify-center text-center px-4">
        <div>
            <h1 class="text-6xl font-bold text-white mb-6">
                Bienvenido a Activity-9
            </h1>
            <p class="text-xl text-gray-400 mb-10 max-w-xl mx-auto">
                Esta es la página pública. Solo los usuarios registrados 
                pueden acceder al panel de control.
            </p>
            <div class="flex justify-center gap-6">
                <a href="{{ route('login') }}"
                   class="bg-indigo-600 text-white px-8 py-4 rounded-xl 
                          text-lg font-semibold hover:bg-indigo-700 transition">
                    Iniciar Sesión
                </a>
                <a href="{{ route('register') }}"
                   class="border border-gray-500 text-gray-300 px-8 py-4 
                          rounded-xl text-lg font-semibold hover:bg-gray-800 transition">
                    Crear Cuenta
                </a>
            </div>
        </div>
    </main>

    <footer class="text-center text-gray-600 py-4">
        Activity-9 © {{ date('Y') }} — Laravel 12
    </footer>

</body>
</html>