<?php
  $home_pt = array('O Seu Portal da Música','Os melhores artistas e as musicas mais tocadas no momento você encontra aqui no Ecletic.Music.',"Navegue pelo site e aproveite todo o conteúdo feito para você que adora e curte boa musica.",
  'As músicas do Momento',"Aumente o Som e ouça nossas indicações","Quer tocar aquela Musica?","Veja Mais", "Notícias e Novidades","Fique por dentro das novidades do Mundo da Música","Daniel Realiza sonho de família em Ibiúna",
    "O novo sucesso da Katy Perry","Entrevista com The Strokes","Noticias","Novidades","As melhores músicas","classificação completa","Curte boa Música?","Confira então nossas indicações","Playlists",
    "Confira nossas playlists com as melhores seleções");
  $home_en = array('Your Music Portal','The best artists and the most played songs at the moment you can find it here at Ecletic.Music.',"Browse the site and enjoy all the content made for you who loves and enjoy good music.",
  "Momento's Songs","Increase the Sound and hear our indications","Quer tocar aquela Musica?","See more", "News and Updates","Stay tuned for the news of the World of Music","Daniel Realizes family dream in Ibiúna",
  "The new success of Katy Perry","Interview with The Strokes","News","News","The best songs","complete rankings","Enjoy good music?","Check out our indications","Playlists","
  Check out our playlists as the best selections");
  $home = array('PT'=> $home_pt,'EN' => $home_en);
// print_r($sertanejo);
//usar $ID para os Vetores
 ?>
<?php
//PHP para verificar qual o idioma do html
  include('imports/idioma.php');
?>
<!DOCTYPE html>
<html lang="<?php echo $lang?>">
<?php
  //importando o head da pagina
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
                        <article class="carousel-item active">
                            <img class="first-slide" src="images/principal/carrossel-01.jpg" alt="First slide">
                            <div class="container">
                                <div class="carousel-caption text-left">
                                    <h1>
                                        <?php echo $home[$ID][0]?>
                                    </h1>
                                    <p>
                                        <?php echo $home[$ID][1]?>
                                    </p>
                                    <p>
                                        <?php echo $home[$ID][2]?>
                                    </p>
                                </div>
                            </div>
                        </article>
                        <section class="carousel-item">
                            <img class="second-slide" src="images/principal/carrossel-02.jpg" alt="Second slide">
                            <div class="container">
                                <div class="carousel-caption">
                                    <h1>
                                        <?php echo $home[$ID][3]?>
                                    </h1>
                                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                    <p><a class="btn btn-sm btn-outline-light" href="<?php echo " ranking.php".$link?>" role="button">
                                            <?php echo $home[$ID][6]?></a></p>
                                </div>
                            </div>
                        </section>
                        <section class="carousel-item">
                            <img class="third-slide" src="images/principal/carrossel-03.jpg" alt="Third slide">
                            <div class="container">
                                <div class="carousel-caption text-right">
                                    <h1>
                                        <?php echo $home[$ID][4]?>
                                    </h1>
                                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                    <p><a class="btn btn-sm btn-outline-light" href="<?php echo " indicacoes.php".$link?>" role="button">
                                            <?php echo $home[$ID][6]?></a></p>
                                </div>
                            </div>
                        </section>
                        <section class="carousel-item">
                            <img class="four-slide" src="images/principal/carrossel-04.jpg" alt="Four slide">
                            <div class="container">
                                <div class="carousel-caption text-right">
                                    <h1>
                                        <?php echo $home[$ID][5]?>
                                    </h1>
                                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                    <p><a class="btn btn-sm btn-outline-light" href="<?php echo " cifras.php".$link?>" role="button">
                                            <?php echo $home[$ID][6]?></a></p>
                                </div>
                            </div>
                        </section>
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
            </div>
            <div class="container">
                <!-- As colun com os testos das Noticias -->
                <aside class="art-home mt-3">
                    <div class="row">
                        <div class="col">
                            <h2>
                                <?php echo $home[$ID][7]?>
                            </h2>
                            <p><a href="<?php echo " noticias.php".$link?>">
                                    <?php echo $home[$ID][8]?></a></p>
                        </div>
                    </div>
                    <div class="row text-center home-geral">
                        <div class="col-12 col-lg-4">
                            <a href="<?php echo " noticias.php".$link?>"><img class="rounded img-fluid" src="images/principal/home-1.jpg" alt="Generic placeholder image"></a>
                            <h2>
                                <?php echo $home[$ID][9]?>
                            </h2>
                            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies
                                vehicula ut id elit. <span class="badge badge-info">
                                    <?php echo $home[$ID][12]?></span></p>
                        </div>
                        <div class="col-12 col-lg-4">
                            <a href="<?php echo " noticias.php".$link?>"><img class="rounded img-fluid" src="images/noticias/slide/slide-01.jpg" alt="Generic placeholder image"></a>
                            <h2>
                                <?php echo $home[$ID][10]?>
                            </h2>
                            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies
                                vehicula ut id elit.<span class="badge badge-success">
                                    <?php echo $home[$ID][13]?></span></p>
                        </div>
                        <div class="col-12 col-lg-4">
                            <a href="<?php echo " noticias.php".$link?>"><img class="rounded img-fluid" src="images/principal/home-3.jpg" alt="Generic placeholder image"></a>
                            <h2>
                                <?php echo $home[$ID][11]?>
                            </h2>
                            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies
                                vehicula ut id elit. <span class="badge badge-success">
                                    <?php echo $home[$ID][13]?></span></p>
                        </div>
                    </div>
                </aside>
            </div><!-- /.container -->
            <div class="container">
                <div class="row mr-0">
                    <!--Section com o resumo dos rankings -->
                    <div class="col-lg-4">
                        <section class="rank shadow p-3 mb-5 bg-white rounded">
                            <div class="row">
                                <div class="col">
                                    <h2>
                                        <?php echo $home[$ID][14]?>
                                    </h2>
                                </div>
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-5">
                                    <img class="img-fluid" src="images/principal/ranking.jpg" alt="Top da Paradas">
                                </div>
                                <div class="col-7">
                                    <ol>
                                        <li class="r-item">Lorem ipsum dolor sit amet</li>
                                        <li class="r-item">Consectetur adipiscing elit</li>
                                        <li class="r-item">Suspendisse aliquam felis</li>
                                    </ol>
                                </div>
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-5">
                                    <img class="img-fluid" src="images/principal/ranking.jpg" alt="Top da Paradas">
                                </div>
                                <div class="col-7">
                                    <ol>
                                        <li class="r-item">Dui sodales euismod</li>
                                        <li class="r-item">Vestibulum mollis justo</li>
                                        <li class="r-item">At tortor suscipit</li>
                                    </ol>
                                </div>
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-5">
                                    <img class="img-fluid" src="images/principal/ranking.jpg" alt="Top da Paradas">
                                </div>
                                <div class="col-7">
                                    <ol>
                                        <li class="r-item">In viverra libero laoreet</li>
                                        <li class="r-item">Integer sit amet massa</li>
                                        <li class="r-item">Molestie tortor non</li>
                                    </ol>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p><a href="<?php echo " ranking.php".$link?>">
                                            <?php echo $home[$ID][15]?></a></p>
                                </div>
                            </div>
                        </section>
                    </div>
                    <!-- section com as sugestões de musicas -->
                    <div class="col-lg-8">
                        <div class="row">
                            <section class="home-indica">
                                <div class="container-fluid">
                                    <h2>
                                        <?php echo $home[$ID][16]?>
                                    </h2>
                                    <p><a href="<?php echo " indicacoes.php".$link?>">
                                            <?php echo $home[$ID][17]?></a></p>
                                    <!-- Linha 1 da sugestão -->
                                    <div class="row justify-content-md-center text-center">
                                        <div class="col-6 col-lg-4">
                                            <img class="rounded img-fluid" src="images/principal/home-9.jpg" alt="Lorem Ipsummm .">
                                            <p>Lorem Ipsummm.</p>
                                        </div>
                                        <div class="col-6 col-lg-4">
                                            <img class="rounded img-fluid" src="images/principal/home-4.jpg" alt="Donec sed odio duielit">
                                            <p>Donec sed odio duielit</p>
                                        </div>
                                        <div class="no-display col-6 col-lg-4">
                                            <img class="rounded img-fluid" src="images/principal/home-5.jpg" alt="Donec sed odio duielit.">
                                            <p>Donec sed odio duielit.</p>
                                        </div>
                                    </div>
                                    <!-- Linha 2 da sugestão -->
                                    <div class="row justify-content-md-center align-items-center text-center">
                                        <div class="col-6 col-lg-4">
                                            <img class="rounded img-fluid" src="images/principal/home-6.jpg" alt="Donec sed odio duielit.">
                                            <p>Donec sed odio duielit.</p>
                                        </div>
                                        <div class="col-6 col-lg-4">
                                            <img class="rounded img-fluid" src="images/principal/home-7.jpg" alt="Lorem Ipsummm">
                                            <p>Lorem Ipsummm</p>
                                        </div>
                                        <div class="no-display col-6 col-lg-4">
                                            <img class="rounded img-fluid" src="images/principal/home-8.jpg" alt="Donec sed odio duielit.">
                                            <p>Donec sed odio duielit.</p>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="row no-gutters">
                            <div class="col-12">
                                <section class="playlists">
                                    <h3>
                                        <?php echo $home[$ID][18]?>
                                    </h3>
                                    <p>
                                        <?php echo $home[$ID][19]?>
                                    </p>
                                    <div class="row text-center">
                                        <div class="col-12 col-sm-6 mb-3 mb-sm-0">
                                            <a href="https://www.spotify.com/br" target="_blank">
                                                <img class="rounded img-fluid" src="images/principal/spotify.jpg" alt="Playlist Spotify.">
                                            </a>
                                        </div>
                                        <div class="col-12 col-sm-6 mb-3 mb-sm-0">
                                            <a href="https://www.deezer.com/br/" target="_blank">
                                                <img class="rounded img-fluid" src="images/principal/deezer.jpg" alt="Playlist Deezer.">
                                            </a>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <!-- <div class="row">
            <div class="col-12 col-md-6 align-items-center">
              <section class="text-center">
                <a class="home-cifras" href="#">
                  <h3>Cifras</h3>
                </a>
              </section>
            </div>
            <div class="col-12 col-md-6 align-items-center">
              <section class="text-center">
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
                      <a href="#" class="list-sertanejo list-group-item list-group-item-action list-group-item-light">Sertanejo</a>
                    </div>
                  </div>
                </nav>
              </section>
            </div>
          </div> -->
                    </div>
                </div>
            </div>
    </main>
    <!-- importando o footer da pagina -->
    <?php
    include('imports/footer.php');
  ?>

</body>

</html>
