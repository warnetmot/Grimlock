<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Welcome</title>
</head>
<body class="antialiased">
    <div class="relative min-h-screen bg-gray-100 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <section class="banner">
                <div class="container mx-auto py-20 px-6 text-center text-white">
                    <h2 class="text-4xl font-bold mb-6">Bienvenido</h2>
                    <h2 class="text-4xl font-bold mb-6">A JP_CONSULTORES</h2>
                    <nav class="nav-container">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/home') }}" class="nav-link">Inicio</a>
                            @else
                                <a href="{{ route('login') }}" class="nav-link">Iniciar sesión</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="nav-link">Registrarse</a>
                                @endif
                            @endauth
                        @endif
                    </nav>
                </div>
            </section>

            <section class="cta-section">
                <div class="cta-background">
                    <!-- Contenido opcional aquí -->
                </div>
                <div class="cta-section-content">
                    <h3 class="text-xl font-bold">La consultoría se ha convertido en un recurso esencial para las empresas, una herramienta de apoyo a la gestión interna en una diversidad de áreas y funciones.</h3>
                </div>
            </section>

        </div>
    </div>
</body>
</html>

<style>
*,
*::before,
*::after {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Inter', sans-serif;
    line-height: 1.6;
    background-color: #f3f4f6;
    color: #333;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
}

/* Banner */
.banner {
    height: 60vh;
    background-color: #1a202c; 
    background-image: url('{{ asset('C:\xampp\htdocs\Grimlock\public\imagenes\consultoras.jpg') }}'); 
    background-size: cover;
    background-position: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: #fff;
    position: relative;
    padding: 20px; 
}

.banner h2 {
    font-size: 3rem; 
    font-weight: bold;
    margin-bottom: 10px;
}
ión */
.nav-container {
    display: flex;
    justify-content: center;
    gap: 15px; 
    margin-top: 20px;
    position: absolute;
    top: 10px;
    right: 0;
    left: 0;
    padding: 0 20px;
}

.nav-link {
    background-color: #e53e3e;
    color: white;
    padding: 10px 20px;
    border-radius: 25px;
    text-decoration: none;
    transition: background-color 0.3s ease;
    font-size: 1.1rem; 
}

.nav-link:hover {
    background-color: #c53030; 
}

.cta-button {
    display: inline-block;
    background-color: #3182ce; 
    color: white;
    padding: 12px 30px; 
    border-radius: 30px;
    text-decoration: none;
    font-size: 1.1rem; 
    transition: background-color 0.3s ease;
    cursor: pointer;
}

.cta-button:hover {
    background-color: #2b6cb0; 
}

.cta-section {
    position: relative;
    text-align: center;
    padding: 40px 20px;
    background-color: #edf2f7; 
    border-radius: 8px;
    margin-top: 30px;
    overflow: hidden; 
}

.cta-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url('{{ asset('C:\xampp\htdocs\Grimlock\public\imagenes\consultoras.jpg') }}'); /* Imagen de fondo */
    background-size: cover;
    background-position: center;
    z-index: -1;
    opacity: 0.5; 
}

.cta-section-content {
    position: relative;
    z-index: 1; 
    color: #2d3748; 
    padding: 20px; 
}

.cta-section h3 {
    font-size: 1.75rem; 
    font-weight: bold;
    color: #2d3748;
    margin-bottom: 20px;
}

/* Responsividad */
@media (max-width: 768px) {
    .banner h2 {
        font-size: 2.5rem;
    }
    .nav-link {
        font-size: 1rem; 
    }
    .cta-section h3 {
        font-size: 1.5rem;
    }
}
</style>
