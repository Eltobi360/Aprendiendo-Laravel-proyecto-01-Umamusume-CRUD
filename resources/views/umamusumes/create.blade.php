<!DOCTYPE html>
<html lang="en">
<head>
    @vite(['resources/css/app.css', 'resources/js/modales/index.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="bg-gradient-to-br from-zinc-900 to-gray-800 text-white min-h-screen flex items-center justify-center p-4">
    <div class="bg-zinc-800 rounded-2xl shadow-2xl p-8 w-full max-w-lg mx-auto border border-zinc-700">
        <h1 class="text-4xl font-extrabold text-center mb-8 text-indigo-400">Agregar Umamusume</h1>

        <form action="{{ route('umamusumes.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-medium text-gray-300 mb-1">Nombre</label>
                <input type="text" name="nombre" class="w-full px-4 py-2 rounded-lg bg-zinc-700 text-white border border-zinc-600 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-200 placeholder-gray-400">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-300 mb-1">Velocidad</label>
                <input type="number" name="velocidad" class="w-full px-4 py-2 rounded-lg bg-zinc-700 text-white border border-zinc-600 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-200 placeholder-gray-400">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-300 mb-1">Stamina</label>
                <input type="number" name="stamina" class="w-full px-4 py-2 rounded-lg bg-zinc-700 text-white border border-zinc-600 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-200 placeholder-gray-400">
            </div>
            <div>
                <label>Imagen</label>
                <input type="file" name="imagen" accept=".jpg,.jpeg,.png,.webp"  onchange="validarImagen(this)"   class="w-full p-2 border rounded">
                @if ($errors->has('imagen'))
                 <p class="text-red-500 text-sm mt-1">{{ $errors->first('imagen') }}</p>
                @endif
            </div>
            <button class="bg-green-500 text-white px-4 py-2 rounded">Guardar</button>
        </form>
    </div>


    <script>
    function validarImagen(input) {
        const file = input.files[0];
        if (!file) return;

        const extensionesPermitidas = ['jpg', 'jpeg', 'png', 'webp'];
        const extension = file.name.split('.').pop().toLowerCase();
         const maxSizeMB = 5;
        
        if (!extensionesPermitidas.includes(extension)) {
            alert('Formato no permitido. Solo se aceptan: JPG, JPEG, PNG, WEBP');
            input.value = ''; // Limpia el campo para evitar el envío
        }

        if (file.size > maxSizeMB * 1024 * 1024) {
            alert(`La imagen supera el límite de ${maxSizeMB} MB`);
            input.value = '';
            return;
        }
    }
</script>

</body>
</html>
    