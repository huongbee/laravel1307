<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    
    <h1>Đây là header</h1>
    <div>

        @yield('content')

        @yield('right')

    </div>
    <h1>Đây là footer</h1>
</body>
</html>
