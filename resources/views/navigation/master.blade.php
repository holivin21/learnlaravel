<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>@yield('title')</title>
    @yield('style')
</head>
<body>
    @include('navigation/nav')
    <div class="py-4">
        @yield('body')
    </div>

</body>
</html>
