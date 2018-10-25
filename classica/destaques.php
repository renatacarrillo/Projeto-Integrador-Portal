<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/meu.css">
    <link rel="stylesheet" href="css/mystyle.css">

    <title>Ecletic.music</title>

    <?php 
    include('/imports/head.php');
?>

</head>

<body>
    <!--NAV-->
    <?php 
    include('/imports/menu-secundario.php');
?>
    <!--FIM NAV-->

    <!--CARROSEL-->
    <div class="container">

        <div id="carouseldestaques" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
                <li data-target="#carouseldestaques" data-slide-to="0" class="active"></li>
                <li data-target="#carouseldestaques" data-slide-to="1" class="active"></li>
                <li data-target="#carouseldestaques" data-slide-to="2" class="active"></li>
            </ol>

            <div class="carousel-inner">
                
                <div class="carousel-item active">
                    <img src="images/slide/one.jpg" class="img-fluid d-block" alt="primeiro slide">
                    <div class="carousel-caption d-none d-md-block">
                            <h3 class="titledes">A maior orquestra brasileira</h3>
                            <p class="textdes">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus massa lectus, fringilla pharetra tortor aliquam vitae. Pellentesque luctus massa non elit viverra pellentesque. Cras vitae neque molestie, rhoncus ipsum sit amet, lobortis dui.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/slide/two.jpg" class="img-fluid d-block" alt="segundo slide">
                    <div class="carousel-caption d-none d-md-block">
                            <h3 class="titledes">Composições que marcaram o Brasil</h3>
                            <p class="textdes">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus massa lectus, fringilla pharetra tortor aliquam vitae. Pellentesque luctus massa non elit viverra pellentesque. Cras vitae neque molestie, rhoncus ipsum sit amet, lobortis dui.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/slide/three.jpg" class="img-fluid d-block" alt="terceiro slide">
                    <div class="carousel-caption d-none d-md-block">
                            <h3 class="titledes">Instrumentos principais</h3>
                            <p class="textdes">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus massa lectus, fringilla pharetra tortor aliquam vitae. Pellentesque luctus massa non elit viverra pellentesque. Cras vitae neque molestie, rhoncus ipsum sit amet, lobortis dui.</p>
                    </div>

                </div>

            </div>
            <a class="carousel-control-prev" href="#carouseldestaques" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouseldestaques" role="button" data-slide="next" id="slidethree">
                <span class="carousel-control-next-icon"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>
        <!--FIM CARROSEL-->
        <!--ARTICLE-->
        <div class="row mt-4 mb-4">
            <div class="col-12 col-md-4 col-lg-4">
                <section>
                    <a href="#"><h3 class="bordes" id="ajuste">A música clássica hoje</h3></a>
                    <img src="images/crowded.jpg" class="img-fluid" alt="notícia cinco">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada feugiat. Curabitur fermentum bibendum nulla, non dictum ipsum tincidunt non. Quisque convallis pharetra tempor. Donec id pretium leo. Pellentesque luctus massa non elit viverra pellentesque. Cras vitae neque molestie, rhoncus ipsum sit amet, lobortis dui.</p>
                </section>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <section>
                    <a href="#"><h3 class="bordes">Para estudar e relaxar</h3></a>
                    <img src="images/studies.jpg" class="img-fluid" alt="notícia cinco">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada feugiat. Curabitur fermentum bibendum nulla, non dictum ipsum tincidunt non. Quisque convallis pharetra tempor. Donec id pretium leo. Pellentesque luctus massa non elit viverra pellentesque. Cras vitae neque molestie, rhoncus ipsum sit amet, lobortis dui.</p>
                </section>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <section>
                    <a href="#"><h3 class="bordes">Sucesso nos desenhos</h3></a>
                    <img src="images/desenho.jpg" class="img-fluid" alt="notícia cinco">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada feugiat. Curabitur fermentum bibendum nulla, non dictum ipsum tincidunt non. Quisque convallis pharetra tempor. Donec id pretium leo. Pellentesque luctus massa non elit viverra pellentesque. Cras vitae neque molestie, rhoncus ipsum sit amet, lobortis dui.</p>
                </section>
            </div>
        </div>
        <!--FIM ARTICLE-->

    </div>

    <!--FOOTER-->
    <?php 
    include('/imports/footer-secundario.php');
?>
    <!--FIM FOOTER-->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.min.js"> </script>
    <script src="js/bootstrap.js"> </script>
    <script src="js/nosso-js.js"> </script>

</body>

</html>

<!--
-->
