<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BENGOO G9000 - UNAB Store</title>
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
            padding: 2rem 0;
            border-bottom: 3px solid var(--naranja-unab);
        }

        .product-card {
            background: var(--blanco);
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: transform 0.3s;
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

        .color-option {
            border: 2px solid var(--gris-claro);
            border-radius: 8px;
            padding: 0.5rem;
            margin: 0.3rem;
            cursor: pointer;
        }

        .coupon-section {
            background: linear-gradient(45deg, var(--amarillo-unab), var(--naranja-unab));
            color: var(--blanco);
            border-radius: 8px;
        }

        .unab-footer {
            background-color: var(--amarillo-unab);
            color: var(--blanco);
            padding: 1.5rem;
            margin-top: 2rem;
        }
    </style>
</head>
<body>

<!-- Header -->
<header class="unab-header text-center mb-4">
    <div class="container">
        <h1 class="display-4 fw-bold">BENGOO G9000</h1>
        <p class="lead">Auriculares gaming premium - Tienda Oficial UNAB</p>
    </div>
</header>

<main class="container">
    <!-- Product Info Section -->
    <div class="row g-4">
        <div class="col-md-6">
            <div class="product-card p-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <span class="badge bg-success">Más vendido</span>
                    <span class="price-badge">44% OFF</span>
                </div>
                
                <h2 class="text-naranja-unab mb-3">Características principales</h2>
                <ul class="list-unstyled">
                    <li class="mb-2">✅ Sonido envolvente 7.1</li>
                    <li class="mb-2">✅ Cancelación de ruido</li>
                    <li class="mb-2">✅ Micrófono integrado</li>
                    <li class="mb-2">✅ Compatibilidad multiplataforma</li>
                    <li class="mb-2">✅ Iluminación LED</li>
                </ul>

                <div class="mt-4">
                    <h4 class="text-naranja-unab">Colores disponibles</h4>
                    <div class="d-flex flex-wrap">
                        <div class="color-option" style="background: #007bff"></div>
                        <div class="color-option" style="background: #dc3545"></div>
                        <div class="color-option" style="background: #28a745"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="product-card p-4">
                <!-- Pricing Section -->
                <div class="coupon-section p-3 mb-4">
                    <h4 class="fw-bold">Cupón 15% de descuento</h4>
                    <p class="mb-0">Aplica al finalizar la compra</p>
                </div>

                <div class="mb-4">
                    <h3 class="text-naranja-unab">Precio especial</h3>
                    <div class="d-flex align-items-center">
                        <h2 class="text-danger me-3">$19.99</h2>
                        <del class="text-muted">$55.99</del>
                    </div>
                </div>

                <!-- Shipping Info -->
                <div class="border-top pt-3">
                    <h5 class="text-naranja-unab">Envío a Colombia</h5>
                    <p class="mb-1">🚚 Envío: $9.29</p>
                    <p class="mb-1">📦 Sin cargos de importación</p>
                    <p class="mb-1">🔄 Devoluciones internacionales gratis</p>
                </div>

                <!-- Action Button -->
                <button class="btn btn-warning w-100 mt-4 fw-bold py-2">
                    COMPRAR AHORA
                </button>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="row mt-4">
        <div class="col-12">
            <div class="product-card p-4">
                <h3 class="text-naranja-unab">Especificaciones técnicas</h3>
                <div class="row">
                    <div class="col-md-6">
                        <p>🎮 Compatibilidad: PS4, PS5, Xbox, PC, Nintendo</p>
                        <p>🔊 Tipo: Over-Ear</p>
                        <p>🔌 Conexión: Alámbrico</p>
                    </div>
                    <div class="col-md-6">
                        <p>🔋 Duración batería: N/A</p>
                        <p>🎛️ Control de ruido: Aislamiento acústico</p>
                        <p>📏 Peso: 320g</p>
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
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>