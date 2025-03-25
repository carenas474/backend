<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@@yield('title')</title>
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

@include('layout.navbar')

@yield('content')

@include('layout.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>