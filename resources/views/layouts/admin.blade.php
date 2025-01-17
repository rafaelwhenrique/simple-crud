<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Basic Crud</title>
</head>

<body>
    <nav class="navbar bg-primary border-body mb-3" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Simple CRUD</a>
        </div>
    </nav> 
    <x-alert />
    @yield('content')

    <footer class="footer-custom py-3 mt-auto text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8 d-flex align-items-center">
                    <span class="mb-0">© Copyright 2025 Todo conteúdo do site pode ser reproduzido, desde que citada a
                        fonte.</span>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
