<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>@yield('title', $title)</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }
        .btn-custom {
            border-radius: 50px;
            padding: 10px 30px;
            font-size: 16px;
        }
        .btn-login {
            background-color: #007bff;
            color: white;
        }
        .btn-register {
            background-color: #17a2b8;
            color: white;
        }
        h1 {
            font-size: 3rem;
            margin-bottom: 40px;
        }
    </style>
</head>

<body>
    <div class="container text-center">
        <h1>@yield('title', $title)</h1>
        @yield('content')

        
        
    </div>
</body>


</html>
