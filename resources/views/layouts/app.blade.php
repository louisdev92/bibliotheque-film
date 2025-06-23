<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Alcolociné 🍻')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            background-color: #2c1b1b;
            color: #f8f1e4;
            font-family: 'Courier New', Courier, monospace;
        }
        .bar-header {
            background-color: #4b1e1e;
            color: #ffd700;
            border-radius: 8px;
            padding: 1rem;
            box-shadow: 0 4px 10px rgba(0,0,0,0.4);
        }
        .logo-title {
            display: flex;
            align-items: center;
            gap: 1rem;
            justify-content: center;
        }
        .logo-title img {
            max-height: 200px;
            width: auto;
        }
        .card {
            background-color: #3e2c2c;
            border: 1px solid #8b5c2f;
        }
        .card-title {
            color: #ffcc00;
        }
        .btn-primary {
            background-color: #8b0000;
            border: none;
        }
        .btn-primary:hover {
            background-color: #a52a2a;
        }
        .btn-outline-secondary {
            color: #f8f1e4;
            border-color: #d2b48c;
        }
        .btn-outline-secondary:hover {
            background-color: #d2b48c;
            color: #2c1b1b;
        }
        .form-select, .form-control {
            background-color: #2c1b1b;
            color: #f8f1e4;
            border-color: #d2b48c;
        }
        .badge.bg-warning {
            background-color: #ffd700 !important;
            color: #4b1e1e !important;
        }

        footer {
            background-color: #4b1e1e;
            color: #f1e6c4;
            padding: 2rem 1rem;
            margin-top: 5rem;
            border-top: 3px solid #ffd700;
            text-align: center;
        }
        footer p {
            margin: 0.2rem 0;
        }
        footer .footer-title {
            font-weight: bold;
            font-size: 1.1rem;
            color: #ffd700;
        }
        footer a {
            color: #f8f1e4;
            text-decoration: underline;
        }
        footer a:hover {
            color: #ffcc00;
        }
    </style>
</head>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<body>

<div class="container py-4">
    {{-- Header --}}
    <div class="bar-header text-center mb-5">
        <div class="logo-title">
                <img src="{{ asset('Alcolo.png') }}" alt="Logo Alcolociné" />
        </div>
        <p class="mb-0 fst-italic">Des critiques de films... bien arrosées</p>
    </div>

    {{-- Contenu spécifique à chaque page --}}
    @yield('content')
</div>

{{-- Footer --}}
<footer>
    <div class="footer-title">Alcolociné © 2025</div>
    <p>Une gorgée de cinéma, une lampée d'humour.</p>
    <p><a href="#">À propos</a> | <a href="#">Mentions légales</a> | <a href="#">Nous contacter</a></p>
    <p class="small fst-italic">L'abus de navets est dangereux pour la santé cinématographique</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
