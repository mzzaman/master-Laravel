<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <nav class="bg-dark p-2">
        <ul class="d-flex justify-content-center">
            <a href="{{ route('home') }}" class="px-2">
                Home
            </a>
            <a href="{{ route('posts.create') }}" class="px-2">Create</a>
            <a href="{{ route('home') }}" class="px-2">Post</a>
            <a href="" class="px-2">Contract</a>
        </ul>
    </nav>
    <main class="container mt-4 py-0">
        @if (session('status'))
            <div class="alert alert-info">
                {{ session('status') }}
            </div>
        @endif
        @yield('content')
    </main>
</body>

</html>
