<!-- index.php -->

<?php
// Determina la sección actual, por defecto es 'home'
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Siempre incluimos el header y el footer
include './componentes/header.php';

// Cargar componentes según la sección
if ($page == 'home') {
    include './componentes/carrousel.php';
    include './componentes/tipoProducto.php';
    include './componentes/cards_h.php';
    include './componentes/news.php';
    include './componentes/workers.php';
    include './componentes/testimonies.php';
} elseif ($page == 'about') {
    include './componentes/about.php';
} elseif ($page == 'productos') {
    include './componentes/productos.php';
} elseif ($page == 'diseños') {
    include './componentes/diseños.php';
} elseif ($page == 'formSoli') {
    include './componentes/formSoli.php';
} elseif ($page == 'contact') {
    include './componentes/contact.php';
}

// Incluimos el footer al final
include './componentes/footer.php';
?>
