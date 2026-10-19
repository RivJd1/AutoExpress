<!DOCTYPE html>
<html lang="es" data-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titulo') | AutoRenta Express</title>

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bulma@1.0.4/css/bulma.min.css"
    >

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Source+Sans+3:wght@400;600;700&display=swap">

    <style>
        :root {
            --bulma-primary-h: 351deg;
            --bulma-primary-s: 85%;
            --bulma-primary-l: 42%;

            --bulma-family-primary: "Source Sans 3", Helvetica, Arial, sans-serif;

            --bulma-radius: 2px;
            --bulma-radius-small: 2px;
            --bulma-radius-medium: 2px;
            --bulma-radius-large: 2px;
        }
        h1, h2, h3, .title { font-family: "DM Serif Display", Georgia, serif; font-weight: 400; }
        .image img { object-fit: cover; }
        html { scroll-padding-top: 5rem; }
    </style>

    @yield('estilos')
</head>
<body class="has-navbar-fixed-top">

    @include('partials.menu')

    @yield('contenido')

    @include('partials.footer')

</body>
</html>
