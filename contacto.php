<?php
$status = $_GET['status'] ?? '';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Mi Portafolio</title>
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

<main class="max-w-2xl mx-auto px-4 py-14">

    <h1 class="text-3xl font-bold text-gray-800 mb-8 text-center">Contáctame</h1>

    <?php if ($status === 'success'): ?>
        <div class="bg-green-100 border border-green-400 text-green-800 px-5 py-4 rounded-lg mb-6">
            ¡Tu mensaje fue enviado correctamente! Te responderé lo antes posible.
        </div>
    <?php elseif ($status === 'error'): ?>
        <div class="bg-red-100 border border-red-400 text-red-800 px-5 py-4 rounded-lg mb-6">
            Ocurrió un error al enviar el mensaje. Por favor verifica los datos e intenta de nuevo.
        </div>
    <?php endif; ?>

    <div class="bg-white rounded-xl shadow p-8">
        <form action="procesar.php" method="POST" novalidate>

            <div class="mb-5">
                <label for="nombre" class="block text-gray-700 font-medium mb-1">Nombre</label>
                <input
                    type="text"
                    id="nombre"
                    name="nombre"
                    required
                    minlength="2"
                    maxlength="100"
                    placeholder="Tu nombre completo"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent"
                >
            </div>

            <div class="mb-5">
                <label for="correo" class="block text-gray-700 font-medium mb-1">Correo electrónico</label>
                <input
                    type="email"
                    id="correo"
                    name="correo"
                    required
                    maxlength="150"
                    placeholder="tucorreo@ejemplo.com"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent"
                >
            </div>

            <div class="mb-6">
                <label for="mensaje" class="block text-gray-700 font-medium mb-1">Mensaje</label>
                <textarea
                    id="mensaje"
                    name="mensaje"
                    required
                    minlength="10"
                    rows="5"
                    placeholder="Escribe tu mensaje aquí..."
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent resize-none"
                ></textarea>
            </div>

            <button
                type="submit"
                class="w-full bg-blue-700 text-white py-3 rounded-lg font-semibold hover:bg-blue-800 active:scale-95 transition-all"
            >
                Enviar mensaje
            </button>

        </form>
    </div>

</main>

<footer class="bg-gray-800 text-white text-center py-6 mt-8">
    <p class="text-gray-400 text-sm">&copy; 2026 Juan López &mdash; Todos los derechos reservados</p>
</footer>

</body>
</html>
