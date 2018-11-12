<?php
 //PHP para verificar qual o idioma do html
   include('../imports/idioma.php');
 ?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">
<?php
   //importando o head da pagina
     include('../imports/head.php');
   ?>

<!--FINAL HEAD-->

<body>

    <!--NAV-->
    <?php 
    include('../imports/menu-secundario.php');
?>
    <!--FIM NAV-->
    <!--ARTICLE-->
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 mt-4">
                <section>
                    <img src="../images/classica/curiosidades-01.jpg" class="img-fluid rounded imagensmarcosclassica" alt="notícia cinco">
                    <h5 class="tmarcos font-weight-bold">Clássica ou erudita?</h5>
                    <p class="pmarcos text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada feugiat. Curabitur fermentum bibendum nulla, non dictum ipsum tincidunt non... <a href="#" class="cleiamais">Leia mais</a></p>
                </section>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mt-4">
                <section>
                    <img src="../images/classica/curiosidades-02.jpg" class="img-fluid rounded imagensmarcosclassica" alt="notícia cinco">
                    <h5 class="tmarcos font-weight-bold">Características</h5>
                    <p class="pmarcos text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada feugiat. Curabitur fermentum bibendum nulla, non dictum ipsum tincidunt non... <a href="#" class="cleiamais">Leia mais</a></p>
                </section>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mt-4">
                <section>
                    <img src="../images/classica/curiosidades-03.jpg" class="img-fluid rounded imagensmarcosclassica" alt="notícia cinco">
                    <h5 class="tmarcos font-weight-bold">Música brega?</h5>
                    <p class="pmarcos text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada feugiat. Curabitur fermentum bibendum nulla, non dictum ipsum tincidunt non... <a href="#" class="cleiamais">Leia mais</a></p>
                </section>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mt-4">
                <section>
                    <img src="../images/classica/curiosidades-04.jpg" class="img-fluid rounded imagensmarcosclassica" alt="notícia cinco">
                    <h5 class="tmarcos font-weight-bold">Como se vestir em um concerto?</h5>
                    <p class="pmarcos text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada feugiat. Curabitur fermentum bibendum nulla, non dictum ipsum tincidunt non... <a href="#" class="cleiamais">Leia mais</a></p>
                </section>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mt-4">
                <section>
                    <img src="../images/classica/curiosidades-05.jpg" class="img-fluid rounded imagensmarcosclassica" alt="notícia cinco">
                    <h5 class="tmarcos font-weight-bold">Gioachino Rossini e a embriaguez</h5>
                    <p class="pmarcos text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada feugiat. Curabitur fermentum bibendum nulla, non dictum ipsum tincidunt non... <a href="#" class="cleiamais">Leia mais</a></p>
                </section>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mt-4 mb-4">
                <section>
                    <img src="../images/classica/curiosidades-06.jpg" class="img-fluid rounded imagensmarcosclassica" alt="notícia cinco">
                    <h5 class="tmarcos font-weight-bold">A maldição dos compositores</h5>
                    <p class="pmarcos text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris aliquet malesuada feugiat. Curabitur fermentum bibendum nulla, non dictum ipsum tincidunt non... <a href="#" class="cleiamais">Leia mais</a></p>
                </section>
            </div>
        </div>
    </div>
    <!-- ARTICLE ENDS -->

    <!--FOOTER-->
    <?php 
    include('../imports/footer-secundario.php');
?>
    <!--FIM FOOTER-->


</body>

</html>
