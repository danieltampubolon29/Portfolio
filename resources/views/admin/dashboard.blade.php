<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- start: Icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- start: Icons -->
    <!-- start: CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <!-- end: CSS -->
    <link rel="icon" href="{{ asset('img/fernan.png') }}" type="image/png">
    <title>Fernandev | Dashboard</title>
</head>

<body>
    <!-- start: Sidebar -->
    @include('admin.components.sidebar')
    <div class="sidebar-overlay"></div>
    <!-- end: Sidebar -->
    <!-- start: Main -->
    <main class="bg-light">
        <div class="p-2">
            <!-- start: Navbar -->
            @include('admin.components.navbar')
            <!-- end: Navbar -->
        </div>
        <!-- start: Table -->
        <div class="container mt-4">
            <div class="card">
                @include('admin.components.card-hearder')
                <div class="card-body">
                    <div class="table-responsive">
                        @include('admin.components.table')
                    </div>
                </div>
            </div>
        </div>
        <!-- end: Table -->
    </main>
    <!-- end: Main -->
    <!-- start: JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <!-- end: JS -->
</body>
</html>
