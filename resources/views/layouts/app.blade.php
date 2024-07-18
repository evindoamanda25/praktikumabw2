<!DOCTYPE html>
<html lang="en">
<head>
    <title>My App</title>
</head>
<body>
        @yield('content')
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
        @stack('scripts')
</body>
</html>
