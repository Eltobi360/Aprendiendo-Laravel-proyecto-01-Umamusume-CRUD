<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Umamusume</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-br from-zinc-900 to-gray-800 text-white min-h-screen flex items-center justify-center p-4">

    <div class="bg-zinc-800 rounded-2xl shadow-2xl p-8 w-full max-w-lg mx-auto border border-zinc-700">
        <h1 class="text-4xl font-extrabold text-center mb-8 text-indigo-400">Editar Umamusume</h1>

        <form action="{{ route('umamusumes.update', $umamusume) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')

            <!-- Campo Nombre -->
            <div>
                <label for="nombre" class="block text-sm font-medium text-gray-300 mb-1">Nombre</label>
                <input type="text" name="nombre" id="nombre"
                       value="{{ old('nombre', $umamusume->nombre) }}"
                       class="w-full px-4 py-2 rounded-lg bg-zinc-700 text-white border border-zinc-600 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-200 placeholder-gray-400"
                       placeholder="Ingresa el nombre de la Umamusume" required>
                <!-- Opcional: Mostrar errores de validación si existen -->
                @error('nombre')
                    <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Campo Velocidad -->
            <div>
                <label for="velocidad" class="block text-sm font-medium text-gray-300 mb-1">Velocidad</label>
                <input type="number" name="velocidad" id="velocidad"
                       value="{{ old('velocidad', $umamusume->velocidad) }}"
                       class="w-full px-4 py-2 rounded-lg bg-zinc-700 text-white border border-zinc-600 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-200 placeholder-gray-400"
                       placeholder="Ingresa la velocidad" min="0" required>
                @error('velocidad')
                    <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Campo Stamina -->
            <div>
                <label for="stamina" class="block text-sm font-medium text-gray-300 mb-1">Stamina</label>
                <input type="number" name="stamina" id="stamina"
                       value="{{ old('stamina', $umamusume->stamina) }}"
                       class="w-full px-4 py-2 rounded-lg bg-zinc-700 text-white border border-zinc-600 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-200 placeholder-gray-400"
                       placeholder="Ingresa la stamina" min="0" required>
                @error('stamina')
                    <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Campo Nueva Imagen (opcional) -->
            <div>
                <label for="imagen" class="block text-sm font-medium text-gray-300 mb-1">Nueva Imagen (opcional)</label>
                <input type="file" name="imagen" id="imagen"
                       class="w-full text-white text-sm file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-indigo-500 file:text-white hover:file:bg-indigo-600 transition-all duration-200 cursor-pointer"
                       accept="image/*">
                @error('imagen')
                    <p class="text-red-400 text-xs mt-1">{{ $message }}</p>
                @enderror

                @if ($umamusume->imagen)
                    <div class="mt-4">
                        <p class="text-sm text-gray-400 mb-2">Imagen actual:</p>
                        <img src="{{ asset('storage/' . $umamusume->imagen) }}"
                             alt="Imagen actual de {{ $umamusume->nombre }}"
                             class="w-40 h-40 object-cover rounded-lg shadow-md border border-zinc-600">
                    </div>
                @else
                    <p class="text-sm text-gray-400 mt-2">No hay imagen actual.</p>
                @endif
            </div>

            <!-- Botones de Acción -->
            <div class="flex flex-col sm:flex-row gap-4 pt-4">
                <button type="submit"
                        class="flex-1 bg-yellow-500 text-white font-semibold px-6 py-3 rounded-full shadow-lg hover:bg-yellow-600 transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2 focus:ring-offset-zinc-800">
                    Actualizar
                </button>
                <a href="{{ route('umamusumes.index') }}"
                   class="flex-1 text-center bg-gray-600 text-white font-semibold px-6 py-3 rounded-full shadow-lg hover:bg-gray-700 transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 focus:ring-offset-zinc-800">
                    Cancelar
                </a>
            </div>
        </form>
    </div>

</body>
</html>
