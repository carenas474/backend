<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda UNAB - Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        :root {
            --amarillo-unab: #F9A825;
            --naranja-unab: #FF6F00;
            --blanco: #FFFFFF;
            --gris: #F4F4F4;
            --gris-claro: #E0E0E0;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: var(--gris);
        }

        .unab-header {
            background-color: var(--amarillo-unab);
            color: var(--blanco);
            border-bottom: 3px solid var(--naranja-unab);
        }

        .product-card {
            background: var(--blanco);
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: transform 0.3s;
            margin-bottom: 1.5rem;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .price-badge {
            background: var(--naranja-unab);
            color: var(--blanco);
            font-size: 1.2rem;
            padding: 0.5rem 1rem;
        }

        .unab-footer {
            background-color: var(--amarillo-unab);
            color: var(--blanco);
            padding: 1.5rem;
            margin-top: 2rem;
        }

        .nav-link {
            color: var(--blanco) !important;
            font-weight: 500;
        }

        .nav-link:hover {
            color: var(--naranja-unab) !important;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="unab-header navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand text-white fw-bold" href="#">UNAB Store</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Ofertas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main class="container my-5">
    <h2 class="mb-4 text-naranja-unab fw-bold">Nuestros Productos Destacados</h2>
    
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <!-- Producto 1 -->
        <div class="col">
            <div class="product-card p-3">
                <img src="https://via.placeholder.com/300x200" class="card-img-top rounded" alt="Producto 1">
                <div class="card-body">
                    <span class="badge bg-success mb-2">Más vendido</span>
                    <h5 class="card-title">Auriculares Gamer Pro X</h5>
                    <p class="card-text">Sonido envolvente 7.1 con iluminación LED RGB</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <span class="price-badge">$49.99</span>
                            <del class="text-muted ms-2">$89.99</del>
                        </div>
                        <button class="btn btn-sm btn-warning">Comprar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Producto 2 -->
        <div class="col">
            <div class="product-card p-3">
                <img src="https://via.placeholder.com/300x200" class="card-img-top rounded" alt="Producto 2">
                <div class="card-body">
                    <span class="badge bg-danger mb-2">Oferta</span>
                    <h5 class="card-title">Teclado Mecánico RGB</h5>
                    <p class="card-text">Switches Blue, diseño ergonómico retroiluminado</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <span class="price-badge">$39.99</span>
                            <del class="text-muted ms-2">$69.99</del>
                        </div>
                        <button class="btn btn-sm btn-warning">Comprar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Producto 3 -->
        <div class="col">
            <div class="product-card p-3">
                <img src="https://via.placeholder.com/300x200" class="card-img-top rounded" alt="Producto 3">
                <div class="card-body">
                    <span class="badge bg-primary mb-2">Nuevo</span>
                    <h5 class="card-title">Mouse Inalámbrico 6400DPI</h5>
                    <p class="card-text">6 botones programables, diseño ambidiestro</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <span class="price-badge">$29.99</span>
                            <del class="text-muted ms-2">$49.99</del>
                        </div>
                        <button class="btn btn-sm btn-warning">Comprar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Producto 4 -->
        <div class="col">
            <div class="product-card p-3">
                <img src="https://via.placeholder.com/300x200" class="card-img-top rounded" alt="Producto 4">
                <div class="card-body">
                    <h5 class="card-title">Monitor Curvo 24"</h5>
                    <p class="card-text">144Hz, 1ms, FreeSync Premium</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="price-badge">$199.99</span>
                        <button class="btn btn-sm btn-warning">Comprar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Producto 5 -->
        <div class="col">
            <div class="product-card p-3">
                <img src="https://via.placeholder.com/300x200" class="card-img-top rounded" alt="Producto 5">
                <div class="card-body">
                    <span class="badge bg-success mb-2">Más vendido</span>
                    <h5 class="card-title">Silla Gamer Ergonómica</h5>
                    <p class="card-text">Ajuste lumbar, reposacabezas y brazos</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="price-badge">$159.99</span>
                        <button class="btn btn-sm btn-warning">Comprar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Producto 6 -->
        <div class="col">
            <div class="product-card p-3">
                <img src="https://via.placeholder.com/300x200" class="card-img-top rounded" alt="Producto 6">
                <div class="card-body">
                    <span class="badge bg-warning mb-2">Últimas unidades</span>
                    <h5 class="card-title">Kit Streaming Profesional</h5>
                    <p class="card-text">Cámara 4K, micrófono y luces LED</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="price-badge">$299.99</span>
                        <button class="btn btn-sm btn-warning">Comprar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Footer -->
<footer class="unab-footer text-center">
    <div class="container">
        <p class="mb-0">© 2023 Universidad Autónoma de Bucaramanga - Tienda Oficial</p>
        <p class="mb-0">Garantía de calidad y soporte técnico</p>
        <div class="mt-2">
            <a href="#" class="text-white mx-2">Términos y condiciones</a>
            <a href="#" class="text-white mx-2">Políticas de envío</a>
            <a href="#" class="text-white mx-2">Soporte técnico</a>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>