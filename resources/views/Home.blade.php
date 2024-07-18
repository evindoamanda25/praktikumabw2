<!-- resources/views/Home.blade.php -->

<!DOCTYPE html> 
<html> 
 <head> 
  <title>Home</title> 
 </head> 
 <body> 
    <h2>Welcome, {{ Auth::user()->name }}</h2> 
     <a href="{{ route('logout') }}">Logout</a> 
 </body> 
</html> 