<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Producto - UNAB Store</title>
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

        .form-container {
            background: var(--blanco);
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            padding: 2rem;
            margin: 2rem auto;
        }

        .form-title {
            color: var(--naranja-unab);
            border-bottom: 2px solid var(--gris-claro);
            padding-bottom: 1rem;
            margin-bottom: 2rem;
        }

        .btn-unab {
            background-color: var(--naranja-unab);
            color: var(--blanco);
            padding: 0.5rem 2rem;
            transition: all 0.3s ease;
        }

        .btn-unab:hover {
            background-color: var(--amarillo-unab);
            color: var(--blanco);
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

        .form-control:focus {
            border-color: var(--amarillo-unab);
            box-shadow: 0 0 0 0.25rem rgba(249, 168, 37, 0.25);
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
                    <a class="nav-link" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Crear Producto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Administración</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Salir</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main class="container">
    <div class="form-container">
        <h2 class="form-title">Nuevo Producto</h2>
        
        <form>
            <div class="row g-3">
                <!-- Sección Información Básica -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Nombre del Producto</label>
                        <input type="text" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Descripción</label>
                        <textarea class="form-control" rows="4" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Categoría</label>
                        <select class="form-select" required>
                            <option value="">Seleccionar categoría</option>
                            <option>Audio</option>
                            <option>Periféricos</option>
                            <option>Hardware</option>
                            <option>Accesorios</option>
                        </select>
                    </div>
                </div>

                <!-- Sección Detalles Técnicos -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Precio</label>
                        <div class="input-group">
                            <span class="input-group-text">$</span>
                            <input type="number" class="form-control" step="0.01" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Stock Disponible</label>
                        <input type="number" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">SKU (Código de producto)</label>
                        <input type="text" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Imágenes del Producto</label>
                        <input type="file" class="form-control" multiple accept="image/*">
                    </div>
                </div>

                <!-- Sección Especificaciones -->
                <div class="col-12">
                    <div class="border-top pt-3">
                        <h5 class="text-naranja-unab mb-3">Especificaciones Técnicas</h5>
                        
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label">Marca</label>
                                <input type="text" class="form-control">
                            </div>
                            
                            <div class="col-md-4">
                                <label class="form-label">Modelo</label>
                                <input type="text" class="form-control">
                            </div>
                            
                            <div class="col-md-4">
                                <label class="form-label">Color Disponible</label>
                                <input type="text" class="form-control" placeholder="Separar con comas">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Botón de Envío -->
                <div class="col-12 text-center mt-4">
                    <button type="submit" class="btn btn-unab btn-lg">
                        <i class="bi bi-save me-2"></i>Guardar Producto
                    </button>
                </div>
            </div>
        </form>
    </div>
</main>

<!-- Footer -->
<footer class="unab-footer text-center">
    <div class="container">
        <p class="mb-0">© 2023 Universidad Autónoma de Bucaramanga - Tienda Oficial</p>
        <div class="mt-2">
            <a href="#" class="text-white mx-2">Políticas de privacidad</a>
            <a href="#" class="text-white mx-2">Términos de uso</a>
            <a href="#" class="text-white mx-2">Soporte técnico</a>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>