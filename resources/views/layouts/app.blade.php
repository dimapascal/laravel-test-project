<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
    <main>
        @include('includes.aside')
        <div class="container-fluid pa-5">
            @yield("content")
        </div>
    </main>

    @include('includes.header')





    @include('includes.footer')

</body>

</html>
