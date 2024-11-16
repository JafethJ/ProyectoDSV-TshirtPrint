<?php
class ProductCard { //CLASE PARA LLAMARLO PARA UTILIZAR EN LOS DIFERENTES PRODUCTOS Y DISEÑOS
    public static function render($image, $title, $price, $description) {
        return '
        <div class="col-lg-3 col-md-6 mb-5">
            <div class="card border-0 bg-secondary text-center text-white">
                <img class="card-img-top" src="' . htmlspecialchars(string: $image) . '" alt="imagen">
                <div class="card-social d-flex align-items-center justify-content-center">
                    <p class="card-text">' . htmlspecialchars($description) . '</p>
                </div>
                <div class="card-body bg-secondary">
                    <h4 class="card-title text-primary">' . htmlspecialchars($title) . '</h4>
                    <p class="card-text">' . htmlspecialchars($price) . '</p>
                </div>
            </div>
        </div>';
    }
}
