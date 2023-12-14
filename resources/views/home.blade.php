<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    @vite('resources/css/app.css')
    <title>Minha Barra de Navegação</title>
</head>
<body class="bg-gray-100">

    <nav class="bg-blue-500 p-4">
        <div class="container mx-auto flex items-center justify-between">
            <!-- Logo -->
            <div class="text-white text-xl font-bold">Meu Site</div>

            <!-- Ícone de Hambúrguer -->
            <div class="lg:hidden">
                <button id="menu-toggle" class="text-white focus:outline-none">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
            <!-- Links da Navegação -->
            <div id="nav-links" class="hidden lg:flex space-x-4">
                <a href="inicio" class="text-white nav-link">Início</a>
            </div>
        </div>
    </nav>
    <!-- Conteúdo da Página -->
    <div class="container mx-auto mt-4">
        <!-- Seu conteúdo aqui -->
        <p>Bem-vindo ao meu site!</p>
    </div>

    <!-- Script para mostrar/ocultar o menu -->
    <script>
        document.getElementById('menu-toggle').addEventListener('click', function () {
            var navLinks = document.getElementById('nav-links');
            navLinks.classList.toggle('hidden');
        });
    </script>

</body>
</html>
