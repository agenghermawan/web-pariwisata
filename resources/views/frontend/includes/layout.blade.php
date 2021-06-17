<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('frontend.includes.style')
</head>

<body>


    <!-- navbar -->
    @include('frontend.includes.navbar')

    @yield('content')

    @yield('footer')


    @include('frontend.includes.script')
</body>

</html>
