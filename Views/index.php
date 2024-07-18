<?php include_once 'views/template-principal/header.php'; ?>


    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/banner_img_03.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>Smart</b>-Tec</h1>
                                <h3 class="h2">Tu eCommerce perfecto</h3>
                                <p>
                                Descubre la tienda eCommerce que transforma tu experiencia tecnológica.
                                En Smart Tec, ofrecemos una amplia gama de productos innovadores,
                                desde gadgets y dispositivos inteligentes hasta accesorios tecnológicos
                                de última generación. Calidad, conveniencia y un servicio al cliente excepcional
                                nos definen. ¡Únete a la revolución digital con Smart Tec!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/banner_img_02.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">En Smart-Tec encontrarás lo último en tecnología</h1>
                                <h3 class="h2">¡No te lo pierdas!</h3>
                                <p>
                                    <strong> Gadgets Inteligentes </strong> Simplifica tu vida con nuestros dispositivos innovadores. <br>
                                    <strong> Accesorios Modernos </strong> Dale un toque especial a tus equipos con nuestros accesorios de alta calidad. <br>
                                    <strong> Explora nuestra tienda y encuentra todo lo que necesitas para estar a la vanguardia tecnológica. </strong>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/banner_img_01.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">En Smart-Tec</h1>
                                <h3 class="h2">Tu satisfacción es nuestra prioridad</h3>
                                <p>
                                    We bring you 100% free CSS templates for your websites. 
                                    If you wish to support TemplateMo, please make a small contribution via PayPal or tell your friends about our website. Thank you.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->


<!-- Start Categories of The Month Carousel -->
<section class="container py-5">
    <div class="row text-center pt-3">
        <div class="col-lg-6 m-auto">
            <h1 class="h1">Categorias destacadas</h1>
            <p>
                Lo más vendido en Smart-Tec. Descubre las categorías más populares de la tienda.
            </p>
        </div>
    </div>
    <div id="categoriesCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php 
            $active = 'active';
            foreach ($data['categorias'] as $index => $categoria) { 
                // Check if it's the start of a new slide
                if ($index % 4 == 0) { 
                    if ($index != 0) { 
                        echo '</div>'; // Close the previous slide if not the first
                    }
                    echo '<div class="carousel-item ' . $active . '"><div class="row">';
                    $active = ''; // Reset active after the first slide
                }
            ?>
                <div class="col-12 col-md-3 p-5 mt-3">
                    <a href="#"><img src="<?php echo $categoria['imagen']; ?>" class="rounded-circle img-fluid border"></a>
                    <h5 class="text-center mt-3 mb-3"><?php echo $categoria['categoria']; ?></h5>
                </div>
            <?php 
                // Close the last slide
                if ($index % 4 == 3 || $index == count($data['categorias']) - 1) {
                    echo '</div></div>';
                }
            } 
            ?>
        </div>
        <a class="carousel-control-prev" href="#categoriesCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#categoriesCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>



<!-- Start Featured Product -->
<section class="bg-light">
    <div class="container py-5">
        <div class="row text-center py-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Featured Product</h1>
                <p>
                    Reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident.
                </p>
            </div>
        </div>
        <div class="row">
            <?php foreach ($data['nuevosProductos'] as $producto) { ?>
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100">
                    <a href="<?php echo BASE_URL . 'principal/detail/' . $producto['id']; ?>">
                        <img src="<?php echo $producto['imagen']; ?>" class="card-img-top" alt="<?php echo $producto['nombre']; ?>">
                    </a>
                    <div class="card-body">
                        <ul class="list-unstyled d-flex justify-content-between">
                            <li>
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-muted fa fa-star"></i>
                                <i class="text-muted fa fa-star"></i>
                            </li>
                            <li class="text-muted text-right"><?php echo MONEDA . ' ' .  $producto['precio']; ?></li>
                        </ul>
                        <a href="<?php echo BASE_URL . 'principal/detail/' . $producto['id']; ?>" class="h2 text-decoration-none text-dark"><?php echo $producto['nombre']; ?></a>
                        <p class="card-text">
                            <?php echo $producto['descripcion']; ?>
                        </p>
                        <p class="text-muted">Reviews (24)</p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

    <!-- End Featured Product -->

    <?php include_once 'views/template-principal/footer.php'; ?>

</body>

</html>