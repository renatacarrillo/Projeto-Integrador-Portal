<footer id="footer">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-10  col-md-12">
        <div class="container">
          <div class="row">
            <div class="col-3 col-md-1 py-2">
              <p class="text-center">SERVIÇOS</p>
            </div>
            <div class="col-8 col-md-3 pb-3 pb-sm-0">
              <nav class="menu-secundario">
                <ul class="nav flex-column pl-xs-3">
                  <li class="nav-item">
                    <a class="nav-link" href="../quem-somos.php">Sobre Nós</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../normas.php">Normas do Site</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../contato.php">Contato</a>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="col-3 col-md-1 py-2">
              <p class="text-center">MAPA DO SITE</p>
            </div>
            <div class="col-8 col-md-3 pb-3 pb-sm-0">
              <nav class="menu-secundario">
                <ul class="nav flex-column pl-xs-3">
                  <li class="nav-item">
                    <a class="nav-link" href="../index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../noticias.php">Noticias</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../ranking.php">Ranking</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../cifras.php">Cifras</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../indicacoes.php">Indicações</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link dropdown-toggle" data-toggle="collapse" href="#conteudosite"
                    role="button" aria-expanded="false" aria-controls="conteudosite">Conteudo</a>
                      <ul  class="collapse lista-conteudo" id="conteudosite">
                        <li class="nav-item"><a class="nav-link" href="../classica/index.php">Classica</a></li>
                        <li class="nav-item"><a class="nav-link" href="../hip-hop/index.php">Hip-Hop</a></li>
                        <li class="nav-item"><a class="nav-link" href="../indie/index.php">Indie</a></li>
                        <li class="nav-item"><a class="nav-link" href="../pop/index.php">Pop</a></li>
                        <li class="nav-item"><a class="nav-link" href="../punk/index.php">Punk</a></li>
                        <li class="nav-item"><a class="nav-link" href="../sertanejo/index.php">Sertanejo</a></li>
                      </ul>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="col-3 col-md-1 py-2">
              <p class="text-center">CONTATO</p>
            </div>
            <div class="col-8 col-md-3  pb-3 pb-sm-0">
              <nav class="menu-secundario">
                <ul class="nav flex-column pl-xs-3">
                  <li class="nav-item nav-link">
                    + 55 11 1254 5678
                  </li>
                  <li class="nav-item nav-link">
                    contato@ecletic.music.com.br
                  </li>
                  <li class="nav-item nav-link">
                    Sua Opinião nos ajuda!
                  </li>
                </ul>
              </nav>
              <div id="redes-sociais-footer" class="pt-2">
                <ul>
                  <li class="face"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  <li class="insta"><a href="#"><i class="fab fa-instagram"></i></a></li>
                  <li class="twit"><a href="#"><i class="fab fa-twitter"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-2">
        <div id="redes-sociais-footer-mobi">
          <ul>
            <li class="face"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li class="insta"><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li class="twit"><a href="#"><i class="fab fa-twitter"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="logo-footer">
          <img src="../images/principal/LOGO.svg" class="d-inline-block" alt="[LOGO] Ecletic.Music">
        </div>
      </div>
      <div class="col">
        <div class="text-right">
          <!-- Alterar  o Idioma do conteudo -->
          <?php
          $urlidioma = basename($_SERVER['SCRIPT_FILENAME']);
          // basename($_SERVER['SCRIPT_FILENAME'])

          if (!isset($_GET['i'])) {
            $_GET['i']=0;
          }

          echo '<p class="text-right"> Selecione seu Idioma:</p>';
          echo '<p class="text-right"> <a href="'.$urlidioma .'?i=1"><img src="../images/principal/united_states_flags.png" alt="Idioma Ingles"></a>';
          echo '<a href="'.$urlidioma .'?i=0"><img src="../images/principal/brazil_flags.png" alt="Idioma Portugues"></a></p>';
        ?>

        </div>
      </div>
    </div>
    <div class="row copy">
      <div class="col-12">
        <p><small>todos os direitos reservado e etc,etc e etc</small> </p>
      </div>
    </div>
  </div>
</footer>

<!-- Importanto os scripts JAVA -->
<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/bootstrap.min.js"> </script>
<script src="../js/nosso-js.js"> </script>
