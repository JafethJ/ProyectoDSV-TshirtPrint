<?php
session_start();

// Verifica si existe el carrito en la sesión
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}

// Agregar el producto al carrito
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $producto = [
        'image' => $_POST['image'],
        'title' => $_POST['title'],
        'price' => $_POST['price'],
        'description' => $_POST['description'],
    ];
    $_SESSION['carrito'][] = $producto;

    echo '<script>alert("Producto añadido al carrito!"); window.location.href = "productos.php";</script>';
}
