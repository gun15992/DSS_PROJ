<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    @vite('resources/js/app.js')
</head>
<body>
    <header>
        @include('layouts.navbar')
        @include('layouts.headTitle')
    </header>
    <main class="container">