<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page</title>
</head>
<body>
    <div>
        <h1>Halo, {{ Auth::user()->name }}</h1>
        <p>Role: {{ Auth::user()->role }}</p>
    </div>
</body>
</html>
