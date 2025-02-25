<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNAB Bucaramanga - Universidad Autónoma de Bucaramanga</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        /* Colores representativos de la UNAB */
        :root {
            --amarillo-unab: #F9A825; /* Amarillo */
            --naranja-unab: #FF6F00; /* Naranja */
            --blanco: #FFFFFF; /* Blanco */
            --gris: #F4F4F4; /* Gris suave */
            --gris-claro: #E0E0E0; /* Gris claro */
        }

        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #F4F4F4;
            color: #333;
        }

        .header {
            background-color: var(--amarillo-unab);
            color: var(--blanco);
            padding: 50px 20px;
            text-align: center;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .header h1 {
            font-size: 3.5em;
            margin: 0;
        }

        .header p {
            font-size: 1.2em;
            margin-top: 10px;
        }

        .intro-section {
            padding: 50px 20px;
            text-align: center;
            background-color: var(--blanco);
            border-top: 3px solid var(--naranja-unab);
            border-bottom: 3px solid var(--naranja-unab);
        }

        .intro-section h2 {
            font-size: 2.5em;
            color: var(--naranja-unab);
        }

        .intro-section p {
            font-size: 1.1em;
            line-height: 1.6em;
            color: #555;
            margin-bottom: 20px;
        }

        .promo-container {
            padding: 20px;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 30px;
        }

        .promo-card {
            background-color: var(--blanco);
            border: 1px solid var(--gris-claro);
            border-radius: 8px;
            padding: 20px;
            width: 30%;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .promo-card:hover {
            transform: translateY(-10px);
            box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.15);
        }

        .promo-card h3 {
            font-size: 1.6em;
            color: var(--naranja-unab);
            margin-bottom: 15px;
        }

        .promo-card p {
            font-size: 1em;
            line-height: 1.6em;
            color: #333;
        }

        .promo-card img {
            width: 100%;
            border-radius: 8px;
            margin-top: 15px;
        }

        .footer {
            background-color: var(--amarillo-unab);
            color: var(--blanco);
            padding: 20px;
            text-align: center;
            font-size: 1.2em;
            margin-top: 50px;
            border-radius: 8px;
        }

        .footer a {
            color: var(--blanco);
            text-decoration: none;
            font-weight: bold;
        }

        /* Responsividad */
        @media screen and (max-width: 768px) {
            .promo-card {
                width: 100%;
            }
        }
    </style>
</head>
<body>

    <header class="header">
        <h1>¡Bienvenidos a la UNAB de Bucaramanga!</h1>
        <p>Formando los líderes del futuro con excelencia académica, innovación y responsabilidad social</p>
    </header>

    <section class="intro-section">
        <h2>Tu futuro académico comienza aquí</h2>
        <p>La Universidad Autónoma de Bucaramanga (UNAB) te ofrece un entorno académico de excelencia, con programas educativos de alta calidad, un campus moderno y una comunidad comprometida con el desarrollo integral de sus estudiantes.</p>
        <p>Nos enorgullece ser una de las universidades más importantes en la región, con un enfoque global y adaptado a las necesidades del mundo contemporáneo. ¡Es tu oportunidad de formar parte de esta gran institución!</p>
    </section>

    <div class="promo-container">

        <div class="promo-card">
            <h3>Oferta Académica</h3>
            <p>La UNAB cuenta con una amplia variedad de programas académicos en distintas áreas, como ingeniería, ciencias sociales, administración, arte, derecho y más. La institución ofrece opciones a nivel de pregrado y posgrado, con una formación integral y un enfoque práctico.</p>
            <img src="https://th.bing.com/th/id/OIP.rdEXs_BL2Ndkd39PxjrONAHaFj?w=194&h=180&c=7&r=0&o=5&pid=1.7" alt="Oferta Académica UNAB">
        </div>

        <div class="promo-card">
            <h3>Infraestructura de Vanguardia</h3>
            <p>Las instalaciones de la UNAB están equipadas con lo último en tecnología, espacios modernos para el aprendizaje y una infraestructura que promueve la innovación. Nuestros estudiantes tienen acceso a laboratorios especializados, salas de computación, auditorios y zonas recreativas.</p>
            <img src="https://th.bing.com/th/id/OIP.ZZ1se-HWz_nBRGrfhymDAgHaEK?w=304&h=180&c=7&r=0&o=5&pid=1.7" alt="Infraestructura UNAB">
        </div>

        <div class="promo-card">
            <h3>Responsabilidad Social y Compromiso</h3>
            <p>La UNAB se destaca por su compromiso con el desarrollo social. Trabajamos en proyectos que impactan positivamente a la comunidad y nos enfocamos en la sostenibilidad. Fomentamos la participación activa de nuestros estudiantes en iniciativas sociales que benefician tanto a la región como a la sociedad global.</p>
        </div>

    </div>

    <footer class="footer">
        <p>¡Únete a la comunidad UNAB y empieza a construir tu futuro hoy mismo!</p>
        <p><a href="https://www.unab.edu.co">Visita nuestra página web</a></p>
    </footer>

</body>
</html>
