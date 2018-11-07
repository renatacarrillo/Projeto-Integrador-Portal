<!DOCTYPE html>
<html lang="pt-br">

<!--importando o head da pagina -->
<?php
    include('../imports/head.php');
?>
    
<body>

<!-- Menu -->
<?php
    include('../imports/menu-secundario.php');
?>
    <!-- Conteúdo da pagina -->
    <main>

        <!-- Carrocel -->
        <div class="container">
            
            <div id="myCarousel" class="carousel slide" data-ride="carousel">

                <ol class="carousel-indicators my-carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                        </ol>

                <div class="carousel-inner">

                            <div class="carousel-item active">
                                <img class="first-slide" src="../images/principal/carrossel-01.jpg" alt="First slide">
                                <div class="container">
                                    <div class="carousel-caption text-left">
                                        <h1>Example headline.</h1>
                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                        <p><a class="btn btn-sm btn-outline-light" href="#" role="button">Sign up today</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <img class="second-slide" src="../images/principal/carrossel-02.jpg" alt="Second slide">
                                <div class="container">
                                    <div class="carousel-caption text-left">
                                        <h1>Another example headline.</h1>
                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                        <p><a class="btn btn-sm btn-outline-light" href="#" role="button">Learn more</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <img class="third-slide" src="../images/principal/carrossel-03.jpg" alt="Third slide">
                                <div class="container">
                                    <div class="carousel-caption text-left">
                                        <h1>One more for good measure.</h1>
                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                        <p><a class="btn btn-sm btn-outline-light" href="#" role="button">Browse gallery</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <img class="four-slide" src="../images/principal/carrossel-04.jpg" alt="Four slide">
                                <div class="container">
                                    <div class="carousel-caption text-left">
                                        <h1>One more for good measure.</h1>
                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                        <p><a class="btn btn-sm btn-outline-light" href="#" role="button">Browse gallery</a></p>
                                    </div>
                                </div>
                            </div>

                        </div>

                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>

            </div>
        </div>
        <!-- Final Carrocel -->
        <br>    
        
        <div class="container">
                
            <!-- Primeria Linha -->
            <div class="row text-center home-geral">
                
                <div class="col-lg-3">
                    <a href="#"><img class="rounded img-fluid" src="../images/principal/home-1.jpg" alt="Generic placeholder image"></a>
                    <h2>Lorem Ipsum</h2>
                    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. <span class="badge badge-info">Noticias</span></p>
                </div>

                <div class="col-lg-3">
                    <a href="#"><img class="rounded img-fluid" src="../images/principal/home-2.jpg" alt="Generic placeholder image"></a>
                    <h2>Lorem Ipsum</h2>
                    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit.<span class="badge badge-success">Novidades</span></p>
                </div>

                <div class="col-lg-3">
                    <a href="#"><img class="rounded img-fluid" src="../images/principal/home-3.jpg" alt="Generic placeholder image"></a>
                    <h2>Lorem Ipsum</h2>
                    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. <span class="badge badge-success">Novidades</span></p>
                </div>

                <div class="col-lg-3">
                    <a href="#"><img class="rounded img-fluid" src="../images/principal/home-3.jpg" alt="Generic placeholder image"></a>
                    <h2>Lorem Ipsum</h2>
                    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. <span class="badge badge-success">Novidades</span></p>
                </div>
                
            </div>

            <!-- Segunda Linha -->
            <br>

            <div class="row text-center home-geral">
                <div class="col-lg-3">
                    <a href="#"><img class="rounded img-fluid" src="../images/principal/home-1.jpg" alt="Generic placeholder image"></a>
                    <h2>Lorem Ipsum</h2>
                    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. <span class="badge badge-info">Noticias</span></p>
                </div>

                <div class="col-lg-3">
                    <a href="#"><img class="rounded img-fluid" src="../images/principal/home-2.jpg" alt="Generic placeholder image"></a>
                    <h2>Lorem Ipsum</h2>
                    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit.<span class="badge badge-success">Novidades</span></p>
                </div>

                <div class="col-lg-3">
                    <a href="#"><img class="rounded img-fluid" src="../images/principal/home-3.jpg" alt="Generic placeholder image"></a>
                    <h2>Lorem Ipsum</h2>
                    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. <span class="badge badge-success">Novidades</span></p>
                </div>

                <div class="col-lg-3">
                    <a href="#"><img class="rounded img-fluid" src="../images/principal/home-3.jpg" alt="Generic placeholder image"></a>
                    <h2>Lorem Ipsum</h2>
                    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. <span class="badge badge-success">Novidades</span></p>
                </div>
            </div>
        
        </div>

    </main>
    
    <!-- FOOTER -->
    <br>

    <?php
        include('../imports/footer-secundario.php');
    ?>
    
</body>

</html>