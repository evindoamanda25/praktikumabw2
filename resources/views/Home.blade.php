<!-- resources/views/Home.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <h1>Selamat Datang di Halaman Home</h1>
    <ul>
        <li><a href="{{ route('profil') }}">Profil</a></li>
        <li><a href="{{ route('pendidikan') }}">Pendidikan</a></li>
        <li><a href="{{ route('keahlian') }}">Keahlian</a></li>
    </ul>
</body>
</html>