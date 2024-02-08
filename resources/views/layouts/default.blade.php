<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Weibo App') - Laravel  门教程</title>
    @vite(['resources/js/app.js'])
</head>

<body>
    @include('layouts._header')
    
    <div class="container">
        <div class="offset-md-1 col-md-10">
        @yield('content')
        @include('layouts._footer')
        </div>
    </div>
</body>
</html>