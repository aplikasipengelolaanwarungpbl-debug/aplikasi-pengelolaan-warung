<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem CRUD Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 40px auto;
            padding: 0 20px;
        }

        nav {
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #333;
        }

        nav a {
            margin-right: 15px;
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
        }

        input,
        button {
            padding: 8px;
            margin-bottom: 10px;
            display: block;
            width: 100%;
            box-sizing: border-box;
        }

        button {
            width: auto;
            cursor: pointer;
            background: #333;
            color: #fff;
            border: none;
        }
    </style>
</head>

<body>

    <nav>
        <a href="/produk">Daftar Produk</a>
        <a href="/produk/create">Tambah Produk</a>
    </nav>