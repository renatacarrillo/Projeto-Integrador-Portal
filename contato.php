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
      <div id ="hed-contato" class="container">
        <div class="row no-gutters">
          <div class="col-12 header-contato text-center">
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
            <h2>Portal de Musica</h2>
            <p>Fale Conosco</p>
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
              <h3>Telefone</h3>
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
              <h3>Mensagem</h3>
              <p>+55 11 1234 5678</p>
            </div>
          </section>
        </div>
        <div class="col-6 col-lg-4 m-n1 text-center">
          <section class="cx-contato">
            <div class="icone-contato"><i class="fas fa-comment-alt"></i></div>
            <div class="texto-contato">
              <h3>Formulario</h3>
              <p>Preencha o Formulario</p>
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