<!doctype html>
<html lang="pt-br">

<!--HEAD-->

<?php 
    include('../imports/head.php');
?>

<!--FINAL HEAD-->

<body>
    <!--NAV-->
    <?php 
    include('../imports/menu-secundario.php');
?>
    <!--FIM NAV-->

    <!--CARROSEL-->
    <div class="container">
        <div class="row">
            <div id="carouseldestaques" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner">

                    <div class="carousel-item active">

                        <img src="../images/classica/slide/onetesteedi.jpg" class="img-fluid d-block" alt="primeiro slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 class="tcarousel">A maior orquestra brasileira</h3>
                            <p class="pcarousel">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus massa lectus, fringilla pharetra tortor aliquam vitae. Pellentesque luctus massa non elit viverra pellentesque. Cras vitae neque molestie, rhoncus ipsum sit amet, lobortis dui.</p>
                        </div>
                    </div>

                    <div class="carousel-item">

                        <img src="../images/classica/slide/twotesteedi.jpg" class="img-fluid d-block" alt="segundo slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 class="tcarousel">Composições que marcaram o Brasil</h3>
                            <p class="pcarousel">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus massa lectus, fringilla pharetra tortor aliquam vitae. Pellentesque luctus massa non elit viverra pellentesque. Cras vitae neque molestie, rhoncus ipsum sit amet, lobortis dui.</p>
                        </div>
                    </div>

                    <div class="carousel-item imgdestaques">

                        <img src="../images/classica/slide/threetesteedit.jpg" class="img-fluid d-block" alt="terceiro slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h3 class="tcarousel">Instrumentos principais</h3>
                            <p class="pcarousel">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus massa lectus, fringilla pharetra tortor aliquam vitae. Pellentesque luctus massa non elit viverra pellentesque. Cras vitae neque molestie, rhoncus ipsum sit amet, lobortis dui.</p>
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
        </div>
        <!--FIM CARROSEL-->
        <!--ARTICLE-->
        <div class="row mt-4 mb-2">
            <div class="col-12 col-md-4 col-lg-4">
                <section>
                    <a href="#" class="tdestaqueslink">
                        <h3 class="tdestaques text-center">A música clássica hoje</h3>
                    </a>
                    <img src="../images/classica/crowdedteste.jpg" class="img-fluid" alt="notícia cinco">
                    <p class="pdestaques text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada feugiat. Curabitur fermentum bibendum nulla, non dictum ipsum tincidunt non. Quisque convallis pharetra tempor. Donec id pretium leo. Pellentesque luctus massa non elit viverra pellentesque. Cras vitae neque molestie, rhoncus ipsum sit amet, lobortis dui.</p>
                </section>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <section>
                    <a href="#" class="tdestaqueslink">
                        <h3 class="tdestaques text-center">Para estudar e relaxar</h3>
                    </a>
                    <img src="../images/classica/studiestest.jpg" class="img-fluid" alt="notícia cinco">
                    <p class="pdestaques text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada feugiat. Curabitur fermentum bibendum nulla, non dictum ipsum tincidunt non. Quisque convallis pharetra tempor. Donec id pretium leo. Pellentesque luctus massa non elit viverra pellentesque. Cras vitae neque molestie, rhoncus ipsum sit amet, lobortis dui.</p>
                </section>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <section>
                    <a href="#" class="tdestaqueslink">
                        <h3 class="tdestaques text-center">Sucesso nos desenhos</h3>
                    </a>
                    <img src="../images/classica/desenhoteste.jpg" class="img-fluid" alt="notícia cinco">
                    <p class="pdestaques text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada feugiat. Curabitur fermentum bibendum nulla, non dictum ipsum tincidunt non. Quisque convallis pharetra tempor. Donec id pretium leo. Pellentesque luctus massa non elit viverra pellentesque. Cras vitae neque molestie, rhoncus ipsum sit amet, lobortis dui.</p>
                </section>
            </div>
        </div>
        <!--FIM ARTICLE-->

    </div>

    <!--FOOTER-->
    <?php 
    include('../imports/footer-secundario.php');
?>
    <!--FIM FOOTER-->

</body>

</html>
