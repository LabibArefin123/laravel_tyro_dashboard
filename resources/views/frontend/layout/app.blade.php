<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Tyro Dashboard')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;

        }

        .btn-tyro {
            background: #ff9800;
            border: none;
            color: #000;
            padding: 12px 28px;
            font-weight: 600;
            border-radius: 30px;
        }

        .btn-tyro:hover {
            background: #ffc107;
        }

        .dev-link {
            position: relative;
            color: #2b2b2b;
            text-decoration: none;
            padding: 2px 6px;
            z-index: 1;
            transition: color 0.25s ease;
            overflow: hidden;
        }

        /* Parallelogram background */
        .dev-link::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0%;
            width: 0;
            height: 100%;
            background-color: #ff6b6b;
            /* sky red */
            transform: skewX(-20deg);
            transform-origin: left;
            transition: width 0.3s ease;
            z-index: -1;
        }

        .dev-link:hover {
            color: #fff;
            /* readable on red */
        }

        .dev-link:hover::after {
            width: 100%;
        }
    </style>
</head>

<body>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
