<!-- footer.php -->

<!-- Footer Start -->
<div class="footer container-fluid mt-5 py-5 px-sm-3 px-md-5 text-white">
    <div class="row pt-5">
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-primary mb-4">Contáctenos en</h4>
            <p><i class="fa fa-map-marker-alt mr-2"></i>Brisas del Paraiso, Nuevo Emperador</p>
            <p><i class="fa fa-phone-alt mr-2"></i>+507 6640-7034</p>
            <p><i class="fa fa-envelope mr-2"></i>jjosue202003@gmail.com</p>
            <div class="d-flex justify-content-start mt-4">
                <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;"
                    href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;"
                    href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;"
                    href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 40px; height: 40px;"
                    href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-primary mb-4">Navegación</h4>
            <div class="d-flex flex-column justify-content-start">
                <a class="text-white mb-2 <?php echo ($page == 'home')? 'active' : ''; ?>" href="index.php?page=home"><i class="fa fa-angle-right mr-2"></i>Inicio</a>
                <a class="text-white mb-2" href="index.php?page=about"><i class="fa fa-angle-right mr-2 <?php echo ($page == 'about') ? 'active' : ''; ?>"></i>Acerca de nosotros</a>
                <a class="text-white mb-2" href="index.php?page=productos"><i class="fa fa-angle-right mr-2 <?php echo ($page == 'productos') ? 'active' : ''; ?>"></i>Catálogo - Productos</a>
                <a class="text-white mb-2" href="index.php?page=diseños"><i class="fa fa-angle-right mr-2 <?php echo ($page == 'diseños') ? 'active' : ''; ?>"></i>Catálogo - Diseños</a>
                <a class="text-white mb-2" href="index.php?page=formSoli"><i class="fa fa-angle-right mr-2 <?php echo ($page == 'formSoli') ? 'active' : ''; ?>"></i>Formulario de Solicitud</a>
                <a class="text-white" href="index.php?page=contact"><i class="fa fa-angle-right mr-2 <?php echo ($page == 'contact') ? 'active' : ''; ?>"></i>Contáctenos</a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <img src="img/logo.png" width="200px" alt="logo" style="border-radius: 10px;">
        </div>

        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-primary mb-4">Horario</h4>
            <h5 class="text-white">Lunes - Viernes</h5>
            <p>8.00 AM - 8.00 PM</p>
            <h5 class="text-white">Sabado - Domingo</h5>
            <p>9.00 AM - 3.00 PM</p>
        </div>
    </div>
    <!-- <div class="container border-top border-dark pt-5">
                <p class="m-0 text-center text-white">
                    &copy; <a class="text-white font-weight-bold" href="#">Your Site Name</a>. All Rights Reserved.
                    Designed
                    by
                    <a class="text-white font-weight-bold" href="https://htmlcodex.com">HTML Codex</a>
                </p>
            </div> -->
</div>
<!-- Footer End -->

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>

<!-- Contact Javascript File -->
<script src="mail/jqBootstrapValidation.min.js"></script>
<script src="mail/contact.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>