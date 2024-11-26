<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .header {
            background-color: #333;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        .nav {
            background-color: #444;
            overflow: hidden;
        }
        .nav li {
            list-style-type: none;
            float: left;
        }
        .nav li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        .nav li a:hover {
            background-color: #555;
        }
        .container {
            padding: 20px;
        }
        .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
        @yield('styles')
    </style>
</head>
<body>
    <div class="header">
        <h1>Welcome to my Blog</h1>
    </div>
    <div class="nav">
        <li><a href="/">Home</a></li>
        <li><a href="/post">Post</a></li>
        <li><a href="/category">Category</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/contact">Contact</a></li>
    </div>
    <div class="container">
        @yield('content')
    </div>
    <div class="footer">
        <p>© 2025 Khamko. All rights reserved.</p>
    </div>

</body>
</html>
