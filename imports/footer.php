<!-- definição em PHP para alterar o idioma no footer-->
<?php
  $footer_pt = array("Serviços","Mapa do Site","Todos os direitos reservado e etc,etc e etc","Idioma:","Sua Opinião nos ajuda!");
  $footer_en = array("Services","Site Map","All rigths reserved and etc, etc and etc...","Language:","Your opinion helps us!");
  //$footer = array($footer_pt, $footer_en);
  $footer = array('PT'=> $footer_pt,'EN' => $footer_en);
?>

  <footer id="footer">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-10  col-md-12">
          <div class="container">
            <div class="row">
              <div class="col-3 col-md-1 py-2">
                <p class="text-center"><?php echo strtoupper($footer[$ID][0])?></p>
              </div>
              <div class="col-8 col-md-3 pb-3 pb-sm-0">
                <nav class="menu-secundario">
                  <ul class="nav flex-column pl-xs-3">
                    <li class="nav-item">
                      <a class="nav-link" href="quem-somos.php"><?php echo $menu[$ID][5]?></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="normas.php"><?php echo $menu[$ID][7]?></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="contato.php"><?php echo $menu[$ID][6]?></a>
                    </li>
                  </ul>
                </nav>
              </div>
              <div class="col-3 col-md-1 py-2">
                <p class="text-center"><?php echo strtoupper($footer[$ID][1])?></p>
              </div>
              <div class="col-8 col-md-3 pb-3 pb-sm-0">
                <nav class="menu-secundario">
                  <ul class="nav flex-column pl-xs-3">
                    <li class="nav-item">
                      <a class="nav-link" href="index.php"><?php echo $menu[$ID][0]?></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="noticias.php"><?php echo $menu[$ID][1]?></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="ranking.php"><?php echo $menu[$ID][2]?></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="cifras.php"><?php echo $menu[$ID][3]?></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="indicacoes.php"><?php echo $menu[$ID][4]?></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link dropdown-toggle" data-toggle="collapse" href="#conteudosite"
                      role="button" aria-expanded="false" aria-controls="conteudosite"><?php echo $menu[$ID][8]?></a>
                        <ul  class="collapse lista-conteudo" id="conteudosite">
                          <li class="nav-item"><a class="nav-link" href="classica/index.php">Classica</a></li>
                          <li class="nav-item"><a class="nav-link" href="hip-hop/index.php">Hip-Hop</a></li>
                          <li class="nav-item"><a class="nav-link" href="indie/index.php">Indie</a></li>
                          <li class="nav-item"><a class="nav-link" href="pop/index.php">Pop</a></li>
                          <li class="nav-item"><a class="nav-link" href="punk/index.php">Punk</a></li>
                          <li class="nav-item"><a class="nav-link" href="sertanejo/index.php">Sertanejo</a></li>
                        </ul>
                    </li>
                  </ul>
                </nav>
              </div>
              <div class="col-3 col-md-1 py-2">
                <p class="text-center"><?php echo strtoupper($menu[$ID][6])?></p>
              </div>
              <div class="col-8 col-md-3  pb-3 pb-sm-0">
                <nav class="menu-secundario">
                  <ul class="nav flex-column pl-xs-3">
                    <li class="nav-item nav-link">
                      +55 11 1254 5678
                    </li>
                    <li class="nav-item nav-link">
                      contato@ecletic.music.com
                    </li>
                    <li class="nav-item nav-link">
                      <?php echo $footer[$ID][4] ?>
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
            <img src="images/principal/LOGO.svg" class="d-inline-block" alt="[LOGO] Ecletic.Music">
          </div>
        </div>
        <div class="col">
          <div class="text-right">
            <!-- Alterar  o Idioma do conteudo -->
            <?php
            $urlidioma = basename($_SERVER['SCRIPT_FILENAME']);
            // basename($_SERVER['SCRIPT_FILENAME'])
            // if ($_GET['i']==1) {
            //   echo "idioma atual: Ingles<br>" .$urlidioma ."<br>";
            // }
            // if ($_GET['i']==2) {
            //   echo "idioma atual: Portugues <br>" .$urlidioma ."<br>";
            // }
            echo '<p class="text-right">' .$footer[$ID][3] .'</p>';
            echo '<p class="text-right"> <a href="'.$urlidioma .'?i=EN"><img src="images/principal/united_states_flags.png" alt="Idioma Ingles"></a>';
            echo '<a href="'.$urlidioma .'?i=PT"><img src="images/principal/brazil_flags.png" alt="Idioma Portugues"></a></p>';
          ?>

          </div>
        </div>
      </div>
      <div class="row copy">
        <div class="col-12">
          <p><small> <?php echo $footer[$ID][2] ?></small> </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- Importanto os scripts JAVA -->
	<script src="js/jquery-3.3.1.min.js"> </script>
	<script src="js/bootstrap.min.js"> </script>
  <script src="js/nosso-js.js"> </script>
