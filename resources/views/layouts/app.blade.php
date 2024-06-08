<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/js/app.js')

    <title>{{ ucwords(Request::route()->getName() . " ~ boolando" )}} </title>

</head>
<body>
    @include('../partials/header')


    <main>
<h1 class="text-center fw-bold">{{ ucwords(Request::route()->getName())}}</h1>

        <div class="container">
            @yield('content')
        </div>
    </main>

    @include('../partials/footer')
</body>
</html>