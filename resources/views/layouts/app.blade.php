<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Metode Pengembangan Modern</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        nav {
            background-color: #444;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px;
            margin: 0 10px;
            display: inline-block;
        }

        h1 {
            margin: 0;
        }
    </style>
</head>
<body>

    <header>
        <h1>Metode Pemrograman Modern</h1>
    </header>

    <nav>
        <a href="/">Home</a>
        <a href="{{route('tabelmahasiswa')}}">Lihat Data</a>
        <a href="{{route('tabelmahasiswa.create')}}">Tambah Data</a>
        <a href="About-us">About Us</a>
    </nav>
    @yield('content')
