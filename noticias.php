<!doctype html>
<html lang="pt-br">

<!--HEAD-->
    
    <?php 
    include('imports/head.php');
?>

<!--FINAL HEAD-->
    
<body>
    <!--NAV-->
    <?php 
    include('imports/menu.php');
?>
    <!--NAV ENDS-->

    <div class="container">
        <!---INICIO CARROSSEL-->
        <div id="carouselnoticias" class="carousel slide mb-3" data-ride="carousel">

            <div class="carousel-inner">



                <div class="carousel-item active">

                    <img src="images/noticias/slide/katy-perry.jpg" class="img-fluid d-block imgnot" alt="primeiro slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="tnoticias">O novo sucesso da Katy Perry</h3>
                        <p class="pnoticias">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus massa lectus, fringilla pharetra tortor aliquam vitae. Pellentesque luctus massa non elit viverra pellentesque.</p>
                    </div>
                </div>

                <div class="carousel-item">

                    <img src="images/noticias/slide/luan-santana.png" class="img-fluid d-block imgnot" alt="segundo slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="tnoticias">Conheça mais sobre a estrelinha do sertanejo universitário</h3>
                        <p class="pnoticias">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus massa lectus, fringilla pharetra tortor aliquam vitae. Pellentesque luctus massa non elit viverra pellentesque.</p>
                    </div>

                </div>

                <div class="carousel-item">

                    <img src="images/noticias/slide/orquestra-brasileira.jpg" class="img-fluid d-block imgnot" alt="terceiro slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="tnoticias">A maior orquestra brasileira</h3>
                        <p class="pnoticias">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed finibus massa lectus, fringilla pharetra tortor aliquam vitae. Pellentesque luctus massa non elit viverra pellentesque.</p>
                    </div>

                </div>

            </div>

            <a class="carousel-control-prev" href="#carouselnoticias" role="button" data-slide="prev">

                <span class="carousel-control-prev-icon"></span>
                <span class="sr-only">Anterior</span>

            </a>

            <a class="carousel-control-next" href="#carouselnoticias" role="button" data-slide="next">

                <span class="carousel-control-next-icon"></span>
                <span class="sr-only">Próximo</span>

            </a>


        </div>

        <!--FINAL CARROSSEL-->

        <!--ARTICLE-->
        <div class="row">
            <div class="col-12 col-md-6 col-lg-3 ">
                <img src="images/noticias/gusttavo.jpg" class="img-fluid mt-3" alt="Gusttavo Lima">
            </div>
            <article class="col-12 col-md-6 col-lg-3 ">
                <div>
                    <h3 class="tnot mt-3">Gusttavo Lima e o sucesso</h3>
                    <p class="pnot">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada feugiat... <a href="#"> Leia mais</a></p>
                </div>
            </article>
            <div class="col-12 col-md-6 col-lg-3 ">
                <img src="images/noticias/ratos.jpg" class="img-fluid  mt-3" alt="Ratos de Porão">
            </div>
            <article class="col-12 col-md-6 col-lg-3">
                <div>
                    <h3 class="tnot mt-3">Por que ouvir Ratos de Porão?</h3>
                    <p class="pnot">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada feugiat... <a href="#"> Leia mais</a></p>
                </div>
            </article>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-3 mt-3">
                <img src="images/noticias/Drake.jpg" class="img-fluid" alt="Drake">
            </div>
            <article class="col-12 col-md-6 col-lg-3 mt-3 mb-3">
                <div>
                    <h3 class="tnot">Topo das paradas: Bateu os Beatles!</h3>
                    <p class="pnot">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada feugiat... <a href="#"> Leia mais</a></p>
                </div>
            </article>
            <div class="col-12 col-md-6 col-lg-3 mt-3">
                <img src="images/noticias/thenghb.jpg" class="img-fluid" alt="The Neighbourhood">
            </div>
            <article class="col-12 col-md-6 col-lg-3 mt-3 mb-3">
                <div>
                    <h3 class="tnot">Novo albúm: The Neighbourhood</h3>
                    <p class="pnot">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada feugiat... <a href="#"> Leia mais</a></p>
                </div>
            </article>
        </div>
    </div>

    <!--FIM ARTICLE-->



    <!--FOOTER-->
    <?php 
    include('imports/footer.php');
?>
    <!--FIM FOOTER-->

</body>

</html>
