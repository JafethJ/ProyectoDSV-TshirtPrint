<!-- header.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>T'Shirt Print - Imprime tus diseños</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>

</head>

<body class="bg-white">
    <!-- Navbar Start -->
    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            <a href="index.php?page=home" class="navbar-brand d-flex align-items-center">
                <img src="./img/logo.png" width="120px" alt="logo" style="border-radius: 10px; margin-right: 10px;">
                <h1 class="m-0 display-4 font-weight-bold text-uppercase text-white">T'Shirt Print</h1>
            </a>

            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4 bg-secondary">
                    <!-- Enlaces de navegación con clase activa dinámica -->
                    <a href="index.php?page=home"
                        class="nav-item nav-link <?php echo ($page == 'home') ? 'active' : ''; ?>">Inicio</a>
                    <a href="index.php?page=about"
                        class="nav-item nav-link <?php echo ($page == 'about') ? 'active' : ''; ?>">Acerca de
                        nosotros</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle <?php echo ($page == 'diseños' || $page == 'productos') ? 'active' : ''; ?>" data-toggle="dropdown">Catálogo</a>
                        <div class="dropdown-menu text-capitalize">
                            <a href="index.php?page=productos"
                                class="dropdown-item <?php echo ($page == 'productos') ? 'active' : ''; ?>">Productos</a>
                            <a href="index.php?page=diseños"
                                class="dropdown-item <?php echo ($page == 'diseños') ? 'active' : ''; ?>">Diseños</a>
                        </div>
                    </div>
                    <a href="index.php?page=formSoli"
                        class="nav-item nav-link <?php echo ($page == 'formSoli') ? 'active' : ''; ?>">Formulario de
                        solicitud</a>
                    <a href="index.php?page=contact"
                        class="nav-item nav-link <?php echo ($page == 'contact') ? 'active' : ''; ?>">Contáctenos</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->