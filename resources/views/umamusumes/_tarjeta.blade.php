<div class="tarjeta bg-zinc-900 text-white p-6 rounded-2xl shadow-2xl border border-zinc-700 mb-4 transform hover:scale-105 transition-all duration-300 ease-in-out"
     data-id="{{ $umamusume->id }}"
     id="tarjeta-{{ $umamusume->id }}">
     
    <h3 class="text-2xl font-extrabold text-indigo-400 mb-2">{{ $umamusume->nombre }}</h3>
    
    <div class="space-y-1 text-gray-300 text-sm mb-4">
        <p class="font-medium">Velocidad: <span class="font-normal">{{ $umamusume->velocidad }}</span></p>
        <p class="font-medium">Stamina: <span class="font-normal">{{ $umamusume->stamina }}</span></p>
    </div>
    
    @if($umamusume->imagen)
        <img src="{{ asset('storage/' . $umamusume->imagen) }}" alt="{{ $umamusume->nombre }}" class="mt-2 rounded-xl shadow-md object-cover h-[25rem] w-full">
    @endif

    <div class="mt-6 flex flex-col sm:flex-row gap-4">
        <button
            class="btn-editar flex-1 bg-indigo-500 hover:bg-indigo-600 text-white font-semibold px-4 py-2 rounded-full transition-colors duration-200"
            data-id="{{ $umamusume->id }}"
            data-nombre="{{ $umamusume->nombre }}"
            data-velocidad="{{ $umamusume->velocidad }}"
            data-stamina="{{ $umamusume->stamina }}"
        >
            Editar
        </button>
        <button
            class="btn-eliminar flex-1 bg-red-500 hover:bg-red-600 text-white font-semibold px-4 py-2 rounded-full transition-colors duration-200"
            data-id="{{ $umamusume->id }}"
        >
            Eliminar
        </button>
    </div>
</div>