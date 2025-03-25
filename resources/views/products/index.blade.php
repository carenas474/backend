@extends('layout.app')

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

@endsection