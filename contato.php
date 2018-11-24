<?php
$contato_pt = array("Portal de Musica", "Fale Conosco", "Telefone", "Mensagem", "Formulario", "Preencha o Formulario");
$contato_en = array("Music Portal", "Contact Us", "Telephone", "Message", "Form", "Fill in the Form");
$contato_es = array("Portal de Musica", "Contáctenos", "Teléfono", "Mensaje", "Formulario", "Rellene el Formulario");
$contato = array('PT' => $contato_pt, 'EN' => $contato_en, 'ES' => $contato_es);
?>
<?php
//PHP para verificar qual o idioma do html
include('imports/idioma.php');
?>
<!DOCTYPE html>
<html lang ="<?php echo $lang ?>">
<!--head-->
<?php
include('imports/head.php');
?>
<body class="contatinho">
    <!-- Menu -->
    <?php
    include('imports/menu.php');
    ?>
    <header>
    <?php
        //alterar a cor do background de acordo o numero gerado
    $numbk = rand(1, 10);
    if ($numbk >= 1 and $numbk < 4) {
      $corbk = "header-contato-bg";
    } elseif ($numbk >= 5 and $numbk < 8) {
      $corbk = "header-contato-bg-2";
    } else {
      $corbk = "header-contato-bg-3";
    }
    ?>
      <div id ="hed-contato" class="container">
        <div class="row no-gutters">
          <div class="col-12 header-contato text-center <?php echo $corbk ?> ">
            <div id="sombra">
            <div id="header-cont" class="header-contato">
            </div>
            </div>
            <div class="contato mx-auto">
              <!-- Circulo Transparente + Foto -->
              <img class="mx-auto" src="images/principal/user-solid.svg" alt="logo">
            </div>
          </div>
        </div>
        <div class="row linha2">
          <div class="col-12 text-center">
            <!-- Título e Sub -->
            <!--  -->  
            <h2><?php echo $contato[$ID][0]; ?></h2> 
            <p><?php echo $contato[$ID][1]; ?></p> 
          </div>
        </div>
      </div>
    </header>
    <!-- Primeira Linha de Quadrados -->
    <div class="container mb-4">
      <div class="row justify-content-center text-center">
        <div class="col-6 col-lg-4 m-n1 text-center ">
          <section class="cx-contato">
            <div class="icone-contato"><i class="fas fa-phone"></i></div>
            <div class="texto-contato">
              <h3><?php echo $contato[$ID][2]; ?></h3>
              <p>+55 11 1234 5678</p>
            </div>
          </section>
        </div>
        <div class="col-6 col-lg-4 m-n1 text-center align-middle">
          <section class="cx-contato">
            <div class="icone-contato"><i class="fas fa-envelope"></i></div>
            <div class="texto-contato">
              <h3>E-mail</h3>
              <p>contato@ecletic.music.com </p>
            </div>
          </section>
        </div>
      </div>
      <div class="row mt-sm-4 justify-content-center text-center">
        <div class="col-6 col-lg-4 m-n1 text-center">
          <section class="cx-contato">
            <div class="icone-contato"><i class="fas fa-comment"></i></div>
            <div class="texto-contato">
              <h3><?php echo $contato[$ID][3]; ?></h3>
              <p>+55 11 1234 5678</p>
            </div>
          </section>
        </div>
        <div class="col-6 col-lg-4 m-n1 text-center">
          <section class="cx-contato">
            <div class="icone-contato"><i class="fas fa-comment-alt"></i></div>
            <div class="texto-contato">
              <h3><?php echo $contato[$ID][4]; ?></h3>
              <p><?php echo $contato[$ID][5]; ?></p>
            </div>
          </section>
        </div>
      </div>
    </div>
    <!-- Footer -->
    <?php
    include('imports/footer.php');
    ?>
</body>
</html>