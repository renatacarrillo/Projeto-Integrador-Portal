  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-1 col-sm-6">
          <p>SERVIÇOS</p>
        </div>
        <div class="col-md-3">
          <nav class="menu-secundario">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="#">Sobre Nós</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Promoções</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Devoluções</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">FAQ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Seja Um Apoiador</a>
              </li>
            </ul>
          </nav>
        </div>
        <div class="col-md-1 col-sm-6">
          <p>MAPA</p>
        </div>
        <div class="col-md-3">
          <nav class="menu-secundario">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="artistas.php">Artistas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="noticias.php">Noticias</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="ranking.php">Ranking</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cifras.php">Cifras</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="indicacoes.php">Indicações</a>
              </li>
            </ul>
          </nav>
        </div>
        <div class="col-md-1">
          <p>CONTATO</p>
        </div>
        <div class="col-md-3 col-sm-12">
          <nav class="menu-secundario">
            <ul class="nav flex-column">
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
          <div id="redes-sociais-footer">
            <ul>
              <li class="face"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li class="insta"><a href="#"><i class="fab fa-instagram"></i></a></li>
              <li class="twit"><a href="#"><i class="fab fa-twitter"></i></a></li>
            </ul>
          </div>
          <div class="logo-footer">
            <img src="images/home/LOGO.svg" class="d-inline-block" alt="[LOGO] Ecletic.Music">
          </div>
          <div class="text-right">
            <!-- Alterar  o Idioma do conteudo -->
            <?php
            $urlidioma = basename($_SERVER['SCRIPT_FILENAME']);
            // basename($_SERVER['SCRIPT_FILENAME'])

            if (!isset($_GET['i'])) {
              $_GET['i']=2;
            }
            // if ($_GET['i']==1) {
            //   echo "idioma atual: Ingles<br>" .$urlidioma ."<br>";
            // }
            // if ($_GET['i']==2) {
            //   echo "idioma atual: Portugues <br>" .$urlidioma ."<br>";
            // }
            echo '<p class="text-right"> Selecione seu Idioma:</p>';
            echo '<p class="text-right"> <a href="'.$urlidioma .'?i=1"><img src="images/home/united_states_flags.png" alt="Idioma Ingles"></a>';
            echo '<a href="'.$urlidioma .'?i=2"><img src="images/home/brazil_flags.png" alt="Idioma Portugues"></a</p>';
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
	<script src="js/jquery-3.3.1.min.js"> </script>
	<script src="js/bootstrap.min.js"> </script>
  <script src="js/nosso-js.js"> </script>
