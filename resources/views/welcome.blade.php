<!DOCTYPE html>
<html lang="en">
<head>
    @vite('resources/css/app.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="bg-zinc-900">  

    <!-- Navegación adaptada al tema de Umamusume -->
    <nav class="bg-zinc-600 shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex-shrink-0 flex items-center">
                    <h1 class="text-xl font-bold text-teal-500">Tracen Academy</h1>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="#" class="text-gray-600 hover:text-teal-500 transition-colors duration-200">Inicio</a>
                    <a href="#" class="text-gray-600 hover:text-teal-500 transition-colors duration-200">Umamusume</a>
                    <a href="#" class="text-gray-600 hover:text-teal-500 transition-colors duration-200">Entrenamiento</a>
                    <a href="#" class="text-gray-600 hover:text-teal-500 transition-colors duration-200">Comunidad</a>
                </div>
                <div class="hidden md:flex">
                    <a href="#" class="px-4 py-2 border border-teal-500 text-teal-500 rounded-lg font-medium hover:bg-teal-50 transition-colors duration-200">Iniciar Sesión</a>
                    <a href="#" class="ml-4 px-4 py-2 bg-teal-500 text-white rounded-lg font-medium hover:bg-teal-600 transition-colors duration-200">Registrarse</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Sección principal (Hero) adaptada -->
    <header class="bg-zinc-800 py-16 sm:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-gray-900 leading-tight">
                Entrena a tu <span class="bg-clip-text text-transparent bg-gradient-to-r from-teal-400 to-pink-500">Uma Musume</span> y alcanza la gloria.
            </h2>
            <p class="mt-6 text-lg sm:text-xl text-gray-500 max-w-3xl mx-auto">
                Guía a tu chica caballo hacia la victoria en la prestigiosa serie "Twinkle". ¡Juntos, hagan realidad sus sueños!
            </p>
            <div class="mt-10 flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <a href="#" class="w-full sm:w-auto px-8 py-3 border border-transparent text-base font-medium rounded-lg text-white bg-teal-500 hover:bg-teal-600 md:py-4 md:text-lg md:px-10 transition-colors duration-200">Empezar a entrenar</a>
                <a href="{{ route('umamusumes.index') }}" class="w-full sm:w-auto px-8 py-3 border border-gray-300 text-base font-medium rounded-lg text-teal-500 bg-white hover:bg-gray-100 md:py-4 md:text-lg md:px-10 transition-colors duration-200">Ver las Umamusume</a>
            </div>
        </div>
    </header>

    <!-- Sección de Características adaptada -->
    <section class="py-16 sm:py-24 bg-zinc-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h3 class="text-base text-teal-500 font-semibold tracking-wide uppercase">Un viaje hacia la victoria</h3>
                <p class="mt-2 text-3xl font-extrabold text-gray-900 sm:text-4xl">
                    Características principales de la Academia Tracen
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    Sumérgete en la simulación de entrenamiento más completa y estratégica.
                </p>
            </div>

            <div class="mt-10">
                <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                    <!-- Característica 1 - Entrenamiento -->
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <!-- Icono SVG de un gráfico de barras -->
                            <svg class="h-6 w-6 text-pink-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <dt class="text-lg leading-6 font-medium text-gray-900">
                                Entrenamiento Estratégico
                            </dt>
                            <dd class="mt-2 text-base text-gray-500">
                                Mejora estadísticas como Velocidad, Resistencia y Poder para dominar cada carrera.
                            </dd>
                        </div>
                    </div>
                    <!-- Característica 2 - Vínculo con las Umamusume -->
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <!-- Icono SVG de un corazón -->
                            <svg class="h-6 w-6 text-pink-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <dt class="text-lg leading-6 font-medium text-gray-900">
                                Forja un vínculo
                            </dt>
                            <dd class="mt-2 text-base text-gray-500">
                                Conoce las historias de tus Umamusume, interactúa con ellas y ayuda a resolver sus problemas.
                            </dd>
                        </div>
                    </div>
                    <!-- Característica 3 - Carreras espectaculares -->
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <!-- Icono SVG de un trofeo -->
                            <svg class="h-6 w-6 text-pink-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l2-2m-2 2L6 19h12L13 6l2-2m-2 2v10m-2 0h-4M9 14h6" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <dt class="text-lg leading-6 font-medium text-gray-900">
                                Carreras Espectaculares
                            </dt>
                            <dd class="mt-2 text-base text-gray-500">
                                Disfruta de emocionantes carreras en 3D con comentarios en vivo y animaciones impresionantes.
                            </dd>
                        </div>
                    </div>
                    <!-- Característica 4 - Conciertos en vivo -->
                    <div class="flex items-start">
                        <div class="flex-shrink-0">
                            <!-- Icono SVG de una estrella -->
                            <svg class="h-6 w-6 text-pink-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.974 2.887a1 1 0 00-.364 1.118l1.519 4.674c.3.921-.755 1.688-1.54 1.118l-3.974-2.887a1 1 0 00-1.176 0l-3.974 2.887c-.785.57-1.84-.197-1.54-1.118l1.519-4.674a1 1 0 00-.364-1.118L2.983 9.401c-.783-.57-.38-1.81.588-1.81h4.915a1 1 0 00.95-.69l1.519-4.674z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <dt class="text-lg leading-6 font-medium text-gray-900">
                                ¡Live Winners!
                            </dt>
                            <dd class="mt-2 text-base text-gray-500">
                                Después de la victoria, celebra con un deslumbrante concierto en 3D con tu Umamusume.
                            </dd>
                        </div>
                    </div>
                </dl>
            </div>
        </div>
    </section>

    <!-- Nueva sección de tarjetas de Umamusume -->
    <section class="py-16 sm:py-24 bg-zinc-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h3 class="text-base text-teal-500 font-semibold tracking-wide uppercase">Conoce a las estrellas</h3>
                <p class="mt-2 text-3xl font-extrabold text-gray-900 sm:text-4xl">
                    Nuestras Umamusume más prometedoras
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    Cada una con su propia personalidad, habilidades y sueños. ¿A quién elegirás para entrenar?
                </p>
            </div>

            <!-- Contenedor de la cuadrícula de tarjetas -->
            <div class="mt-10 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Tarjeta de ejemplo 1 -->
                <div class="bg-gray-100 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <img class="w-full h-48 object-cover" src="https://placehold.co/400x300/e0f2f1/0f766e?text=Special+Week" alt="Special Week">
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-gray-900">Special Week</h3>
                    </div>
                </div>

                <!-- Tarjeta de ejemplo 2 -->
                <div class="bg-gray-100 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <img class="w-full h-48 object-cover" src="https://placehold.co/400x300/e0f2f1/0f766e?text=Silence+Suzuka" alt="Silence Suzuka">
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-gray-900">Silence Suzuka</h3>
                    </div>
                </div>

                <!-- Tarjeta de ejemplo 3 -->
                <div class="bg-gray-100 rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <img class="w-full h-48 object-cover" src="https://placehold.co/400x300/e0f2f1/0f766e?text=Tokai+Teio" alt="Tokai Teio">
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-gray-900">Tokai Teio</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Llamada a la acción (CTA) adaptada -->
    <section class="bg-teal-500">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <h2 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
                <span class="block">¿Lista tu Umamusume para correr?</span>
                <span class="block text-teal-100">
                    Únete a la academia y empieza tu viaje.
                </span>
            </h2>
            <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
                <div class="inline-flex rounded-lg shadow">
                    <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-lg text-teal-600 bg-white hover:bg-teal-50">
                        Inscríbete ahora
                    </a>
                </div>
                <div class="ml-3 inline-flex rounded-lg shadow">
                    <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-lg text-white bg-teal-400 hover:bg-teal-300">
                        Aprende las reglas
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer adaptado -->
    <footer class="bg-zinc-800 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-gray-400">
            <p>&copy; 2025 Tracen Academy. Todos los derechos reservados.</p>
        </div>
    </footer>

</body>
</html>