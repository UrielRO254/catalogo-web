<<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Laptops en el Catálogo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }

        h2 {
            color: #333;
        }

        /* Estilo del input de búsqueda */
        .search-container {
            margin-bottom: 20px;
        }

        .search-container input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        /* Estilo de la lista de laptops */
        .laptop-list {
            list-style-type: none;
            padding: 0;
        }

        .laptop-list li {
            background-color: #e3e3e3;
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
            font-size: 18px;
        }

        .laptop-list li.hidden {
            display: none;
        }
    </style>
</head>
<body>

    <h2>Buscar Laptops en el Catálogo</h2>

    <!-- Campo de búsqueda -->
    <div class="search-container">
        <input type="text" id="searchInput" placeholder="Busca una laptop (ej. Laptop 1)..." onkeyup="buscarLaptop()">
    </div>

    <!-- Lista de laptops -->
    <ul class="laptop-list" id="laptopList">
        <li>Laptop 1 - Acer Aspire 5</li>
        <li>Laptop 2 - HP Pavilion</li>
        <li>Laptop 3 - ASUS ZenBook</li>
        <li>Laptop 4 - MacBook Air</li>
        <li>Laptop 5 - Dell XPS
