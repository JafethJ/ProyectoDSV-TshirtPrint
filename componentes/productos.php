<!-- productos.php -->
<?php
include_once 'prod_dise_class.php'; //se inclye la clase del card
?>
<!-- Page Header Start -->
<div class="container-fluid page-header-about mb-5">
  <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
    <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Catálogo - Productos</h4>
    <div class="d-inline-flex">
      <p class="m-0 text-white"><a class="text-white <?php echo ($page == 'home') ? 'active' : ''; ?>"
          href="index.php?page=home">Inicio</a></p>
      <p class="m-0 text-white px-2">/</p>
      <p class="m-0 text-white">Catálogo - Productos</p>
    </div>
  </div>
</div>
<!-- Page Header End -->
<div class="container pt-5 team">
  <div class="d-flex flex-column text-center mb-5">
    <h4 class="text-primary font-weight-bold">Nuestros Productos</h4>
    <h4 class="display-4 font-weight-bold">Productos listos para llevar</h4>
  </div>
  <div class="row">
    <?php
    echo ProductCard::render(
      "img/persona1.png",
      "Suéter Patrio",
      "$10.99",
      "Un suéter cómodo y elegante, perfecto para ocasiones patrias."
    );

    echo ProductCard::render(
      "img/persona2.png",
      "Camiseta Blanca",
      "$15.99",
      "Camiseta básica ideal para personalizar con tus propios diseños."
    );

    echo ProductCard::render(
      "img/persona3.png",
      "Hoodie Negro",
      "$25.99",
      "Un hoodie con estilo moderno, ideal para climas fríos."
    );
    echo ProductCard::render(
      "img/persona4.png",
      "Hoodie Negro",
      "$25.99",
      "Un hoodie con estilo moderno, ideal para climas fríos."
    );
    ?>
  </div>
  <div class="row">
    <?php
    echo ProductCard::render(
      "img/persona1.png",
      "Suéter Patrio",
      "$10.99",
      "Un suéter cómodo y elegante, perfecto para ocasiones patrias."
    );

    echo ProductCard::render(
      "img/persona2.png",
      "Camiseta Blanca",
      "$15.99",
      "Camiseta básica ideal para personalizar con tus propios diseños."
    );

    echo ProductCard::render(
      "img/persona3.png",
      "Hoodie Negro",
      "$25.99",
      "Un hoodie con estilo moderno, ideal para climas fríos."
    );
    echo ProductCard::render(
      "img/persona4.png",
      "Hoodie Negro",
      "$25.99",
      "Un hoodie con estilo moderno, ideal para climas fríos."
    );
    ?>
  </div>
</div>

<div class="col-lg-12">
  <nav aria-label="Page navigation">
    <ul class="pagination justify-content-center mb-4">
      <li class="page-item disabled">
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>
      <li class="page-item active"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </li>
    </ul>
  </nav>
</div>