<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <div class="bg-green-50 dark:bg-green-900 border border-green-300 
                        dark:border-green-700 text-green-800 dark:text-green-200 
                        rounded-xl p-6 shadow">
                <h3 class="text-lg font-bold mb-1">
                    ¡Bienvenido de nuevo, {{ Auth::user()->name }}!
                </h3>
                <p>Acceso concedido al panel de control privado.</p>
            </div>

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-xl">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300 mb-4">
                        Tu información
                    </h3>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 bg-gray-50 dark:bg-gray-700 
                                    rounded-lg p-3">
                            <span class="text-gray-500 dark:text-gray-400 w-32">
                                Nombre:
                            </span>
                            <span class="font-medium text-gray-800 dark:text-gray-200">
                                {{ Auth::user()->name }}
                            </span>
                        </div>
                        <div class="flex items-center gap-3 bg-gray-50 dark:bg-gray-700 
                                    rounded-lg p-3">
                            <span class="text-gray-500 dark:text-gray-400 w-32">
                                Email:
                            </span>
                            <span class="font-medium text-gray-800 dark:text-gray-200">
                                {{ Auth::user()->email }}
                            </span>
                        </div>
                        <div class="flex items-center gap-3 bg-gray-50 dark:bg-gray-700 
                                    rounded-lg p-3">
                            <span class="text-gray-500 dark:text-gray-400 w-32">
                                Miembro desde:
                            </span>
                            <span class="font-medium text-gray-800 dark:text-gray-200">
                                {{ Auth::user()->created_at->format('d/m/Y') }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-xl">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300 mb-2">
                        Área Privada
                    </h3>
                    <p class="text-gray-500 dark:text-gray-400">
                        Solo los usuarios autenticados pueden acceder a esta vista. 
                        Los visitantes son redirigidos al login automáticamente.
                    </p>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>