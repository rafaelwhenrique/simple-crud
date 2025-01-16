<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Basic Crud</title>
</head>
<body>
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
            <span  href="{{ route('users.index') }}" class="fs-4">Basic Crud</span>
        </a>
    </header>
    <x-alert />
    @yield('content')

    <footer class="footer-custom py-3 mt-auto text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 d-flex align-items-center">
                    <span class="mb-0">© Copyright 2025 Todo conteúdo do site pode ser reproduzido, desde que citada a fonte.</span>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>