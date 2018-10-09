<!DOCTYPE html>
<html lang="pt-br">
	<!--importando o head da pagina -->
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
          <div id="carouselSertanejo" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="first-slide" src="../images/sertanejo/musicas.jpg" alt="First slide">
                <div class="carousel-caption d-none d-block">
                  <h1>Destaques</h1>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                  <p><a class="btn btn-sm btn-outline-light" href="destaques.php" role="button">Veja mais</a></p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="second-slide" src="../images/sertanejo/lancamentos.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-block">
                  <h1>Lançamentos</h1>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                  <p><a class="btn btn-sm btn-outline-light" href="lancamentos.php" role="button">Confira</a></p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselSertanejo" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselSertanejo" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <div class="col-md-6 mt-1">
          <div class="container-fluid">
            <div class="row section-home">
              <div class="col-lg-12">
                <section class="w-auto sect-1-home-sert">
                  <div class="fundo-texto">
                    <h2 class="text-left">A Historia</h2>
                    <p class="text-left"><a href="origem.php">Conheça a historia do sertanejo.</a></p>
                  </div>
                </section>
              </div>
            </div>
            <div class="row no-gutters">
              <div class="mt-3 col-lg-6 ">
                <section class="mr-3 sect-2-home-sert">
                  <div class="fundo-texto">
                    <h2 class="text-left">Artistas</h2>
                    <p class="text-left"><a href="artistas.php">Veja os melhores artistas sertanejo.</a></p>
                  </div>
                </section>
              </div>
              <div class="mt-3 col-lg-6">
                <section class="sect-3-home-sert ">
                  <div class="fundo-texto">
                    <h2 class="text-left">Fatos e Marcos</h2>
                    <p class="text-left"><a href="marcos.php">Veja os fatos que marcaram o ritmo.</a></p>
                  </div>
                </section>
              </div>
            </div>
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
