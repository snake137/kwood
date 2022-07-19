<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
    <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-center align-items-center">
            <div class="col-4 text-center">
                <a class="blog-header-logo text-dark" href="/">KwoodNews</a>
            </div>
        </div>
    </header>
    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            @foreach ($categories as $category)
                <a class="p-2 link-secondary link-category" href="/category/{{ $category->slug }}">{{ $category->name }}</a>
            @endforeach
        </nav>
    </div>
</div>
