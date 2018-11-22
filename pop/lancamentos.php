<?php
 //PHP para verificar qual o idioma do html
   include('../imports/idioma.php');
 ?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">
<?php
    include('../imports/head.php');
  ?>

<body>
    <!--importandoo menu da pagina -->
    <?php
    include('../imports/menu-secundario.php');
  ?>

    <!-- Conteudo da pagina  -->
    <main>
        <div class="container mt-2 mb-3">
            <div class="row no-gutters">
                <div class=" mt-1 col-md-6">

                    <div id="carouselpop" class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="../images/pop/LADY%20SHOW%20-%20Copia.jpg" alt="Primeiro Slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="../images/pop/taylor%20show%20-%20Copia.jpg" alt="Segundo Slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselpop" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Anterior</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselpop" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Próximo</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 mt-1">
                    <div class="container-fluid">

                        <h2 class="text-center">Lançamentos da Semana</h2>
                        <ul class="list-group">
                            <li class="list-group-item">1ª Loremipsum dolorsit ametconsec.</li>
                            <li class="list-group-item">2º Loremipsum dolorsit ametconsec.</li>
                            <li class="list-group-item">3º Loremipsum dolorsit ametconsec.</li>
                            <li class="list-group-item">4º Loremipsum dolorsit ametconsec.</li>
                            <li class="list-group-item">5º Loremipsum dolorsit ametconsec.</li>
                            <li class="list-group-item">6º Loremipsum dolorsit ametconsec.</li>
                            <li class="list-group-item">7º Loremipsum dolorsit ametconsec.</li>
                            <li class="list-group-item">8º Loremipsum dolorsit ametconsec.</li>
                            <li class="list-group-item">9º Loremipsum dolorsit ametconsec.</li>
                            <li class="list-group-item">10º Loremipsum dolorsit ametconsec.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- importando o footer da pagina -->
    <?php
    include('../imports/footer-secundario.php');
  ?>
</body>

</html>
