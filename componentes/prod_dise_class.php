<?php
class ProductCard
{ //CLASE PARA LLAMARLO PARA UTILIZAR EN LOS DIFERENTES PRODUCTOS Y DISEÑOS
    public static function render($image, $title, $price, $description)
    {
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
                <form method="POST" action="carrito.php">
                    <input type="hidden" name="image" value="' . htmlspecialchars($image) . '">
                    <input type="hidden" name="title" value="' . htmlspecialchars($title) . '">
                    <input type="hidden" name="price" value="' . htmlspecialchars($price) . '">
                    <input type="hidden" name="description" value="' . htmlspecialchars($description) . '">
                    <button type="submit" class="btn btn-outline-primary mt-2 px-3">
                        Añadir al carrito <i class="fa fa-angle-right"></i>
                    </button><br><br>
                    
                </form>
            </div>
        </div>';
    }
}
