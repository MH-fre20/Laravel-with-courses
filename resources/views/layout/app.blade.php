<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link href="{{ asset('rcs/app.css') }}" rel="stylesheet">
    <script src="{{ mix('js/app.js') }}" defer></script>
    <title> Laravel App - @yield('title')</title>
</head>
<style>
    #header {
        box-shadow: 2px 2px 2px lightblue;
    }

</style>

<body>
    <div id="header" class="d-flex justify-content-around align-items-center p-3 px-md-4 bg-white">
        <h5 class="my-0 mr-md-auto font-weight-normal">laravel App</h5>
        <nav class="my-2 my-md-0 mr-md-3" id="mynav">
            <a class="p-2 text-dark" href="{{ route('nothome.index') }}">Home</a>
            <a class="p-2 text-dark" href="{{ route('nothome.contact') }}">Contact</a>
            <a class="p-2 text-dark" href="{{ route('posts.index') }}">Blog Posts</a>
            <a class="p-2 text-dark" href="{{ route('posts.create') }}">Add Blog Post</a>
        </nav>
    </div>
    <div class="container">
        @if (session('status'))
            <div class="alert alert-success">
                <li>{{ session('status') }}</li>
            </div>
        @endif
        @yield('content')
    </div>
</body>

</html>