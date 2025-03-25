@extends('layout.app')

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

@endsection