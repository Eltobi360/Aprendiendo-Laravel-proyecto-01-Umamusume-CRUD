<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de Umamusumes</title>
    <!-- Incluimos la fuente Inter para un diseño más moderno y legible -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Vincula los archivos de CSS y JS compilados por Vite -->
    @vite(['resources/css/app.css', 'resources/js/umamusume.js'])
    <style>

        #animation-animatable-properties-svg-attributes .docs-demo-template {
  display: none;
}

#animation-animatable-properties-svg-attributes .demo polygon {
  filter: url(#displacementFilter)
}
        body {
            font-family: 'Inter', sans-serif;
            /* Aplicamos una transición para que el modal aparezca de forma más suave */
            transition: background-color 0.3s ease-in-out;
        }
        /* Estiliza el botón del input de tipo file de forma consistente */
        input[type="file"]::file-selector-button {
            @apply px-4 py-2 rounded-lg border-0 text-sm font-semibold bg-indigo-500 text-white hover:bg-indigo-600 transition-colors duration-200 cursor-pointer;
        }
    </style>
</head>
<header>
   
</header>
<body class="bg-gradient-to-b from-purple-900 via-indigo-900 to-black min-h-screen text-white antialiased h-screen">
    
    <main class="container mx-auto p-6">
        <header class="flex flex-col sm:flex-row justify-between items-center mb-8">
            <h1 class="text-4xl font-extrabold text-white tracking-tight mb-4 sm:mb-0">Umamusumes</h1>
            <button id="abrirModal" class="inline-flex items-center bg-indigo-500 hover:bg-indigo-600 text-white font-semibold px-6 py-3 rounded-full shadow-lg transition-all duration-300 transform hover:scale-105">
                <svg class="h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
                Crear
            </button>
        </header>

        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8" id="contenedor-tarjetas">
        
            
           
                @foreach ($umamusumes as $uma)
                    @include('umamusumes._tarjeta', ['umamusume' => $uma])

                <!-- <article class="bg-zinc-800 rounded-2xl shadow-2xl overflow-hidden transform hover:scale-105 transition duration-300">
                    @if ($uma->imagen)
                        <div class="h-64 overflow-hidden relative">
                            <img src="{{ asset('storage/' . $uma->imagen) }}"
                                alt="Imagen de {{ $uma->nombre }}"
                                class="w-full h-full object-cover">
                        </div>
                    @endif

                    <div class="p-6">
                        <h2 class="text-2xl font-bold text-indigo-400">{{ $uma->nombre }}</h2>
                        <div class="mt-4 text-gray-300 space-y-2">
                            <p class="text-sm"><strong>Velocidad:</strong> {{ $uma->velocidad }}</p>
                            <p class="text-sm"><strong>Stamina:</strong> {{ $uma->stamina }}</p>
                        </div>

                        <div class="mt-6 flex flex-wrap gap-4">
                            <button
                                class="btn-editar flex-1 bg-yellow-500 text-white font-medium px-4 py-2 rounded-full hover:bg-yellow-600 transition-colors duration-200"
                                data-id="{{ $uma->id }}"
                                data-nombre="{{ $uma->nombre }}"
                                data-velocidad="{{ $uma->velocidad }}"
                                data-stamina="{{ $uma->stamina }}"
                                data-imagen="{{ $uma->imagen }}"
                            >
                                Editar
                            </button>
                            <button
                                type="button" 
                                class="btn-eliminar flex-1 bg-red-500 text-white font-medium px-4 py-2 rounded-full hover:bg-red-600 transition-colors duration-200"
                                data-id="{{ $uma->id }}"
                            >
                                Eliminar
                            </button>
                        </div>
                    </div>
                </article> -->
                @endforeach
       
        </section>
    </main>
    
    <!-- ========================= MODALES ========================= -->

    <!-- Modal para CREAR Umamusume -->
    <div id="modalCrear" class="fixed inset-0 bg-black bg-opacity-70 flex items-center justify-center z-50 hidden">
        <div class="bg-zinc-800 p-8 rounded-3xl shadow-2xl w-full max-w-lg relative border border-zinc-700">
            <button id="cerrarModal" class="absolute top-4 right-4 text-gray-400 hover:text-white transition-colors duration-200">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
            </button>
            <h2 class="text-3xl font-extrabold text-indigo-400 mb-6 text-center">Agregar Umamusume</h2>
            <form id="form-crear" action="{{ route('umamusumes.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
                @csrf
                <div>
                    <label for="crearNombre" class="block text-sm font-medium text-gray-300 mb-1">Nombre</label>
                    <input type="text" name="nombre" id="crearNombre" required class="w-full px-4 py-2 rounded-lg bg-zinc-700 text-white border border-zinc-600 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-200 placeholder-gray-400" placeholder="Ingresa el nombre">
                </div>
                <div>
                    <label for="crearVelocidad" class="block text-sm font-medium text-gray-300 mb-1">Velocidad</label>
                    <input type="number" name="velocidad" id="crearVelocidad" required class="w-full px-4 py-2 rounded-lg bg-zinc-700 text-white border border-zinc-600 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-200 placeholder-gray-400" placeholder="Ingresa la velocidad" min="0">
                </div>
                <div>
                    <label for="crearStamina" class="block text-sm font-medium text-gray-300 mb-1">Stamina</label>
                    <input type="number" name="stamina" id="crearStamina" required class="w-full px-4 py-2 rounded-lg bg-zinc-700 text-white border border-zinc-600 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-200 placeholder-gray-400" placeholder="Ingresa la stamina" min="0">
                </div>
                <div>
                    <label for="crearImagen" class="block text-sm font-medium text-gray-300 mb-1">Imagen</label>
                    <input type="file" name="imagen" id="crearImagen" accept=".jpg,.jpeg,.png,.webp" required class="w-full text-white text-sm">
                </div>
                <button type="submit" class="w-full bg-green-500 text-white font-semibold px-6 py-3 rounded-full shadow-lg hover:bg-green-600 transition-all duration-300 transform hover:scale-105">
                    Guardar
                </button>
            </form>
        </div>
    </div>

    <!-- Modal para EDITAR Umamusume -->
    <div id="modalEditar" class="fixed inset-0 bg-black bg-opacity-70 flex items-center justify-center z-50 hidden">
        <div class="bg-zinc-800 p-8 rounded-3xl shadow-2xl w-full max-w-lg relative border border-zinc-700">
            <button id="cerrarModalEditar" class="absolute top-4 right-4 text-gray-400 hover:text-white transition-colors duration-200">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
            </button>
            <h2 class="text-3xl font-extrabold text-yellow-400 mb-6 text-center">Editar Umamusume</h2>
            <form id="formEditar" method="POST" enctype="multipart/form-data" class="space-y-5">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" id="editarId">
                <div>
                    <label for="editarNombre" class="block text-sm font-medium text-gray-300 mb-1">Nombre</label>
                    <input type="text" name="nombre" id="editarNombre" required class="w-full px-4 py-2 rounded-lg bg-zinc-700 text-white border border-zinc-600 focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 transition-all duration-200 placeholder-gray-400" placeholder="Ingresa el nombre">
                </div>
                <div>
                    <label for="editarVelocidad" class="block text-sm font-medium text-gray-300 mb-1">Velocidad</label>
                    <input type="number" name="velocidad" id="editarVelocidad" required class="w-full px-4 py-2 rounded-lg bg-zinc-700 text-white border border-zinc-600 focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 transition-all duration-200 placeholder-gray-400" placeholder="Ingresa la velocidad" min="0">
                </div>
                <div>
                    <label for="editarStamina" class="block text-sm font-medium text-gray-300 mb-1">Stamina</label>
                    <input type="number" name="stamina" id="editarStamina" required class="w-full px-4 py-2 rounded-lg bg-zinc-700 text-white border border-zinc-600 focus:ring-2 focus:ring-yellow-500 focus:border-yellow-500 transition-all duration-200 placeholder-gray-400" placeholder="Ingresa la stamina" min="0">
                </div>
                <div>
                    <label for="editarImagen" class="block text-sm font-medium text-gray-300 mb-1">Nueva Imagen (opcional)</label>
                    <input type="file" name="imagen" id="editarImagen" accept=".jpg,.jpeg,.png,.webp" class="w-full text-white text-sm">
                    <img id="imagenActual" src="" alt="Imagen actual" class="mt-4 w-40 h-40 object-cover rounded-lg shadow-md border border-zinc-600 hidden">
                </div>
                <div class="flex flex-wrap gap-4 pt-4">
                    <button type="submit" class="flex-1 bg-yellow-500 text-white font-semibold px-6 py-3 rounded-full shadow-lg hover:bg-yellow-600 transition-all duration-300">
                        Actualizar
                    </button>
                    <button type="button" id="cerrarModalEditar" class="flex-1 bg-gray-600 text-white font-semibold px-6 py-3 rounded-full shadow-lg hover:bg-gray-700 transition-all duration-300">
                        Cancelar
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal para ELIMINAR Umamusume -->
    <div id="modalEliminar" class="fixed inset-0 bg-black bg-opacity-70 flex items-center justify-center z-50 hidden">
        <div class="bg-zinc-800 p-8 rounded-3xl shadow-2xl w-full max-w-md relative border border-zinc-700">
            <button id="cerrarModalEliminar" class="absolute top-4 right-4 text-gray-400 hover:text-white transition-colors duration-200">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
            </button>
            <h2 class="text-2xl font-extrabold text-red-400 mb-4 text-center">¿Estás seguro de que quieres eliminar?</h2>
            <p class="text-gray-300 text-center mb-6">Esta acción no se puede deshacer.</p>
            <form id="formEliminar" method="POST">
                @csrf
                @method('DELETE')
                <input type="hidden" name="id" id="idEliminar">
                <div class="flex justify-end gap-4 mt-4">
                    <button type="button" id="cancelarEliminar" class="flex-1 bg-gray-600 text-white font-semibold px-6 py-3 rounded-full shadow-lg hover:bg-gray-700 transition-all duration-300">
                        Cancelar
                    </button>
                    <button type="submit" id="confirmarEliminar" class="flex-1 bg-red-500 text-white font-semibold px-6 py-3 rounded-full shadow-lg hover:bg-red-600 transition-all duration-300">
                        Eliminar
                    </button>
                </div>
            </form>
        </div>
    </div>

    <footer class="bg-gray-800 text-white p-6 md:p-8 rounded-t-xl shadow-lg mt-12">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            
            <!-- Contenedor del SVG, alineado a la izquierda -->
            <div class="flex justify-center md:justify-start">
                <svg width="50" height="50" viewBox="0 0 128 128" class="text-indigo-400 hover:text-indigo-500 transition-colors duration-300">
                    <filter id="displacementFilter">
                        <feTurbulence type="turbulence" numOctaves="2" baseFrequency="0" result="turbulence"/>
                        <feDisplacementMap in2="turbulence" in="SourceGraphic" scale="1" xChannelSelector="R" yChannelSelector="G"/>
                    </filter>
                    <polygon points="64 128 8.574 96 8.574 32 64 0 119.426 32 119.426 96" fill="currentColor"/>
                </svg>
            </div>

            <!-- Contenido del footer a la derecha -->
            <div class="flex flex-col md:flex-row md:items-center text-center md:text-left space-y-4 md:space-y-0 md:space-x-8">
                <p class="text-sm text-gray-400">© 2024 Mi Empresa. Todos los derechos reservados.</p>
                <nav class="space-x-4">
                    <a href="#" class="text-sm text-gray-400 hover:text-white transition-colors duration-300">Términos de servicio</a>
                    <a href="#" class="text-sm text-gray-400 hover:text-white transition-colors duration-300">Política de privacidad</a>
                    <a href="#" class="text-sm text-gray-400 hover:text-white transition-colors duration-300">Contacto</a>
                </nav>
            </div>
            
        </div>
    </footer>
</body>
</html>