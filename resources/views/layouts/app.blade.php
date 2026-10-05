<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'My Laravel App')</title>
    <!-- Linking CSS using Laravel asset helper -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Shared Navigation Bar -->
    <nav style="background: #f4f4f4; padding: 10px; margin-bottom: 20px;">
        <a href="/">Home</a> | 
        <a href="/about">About Us</a> | 
        <a href="/services">Services</a> | 
        <a href="/contact">Contact</a>
    </nav>
    <hr>
    <!-- Dynamic Page Content Injection Point -->
    <div class="container">
        @yield('content')
    </div>
    <hr>
    <!-- Shared Footer -->
    <footer>
        <p>&copy; 2026 Web Development 3 Class. All rights reserved.</p>
    </footer>
</body>
</html>