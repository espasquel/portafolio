<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Portafolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

<nav class="bg-blue-700 text-white shadow-lg">
    <div class="max-w-5xl mx-auto px-6 py-4 flex justify-between items-center">
        <span class="text-2xl font-bold tracking-tight">Mi Portafolio</span>
        <div class="space-x-6 text-sm font-medium">
            <a href="index.php" class="hover:text-blue-200 transition-colors">Inicio</a>
            <a href="contacto.php" class="hover:text-blue-200 transition-colors">Contacto</a>
        </div>
    </div>
</nav>

<header class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-20 text-center">
    <div class="max-w-3xl mx-auto px-4">
        <img
            src="imagen.jpg"
            alt="Foto de perfil"
            class="rounded-full mx-auto mb-5 border-4 border-white shadow-xl w-36 h-36 object-cover"
        >
        <h1 class="text-5xl font-extrabold mb-2">Erick Steven Pasquel Vásquez</h1>
        <p class="text-blue-200 text-xl">Estudiante de Ingeniería en Tecnologías de la Información</p>
    </div>
</header>

<main class="max-w-5xl mx-auto px-6 py-14">

    <section class="mb-14">
        <h2 class="text-2xl font-bold text-gray-800 mb-4 border-l-4 border-blue-600 pl-3">BIOGRAFÍA PERSONAL</h2>
        <p class="text-gray-600 leading-relaxed text-lg mb-4">
            Mi nombre es Erick Steven Pasquel Vásquez. Nací en Atuntaqui, provincia de Imbabura, el 9 de junio de 2001.
            Realicé mis estudios primarios en la Unidad Educativa 24 de Mayo y posteriormente cursé el bachillerato en el
            Colegio Abelardo Moncayo, institución donde nació mi interés por el ámbito de la tecnología y la informática.
        </p>
        <p class="text-gray-600 leading-relaxed text-lg mb-4">
            Gracias a mi dedicación y esfuerzo, logré ingresar a la Universidad Técnica Particular de Loja, donde
            actualmente curso el quinto ciclo de la carrera de Ingeniería en Tecnologías de la Información.
            Paralelamente a mis estudios universitarios, trabajo en el área técnica de una empresa dedicada a la
            tecnología automotriz y computacional, desempeñando labores relacionadas con instalaciones eléctricas,
            reparaciones y programación de sistemas electrónicos. Mi objetivo a futuro es adquirir la experiencia
            y los conocimientos necesarios para fundar mi propia empresa.
        </p>
        <p class="text-gray-600 leading-relaxed text-lg">
            Me considero una persona creativa, responsable y resolutiva. Disfruto enfrentar desafíos y buscar
            soluciones a los problemas, ya que considero que cada experiencia representa una oportunidad de
            aprendizaje y crecimiento personal.
        </p>
    </section>

    <section class="mb-14">
        <h2 class="text-2xl font-bold text-gray-800 mb-6 border-l-4 border-blue-600 pl-3">Hobbies</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white rounded-xl p-6 shadow text-center hover:shadow-md transition-shadow">
                <div class="text-5xl mb-3">🏀</div>
                <h3 class="font-semibold text-gray-800 text-lg">Básquetbol</h3>
                <p class="text-gray-500 text-sm mt-2">Practico básquetbol en mi tiempo libre</p>
            </div>
            <div class="bg-white rounded-xl p-6 shadow text-center hover:shadow-md transition-shadow">
                <div class="text-5xl mb-3">🥾</div>
                <h3 class="font-semibold text-gray-800 text-lg">Senderismo</h3>
                <p class="text-gray-500 text-sm mt-2">Disfruto recorrer senderos y rutas naturales</p>
            </div>
            <div class="bg-white rounded-xl p-6 shadow text-center hover:shadow-md transition-shadow">
                <div class="text-5xl mb-3">🚙</div>
                <h3 class="font-semibold text-gray-800 text-lg">Rutas 4x4</h3>
                <p class="text-gray-500 text-sm mt-2">Participo en rutas 4x4 por terrenos desafiantes</p>
            </div>
            <div class="bg-white rounded-xl p-6 shadow text-center hover:shadow-md transition-shadow">
                <div class="text-5xl mb-3">🔧</div>
                <h3 class="font-semibold text-gray-800 text-lg">Modificación electrónica</h3>
                <p class="text-gray-500 text-sm mt-2">Modifico periféricos y piezas electrónicas</p>
            </div>
            <div class="bg-white rounded-xl p-6 shadow text-center hover:shadow-md transition-shadow">
                <div class="text-5xl mb-3">⚙️</div>
                <h3 class="font-semibold text-gray-800 text-lg">Automatización</h3>
                <p class="text-gray-500 text-sm mt-2">Me apasiona la automatización de procesos tecnológicos</p>
            </div>
        </div>
    </section>

    <section>
        <h2 class="text-2xl font-bold text-gray-800 mb-5 border-l-4 border-blue-600 pl-3">Habilidades</h2>
        <div class="flex flex-wrap gap-3">
            <span class="bg-blue-100 text-blue-700 px-4 py-2 rounded-full text-sm font-semibold">HTML5</span>
            <span class="bg-blue-100 text-blue-700 px-4 py-2 rounded-full text-sm font-semibold">CSS3</span>
            <span class="bg-blue-100 text-blue-700 px-4 py-2 rounded-full text-sm font-semibold">PHP</span>
            <span class="bg-blue-100 text-blue-700 px-4 py-2 rounded-full text-sm font-semibold">MySQL</span>
            <span class="bg-blue-100 text-blue-700 px-4 py-2 rounded-full text-sm font-semibold">JavaScript</span>
            <span class="bg-blue-100 text-blue-700 px-4 py-2 rounded-full text-sm font-semibold">Tailwind CSS</span>
        </div>
    </section>

</main>

<footer class="bg-gray-800 text-white text-center py-6 mt-8">
    <p class="text-gray-400 text-sm">&copy; 2026 Erick Steven Pasquel Vásquez &mdash; Todos los derechos reservados</p>
</footer>

</body>
</html>
