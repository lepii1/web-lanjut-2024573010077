<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
</head>
<body class="container mt-4">

<h1 class="text-center mb-4">Laravel 12 Complex Relationships</h1>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<nav class="mb-4">
    <a href="{{ route('users.index') }}"
       class="btn me-2 {{ request()->routeIs('users.*') ? 'btn-primary' : 'btn-outline-primary' }}">
        <i class="bi {{ request()->routeIs('users.*') ? 'bi-people-fill' : 'bi-people' }}"></i>
        Users
    </a>

    <a href="{{ route('posts.index') }}"
       class="btn {{ request()->routeIs('posts.*') ? 'btn-primary' : 'btn-outline-primary' }}">
        <i class="bi {{ request()->routeIs('posts.*') ? 'bi-file-earmark-text-fill' : 'bi-file-earmark-text' }}"></i>
        Posts
    </a>
</nav>

@yield('content')

</body>
</html>
