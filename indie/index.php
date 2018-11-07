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

   
    <!-- Conteúdo da Página -->
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

        <!-- Título & Subtítulo -->
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h2>Mundo Indie</h2>
                    <h3 class="titulos-indie">Lorem ipsum dolor sit amet.</h3>
                </div>
            </div>
        </div>
        
        <!-- Texto -->
        <div class="container">    
            <div class="row text-justify">
                <div class="col-lg-12" id="tt">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rutrum molestie auctor. Vestibulum id ultrices diam, ac efficitur magna. Nam viverra faucibus enim ac bibendum. Curabitur quam lorem, efficitur a est accumsan, dictum consectetur leo. Etiam tempus sem odio. Duis et augue tempor, imperdiet neque quis, luctus sem. Nam eleifend ornare facilisis. Fusce ultricies luctus lacus, scelerisque accumsan risus convallis in. Phasellus tincidunt tortor et aliquam mollis. Donec ac est lorem. Nullam et pretium purus. Vivamus quis diam sagittis, egestas tellus eget, faucibus neque.</p>
                </div>
            </div>
        </div>

        <!-- Quadrados 1 ao 3 -->
        <br>

        <div class="container">
            <div class="row text-center home-geral">

                <div class="col-12 col-lg-4">
                    <a href="#"><img class="rounded img-fluid" src="../images/principal/home-1.jpg" alt="Generic placeholder image"></a>
                </div>

                <div class="col-12 col-lg-4">
                    <a href="#"><img class="rounded img-fluid" src="../images/principal/home-2.jpg" alt="Generic placeholder image"></a>
                </div>

                <div class="col-12 col-lg-4">
                    <a href="#"><img class="rounded img-fluid" src="../images/principal/home-3.jpg" alt="Generic placeholder image"></a>
                </div>

            </div>
        </div>

        <!-- Quadrados 4 ao 6 -->
        <br>

        <div class="container">
            <div class="row text-center home-geral">

                <div class="col-12 col-lg-4">
                    <a href="#"><img class="rounded img-fluid" src="../images/principal/home-1.jpg" alt="Generic placeholder image"></a>
                </div>

                <div class="col-12 col-lg-4">
                    <a href="#"><img class="rounded img-fluid" src="../images/principal/home-2.jpg" alt="Generic placeholder image"></a>
                </div>

                <div class="col-12 col-lg-4">
                    <a href="#"><img class="rounded img-fluid" src="../images/principal/home-3.jpg" alt="Generic placeholder image"></a>
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