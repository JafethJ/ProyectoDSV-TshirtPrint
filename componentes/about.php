<!-- about.php -->
<!-- Page Header Start -->
<div class="container-fluid page-header-about mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
        <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Acerca de Nosotros</h4>
        <div class="d-inline-flex">
            <p class="m-0 text-white"><a class="text-white <?php echo ($page == 'home') ? 'active' : ''; ?>" href="index.php?page=home">Inicio</a></p>
            <p class="m-0 text-white px-2">/</p>
            <p class="m-0 text-white">Acerca de Nosotros</p>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- About Start -->
<div class="container py-5">
    <div class="row align-items-center">
        <div class="col-lg-6">
            <img class="img-fluid mb-4 mb-lg-0" src="./img/ft-experiencia.png" alt="Image">
        </div>
        <div class="col-lg-6">
            <h2 class="display-4 font-weight-bold mb-4">5 años de experiencia</h2>
            <p>Durante cinco años, hemos brindado servicios de impresión personalizados de alta calidad en suéteres, camisetas y más. Nos especializamos en crear piezas únicas que reflejan la personalidad y estilo de nuestros clientes.</p>
            <div class="row py-2">
                <div class="col-sm-6 text-center">
                    <img src="./img/tec_avanzada.png" alt="Tecnología Avanzada" class="img-fluid mb-3" style="width: 70px; height: auto;">
                    <h4 class="font-weight-bold">Tecnología avanzada</h4>
                    <p class="text-justify">Usamos equipos de última generación para garantizar impresiones duraderas y de gran calidad.</p>
                </div>
                <div class="col-sm-6 text-center">
                    <img src="./img/cal_garantizada.png" alt="Calidad Garantizada" class="img-fluid mb-3" style="width: 90px; height: auto;">
                    <h4 class="font-weight-bold">Calidad garantizada</h4>
                    <p class="text-justify">Nuestros productos pasan por rigurosos controles de calidad para asegurar que cada pieza sea impecable.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->



<!-- seccion de trabajadores -->
<?php
    include './componentes/workers.php';
?>
<!-- termina seccion de trabajadores -->
