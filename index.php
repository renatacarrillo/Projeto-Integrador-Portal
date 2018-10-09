<!DOCTYPE html>
<html lang="pt-br">
	<!--head-->
    <?php
        include('imports/head.php');
    ?>
    <body>

    <!-- Menu top das paginas -->
    <?php
      include('imports/menu.php');
      ?>
    <!-- Conteúdo do pagina -->
   <main>
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
          <img class="first-slide" src="images/home/carrossel-01.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption text-left">
              <h1>Example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-sm btn-outline-light" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="second-slide" src="images/home/carrossel-02.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-sm btn-outline-light" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="third-slide" src="images/home/carrossel-03.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption text-right">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-sm btn-outline-light" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="four-slide" src="images/home/carrossel-04.jpg" alt="Four slide">
          <div class="container">
            <div class="carousel-caption text-right">
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
    <div class="container">
      <!-- As colun com os testos do carrossel -->
      <article class="art-home">
        <div class="row">
          <div class="col">
            <h2>Noticias e Novidades</h2>
            <p><a href="#">Fique por dentro das novidades do Mundo da Musica</a></p>
          </div>
        </div>
        <div class="row text-center home-geral">
          <div class="col-12 col-lg-4">
            <a href="#"><img class="rounded img-fluid" src="images/home/home-1.jpg" alt="Generic placeholder image"></a>
            <h2>Lorem Ipsum</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies
              vehicula ut id elit. <span class="badge badge-info">Noticias</span></p>
          </div>
          <div class="col-12 col-lg-4">
            <a href="#"><img class="rounded img-fluid" src="images/home/home-2.jpg" alt="Generic placeholder image"></a>
            <h2>Lorem Ipsum</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies
              vehicula ut id elit.<span class="badge badge-success">Novidades</span></p>
          </div>
          <div class="col-12 col-lg-4">
            <a href="#"><img class="rounded img-fluid" src="images/home/home-3.jpg" alt="Generic placeholder image"></a>
            <h2>Lorem Ipsum</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies
              vehicula ut id elit. <span class="badge badge-success">Novidades</span></p>
          </div>
        </div>
      </article>
    </div><!-- /.container -->
    <div class="container">
      <div class="row mr-0">
        <!--Section com o resumo dos rankings -->
        <div class="col-lg-4">
          <section class="rank shadow-sm p-3 mb-5 bg-white rounded">
            <div class="row">
              <div class="col">
                <h2>Ranking</h2>
              </div>
            </div>
            <div class="row no-gutters align-items-center">
              <div class="col-5">
                <img class="img-fluid" src="images/home/ranking.png" alt="Top da Paradas">
              </div>
              <div class="col-7">
                <ol>
                  <li class="r-item">Lorem ipsum</li>
                  <li class="r-item">Lorem ipsum</li>
                  <li class="r-item">Lorem ipsum</li>
                </ol>
              </div>
            </div>
            <div class="row no-gutters align-items-center">
              <div class="col-5">
                <img class="img-fluid" src="images/home/ranking.png" alt="Top da Paradas">
              </div>
              <div class="col-7">
                <ol>
                  <li class="r-item">Lorem ipsum</li>
                  <li class="r-item">Lorem ipsum</li>
                  <li class="r-item">Lorem ipsum</li>
                </ol>
              </div>
            </div>
            <div class="row no-gutters align-items-center">
              <div class="col-5">
                <img class="img-fluid" src="images/home/ranking.png" alt="Top da Paradas">
              </div>
              <div class="col-7">
                <ol>
                  <li class="r-item">Lorem ipsum</li>
                  <li class="r-item">Lorem ipsum</li>
                  <li class="r-item">Lorem ipsum</li>
                </ol>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <p><a href="#">Ranking completo</a></p>
              </div>
            </div>
          </section>
        </div>
        <!-- section com as sugestões de musicas -->
        <div class="col-lg-8">
          <div class="row">
            <section class="home-indica">
              <div class="container-fluid">
                <h2>Curte boa Musica?</h2>
                <p>Confira então nossas <a href="#">indicações</a></p>
                <!-- Linha 1 da sugestão -->
                <div class="row justify-content-md-center text-center">
                  <div class="col-6 col-lg-4">
                    <img class="rounded img-fluid" src="images/home/home-9.jpg" alt="Donec sed odio duielit.">
                    <p>Donec sed odio duielit.</p>
                  </div>
                  <div class="col-6 col-lg-4">
                    <img class="rounded img-fluid" src="images/home/home-4.jpg" alt="Lorem Ipsummm">
                    <p>Lorem Ipsummm</p>
                  </div>
                  <div class="no-display col-6 col-lg-4">
                    <img class="rounded img-fluid" src="images/home/home-5.jpg" alt="Donec sed odio duielit.">
                    <p>Donec sed odio duielit.</p>
                  </div>
                </div>
                <!-- Linha 2 da sugestão -->
                <div class="row justify-content-md-center align-items-center text-center">
                  <div class="col-6 col-lg-4">
                    <img class="rounded img-fluid" src="images/home/home-6.jpg" alt="Donec sed odio duielit.">
                    <p>Donec sed odio duielit.</p>
                  </div>
                  <div class="col-6 col-lg-4">
                    <img class="rounded img-fluid" src="images/home/home-7.jpg" alt="Lorem Ipsummm">
                    <p>Lorem Ipsummm</p>
                  </div>
                  <div class="no-display col-6 col-lg-4">
                    <img class="rounded img-fluid" src="images/home/home-8.jpg" alt="Donec sed odio duielit.">
                    <p>Donec sed odio duielit.</p>
                  </div>
                </div>
              </div>
            </section>
          </div>
          <div class="row">
            <div class="col-12 col-md-6 align-items-center">
              <section class="text-center">
                <a class="home-cifras" href="#">
                  <h3>Cifras</h3>
                </a>
              </section>
            </div>
            <div class="col-12 col-md-6 align-items-center">
              <section class="text-center">
                <!-- <a class="home-ritmo" href="#">
                  <h3>Escolha seu Ritmo</h3>
                </a> -->

                <a class="home-ritmo" data-toggle="collapse" href="#escolharitmo" role="button" aria-expanded="false" aria-controls="escolharitmo">
                  <h3>Escolha seu Ritmo</h3>
                </a>
                <nav>
                  <div class="collapse" id="escolharitmo">
                    <div class="list-group">
                      <a href="#" class="list-group-item list-group-item-action list-group-item-light">Classica</a>
                      <a href="#" class="list-group-item list-group-item-action list-group-item-light">Hip-Hop</a>
                      <a href="#" class="list-group-item list-group-item-action list-group-item-light">Indie</a>
                      <a href="#" class="list-group-item list-group-item-action list-group-item-light">Pop</a>
                      <a href="#" class="list-group-item list-group-item-action list-group-item-light">Punk</a>
                      <a href="#" class="list-group-item list-group-item-action list-group-item-light">Sertanejo</a>
                    </div>
                  </div>
                </nav>
              </section>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
         <!-- FOOTER -->
        <?php
            include('imports/footer.php');
        ?>

    </body>
</html>
